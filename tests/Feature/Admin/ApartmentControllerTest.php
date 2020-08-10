<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApartmentControllerTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldErrorWhenUserTryAccessNotLogged()
    {
        $response = $this->getJson('/api/admin/apartments');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function itShouldToListAllApartments()
    {
        $admin = factory(Admin::class)->create(['password' => bcrypt('123123')]);

        $token = auth('admin')->attempt([
            'email' => $admin->email,
            'password' => '123123',
        ]);

        $response = $this->getJson('/api/admin/apartments', [
            'Authorization' => "Bearer {$token}"
        ]);

        $response->assertStatus(200)->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'blap', 'condition', 'created_at', 'updated_at'
                ]
            ],
            'links', 'meta'
        ]);
    }
}
