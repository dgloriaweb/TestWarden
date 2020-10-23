<?php

namespace Tests\Feature;

use App\Customer;
use App\Order;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewCustomerOrdersTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * show the orders of the selected customer
     *
     * @return void
     */
    public function test_view_customer_orders()
    {
        //users
        $user = factory(User::class)->create([
            'username' => 'don'
        ]);
        //customers
        $customer = factory(Customer::class)->create([
            'name' => 'bringpots'
        ]);

        $order = factory(Order::class)->make([
            'job_no' => '01743',

        ]);
        $customer->orders()->save($order);

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
