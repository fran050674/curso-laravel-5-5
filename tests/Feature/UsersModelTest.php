<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
    function it_displays_the_users_details()
    {
        $user = factory(User::class)->create([
            'name' => 'Francisco Andrés'
        ]);

        $this->get('/usuarios/' . $user->id)
            ->assertStatus(200)
            ->assertSee('Francisco Andrés');
    }

    /** @test */
    function it_displays_a_404_error_if_the_user_is_not_found()
    {
        $this->get('/usuarios/666')
        ->assertStatus(404)
        ->assertSee('Página no encontrada');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }

    /** @test */
    function it_creates_a_new_user()
    {
        $this->withoutExceptionHandling();

        $this->post('/usuarios/', [
            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => 'laravel'
        ])->assertRedirect('usuarios');

        $this->assertCredentials([
            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => 'laravel',
        ]);
    }

    /** @test */
    function the_name_is_required()
    {
        // $this->withoutExceptionHandling();

        $this->from('usuarios/nuevo')
            ->post('/usuarios/', [
            'name' => '',
            'email' => 'fran@correo.com',
            'password' => 'laravel'
        ])->assertRedirect('usuarios/nuevo')
            ->assertSessionHasErrors(['name' => 'El campo nombre es obligatorio.']);

        $this->assertEquals(0, User::count());
        /*$this->assertDatabaseMissing('users', [
            'email' => 'fran@correo.com'
        ]);*/
    }
}
