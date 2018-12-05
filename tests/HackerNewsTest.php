<?php

namespace SkyChin\HackerNews;


use PHPUnit\Framework\TestCase;

class HackerNewsTest extends Testcase
{

    public function testTopStories()
    {
        $hn = new HackerNews();

        $stories = $hn->topStories();

        $this->assertTrue(is_array($stories));
    }

    public function testNewStories()
    {
        $hn = new HackerNews();

        $stories = $hn->newStories();

        $this->assertTrue(is_array($stories));
    }

    public function testException()
    {
        $hn = new HackerNews();

        $this->expectException('Exception');

        $hn->anotherStories();
    }

    public function testItem()
    {
        $id = 8863;

        $hn = new HackerNews();

        $item = $hn->item($id);

        $this->assertEquals($id, $item['id']);
    }

    public function testUser()
    {
        $id = 'dhouston';

        $hn = new HackerNews();

        $user = $hn->user($id);

        $this->assertEquals($id, $user['id']);
    }

    public function testAskStories()
    {
        $hn = new HackerNews();

        $stories = $hn->askStories();

        $this->assertTrue(is_array($stories));
    }

    public function testShowStories()
    {
        $hn = new HackerNews();

        $stories = $hn->showStories();

        $this->assertTrue(is_array($stories));
    }

    public function testJobStories()
    {
        $hn = new HackerNews();

        $stories = $hn->jobStories();

        $this->assertTrue(is_array($stories));
    }

    public function testMaxItem()
    {
        $hn = new HackerNews();

        $number = $hn->maxItem();

        $this->assertTrue(is_int($number));
    }
}
