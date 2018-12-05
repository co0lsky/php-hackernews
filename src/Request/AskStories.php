<?php


namespace SkyChin\HackerNews\Request;


use GuzzleHttp\Psr7\Request;

class AskStories extends Request
{

    /**
     * NewStories constructor.
     */
    public function __construct()
    {
        parent::__construct('GET', 'askstories.json');
    }
}