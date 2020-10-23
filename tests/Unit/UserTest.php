<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_find_users_by_their_username()
    {
        $createdUser = factory(User::class)->create([
            'username'=>'janedoe'
        ]);
        $foundUser = User::findByUsername('janedoe');
        $this->assertEquals($createdUser->id,$foundUser->id);
        $this->assertEquals('janedoe',$foundUser->username);

    }
}
