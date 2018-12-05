<?php


namespace SkyChin\HackerNews;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;

/**
 *
 * @method array topStories()
 * @method array newStories()
 * @method array askStories()
 * @method array showStories()
 * @method array jobStories()
 * @method array maxItem()
 * @method array item($id)
 * @method array user($id)
 *
 * @package SkyChin\Firebase
 */

class HackerNews
{
    private $baseUrl = 'https://hacker-news.firebaseio.com/v0/';

    /** @var Client $client */
    private $client;

    /**
     * HackerNews constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl
        ]);
    }

    /**
     * @param $name
     * @param $arguments
     * @return array
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        $requestClass = 'SkyChin\\HackerNews\\Request\\' . ucfirst($name);

        if (class_exists($requestClass)) {

            /** @var Request $request */
            $request = new $requestClass(...$arguments);

            try {
                $response = $this->client->send($request);

                return json_decode($response->getBody()->getContents(), true);
            } catch (GuzzleException $e) {
                throw new \Exception('Request ' . $name . ' failed because ' . $e->getMessage());
            }
        }

        throw new \Exception('Request ' . $name . ' does not defined.');
    }
}