<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchResultsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearchResultsPage(){

        //type in die, don't change the rest

        $this
            ->visit('/dvds/search')
            ->type('die','title')
            ->press('submit')
            ->seePageIs('dvds/results?genre=0&rating_id=0&title=die');

    }
}
