<?php


namespace SkyChin\HackerNews\Request;


use GuzzleHttp\Psr7\Request;

class JobStories extends Request
{

    /**
     * NewStories constructor.
     */
    public function __construct()
    {
        parent::__construct('GET', 'jobstories.json');
    }
}