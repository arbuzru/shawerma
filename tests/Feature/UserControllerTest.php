<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function test_user_can_be_created()
    {
        $response = $this->post('/users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/users');
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }
}
