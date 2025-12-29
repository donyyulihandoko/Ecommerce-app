<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    public function test_login_page_can_be_randered()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200)
            ->assertSeeText('Halaman Login');
    }

    public function test_login_user_succes()
    {
        $user = User::factory()->create();
        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertStatus(302)
            ->assertRedirect('/');
    }

    public function test_login_user_failed_empty_data()
    {
        $response = $this->post(route('login'), []);

        $response->assertSessionHasErrors([
            'email' => 'The email field is required.',
            'password' => 'The password field is required.'
        ]);
    }

    public function test_login_user_failed_wrong_password()
    {
        $user = User::factory()->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'wrong password'
        ]);

        $response->assertSessionHasErrors([
            'email' => 'These credentials do not match our records.'
        ]);
    }
}
