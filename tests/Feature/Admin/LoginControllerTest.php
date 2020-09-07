<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_return_error_when_not_sending_credentials()
    {
        $response = $this->postJson('api/admin/login');

        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function it_should_return_error_when_send_wrong_credentials()
    {
        $response = $this->postJson('api/admin/login', [
            'email' => 'email@email.com',
            'password' => '12345678'
        ]);

        $response->assertStatus(401)->assertExactJson([
            'error' => 'Unauthorized'
        ]);
    }

    /**
     * @test
     */
    public function it_should_to_create_a_session()
    {
        $admin = factory(Admin::class)->create(['password' => bcrypt('123123')]);

        $response = $this->postJson('api/admin/login', [
            'email' => $admin->email,
            'password' => '123123'
        ]);

        $response->assertSuccessful()->assertJsonStructure([
            'access_token',
            'token_type',
            'expires_in'
        ]);
    }
}
