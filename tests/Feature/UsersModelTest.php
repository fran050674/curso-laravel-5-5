<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class UsersModelTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    function it_shows_the_users_list()
    {
        factory(User::class)->create([
            'name' => 'Jose'
        ]);

        factory(User::class)->create([
            'name' => 'Maria'
        ]);

        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios.')
        ->assertSee('Jose')
        ->assertSee('Maria');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        // DB::table('users')->truncate();

        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados.');
    }

    /** @test */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->withoutExceptionHandling();

        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Creando nuevo usuario');
    }
}
