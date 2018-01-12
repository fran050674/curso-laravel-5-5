<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->withoutExceptionHandling();

        $this->get('/saludo/francisco/franandgo')
        ->assertStatus(200)
        ->assertSee('Bienvenido Francisco, tu apodo es franandgo');
    }

    /** @test */
    /*function it_welcomes_users_without_nickname()
    {
        $this->withoutExceptionHandling();

        $this->get('/saludo/francisco')
        ->assertStatus(200)
        ->assertSee('Bienvenido Francisco');
    }*/
}
