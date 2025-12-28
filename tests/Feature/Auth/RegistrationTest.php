<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    public function test_register_page_can_be_randered()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200)
            ->assertSeeText('Halaman Register');
    }

    public function test_register_new_user_success()
    {
        $data = [
            'name' => 'user test',
            'email' => 'user@test.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ];

        $response = $this->post(route('register', $data));

        $response->assertStatus(302)
            ->assertRedirect('/');
    }

    public function test_register_new_user_failed_empty_data()
    {
        $response = $this->post(route('register'));

        $response->assertSessionHasErrors([
            'name' => 'The name field is required.',
            'email' => 'The email field is required.',
            'password' => 'The password field is required.'
        ]);
    }

    public function test_register_new_user_failed_password_confirmation_not_match()
    {
        $data = [
            'name' => 'user test',
            'email' => 'user@test.com',
            'password' => 'password',
            'password_confirmation' => 'wrong password'
        ];

        $response = $this->post(route('register', $data));

        $response->assertSessionHasErrors([
            'password' => 'The password field confirmation does not match.'
        ]);
    }
}
