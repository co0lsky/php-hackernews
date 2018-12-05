<?php


namespace SkyChin\HackerNews\Request;


use GuzzleHttp\Psr7\Request;

class MaxItem extends Request
{

    /**
     * NewStories constructor.
     */
    public function __construct()
    {
        parent::__construct('GET', 'maxitem.json');
    }
}