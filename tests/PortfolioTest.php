<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Main;

class BookTest extends TestCase
{

    public function testHomePageLoads(){
   $this->call('GET', '/home');



    }
    public function testHomeHasWords(){
        $this->visit('/home')
            ->see(' Search')
            ->type('technology', 'title')
            ->press('search')
            ->seePageIs('/results?title=technology');

//            ->dontSee('Administrator');
    }

    public function testAPI(){
        $this->visit('/home')
            ->click('music')
            ->seePageIs('/music')
            ->click('first')
            ->seePageIs('/spotify/13Wrdjrb8wrDh1EKKqc4Y6');
    }

    public function testButton()
    {
        $this->visit('/home')
            ->click('music')
            ->seePageIs('/music');
    }
    //test user authentication


    public function testUserLogin(){
        $this->visit('/admin')
            ->type('admin', 'username')
            ->type('laravel', 'password')
            ->press('Login')
            ->seePageIs('/profile')
            ->see('Welcome');
    }



}