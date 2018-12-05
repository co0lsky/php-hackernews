<?php


namespace SkyChin\HackerNews\Request;


use GuzzleHttp\Psr7\Request;

class TopStories extends Request
{

    /**
     * TopStories constructor.
     */
    public function __construct()
    {
        parent::__construct('GET', 'topstories.json');
    }
}