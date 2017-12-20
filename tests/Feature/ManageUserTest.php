<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;
use App\User;
use Faker\Factory;

class ManageUserTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    /**
     * @group manage_user
     */

    public function test_user_can_visit_user_page()
    {
        $user = User::find(2);
        $this->actingAs($user)
            ->get('/manage/users')
            ->assertStatus(200);
    }

    /**
     * @group manage_user
     */

    public function test_user_can_visit_create_user_page()
    {
        $user = User::find(2);
        $this->actingAs($user)
            ->get('/manage/users/create')
            ->assertStatus(200);
    }


    private function postData()
    {
        $faker = Factory::create();
        return [
            'name' => $faker->name,
	        'email' => $faker->unique()->safeEmail,
	        'password' => bcrypt('password'),
	        'phone' => $faker->e164PhoneNumber,
	        'remember_token' => str_random(10),
	        'is_active' => 0
        ];
    }



}
