<?php


namespace SkyChin\HackerNews\Request;


use GuzzleHttp\Psr7\Request;

class User extends Request
{

    /**
     * NewStories constructor.
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct('GET', 'user/' . $id . '.json');
    }
}