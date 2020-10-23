<?php

namespace Tests\Feature;

use App\User;
use App\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ViewAnotherUsersTweetsTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_view_another_users_tweets()
    {

        //users
        $user = factory(User::class)->create([
            'username' => 'johndoe'
        ]);

        //tweets
        $tweet = factory(Tweet::class)->make(
            [
                'body' => 'My First Tweet'
            ]
        );
        $user->tweets()->save($tweet);
        //visit that users profile
        // $this->visit('/johndoe')
        //// see their tweets
        // ->see('My First Tweet');

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
