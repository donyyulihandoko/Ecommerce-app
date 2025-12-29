<?php

namespace Tests\Feature\Auth;

use Illuminate\Auth\Notifications\ResetPassword;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;
    public function test_forgot_password_page_can_be_randered()
    {
        $response = $this->get(route('password.request'));
        $response->assertStatus(200)
            ->assertSeeText('Forgot Password Page');
    }

    public function test_reset_password_link_can_requested()
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post(route('password.email'), ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class);
    }


    public function test_reset_password_link_failed_empty_email()
    {
        $response = $this->post(route('password.email'), []);
        $response->assertSessionHasErrors([
            'email' => 'The email field is required.'
        ]);
    }

    public function test_reset_password_link_failed_invalid_email()
    {
        $response = $this->post(route('password.email'), ['email' => 'user@invalid@com']);
        $response->assertSessionHasErrors([
            'email' => 'The email field must be a valid email address.'
        ]);
    }

    public function test_reset_password_page_can_randered()
    {
        Notification::fake();

        $user = User::factory()->create();

        $this->post(route('password.email'), ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) {
            $response = $this->get('/reset-password/' . $notification->token);

            $response->assertStatus(200)
                ->assertSeeText('Reset Password Page');

            return true;
        });
    }

    public function test_password_reset_success_with_valid_token()
    {
        Notification::fake();
        $user = User::factory()->create();

        $this->post(route('password.email'), ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $response = $this->post(route('password.update'), [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'newPassword',
                'password_confirmation' => 'newPassword'
            ]);

            $response->assertStatus(302)
                ->assertSessionHasNoErrors()
                ->assertRedirectToRoute('login');

            return true;
        });
    }

    public function test_password_reset_failed_password_not_match()
    {
        Notification::fake();
        $user = User::factory()->create();

        $this->post(route('password.email'), ['email' => $user->email]);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
            $response = $this->post(route('password.update'), [
                'token' => $notification->token,
                'email' => $user->email,
                'password' => 'newPassword',
                'password_confirmation' => 'wrongPassword'
            ]);

            $response->assertSessionHasErrors([
                'password' =>  'The password field confirmation does not match.'
            ]);

            return true;
        });
    }
}
