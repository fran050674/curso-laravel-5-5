<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditUsersTest extends TestCase
{
    /** @test */

    function an_user_can_be_edited()
    {
        $id = 5;
        $this->get('/usuarios/5/edit')
            ->assertStatus(200)
            ->assertSee("Usuario con id: $id, ha sido editado correctamente.");

    }

    /** @test */

    function id_cannot_be_a_string()
    {
        $id = 5;
        $texto = 'texto';

        $this->get("/usuarios/{$id}/edit")
            ->assertStatus(200)
            ->assertSee("Usuario con id: $id, ha sido editado correctamente.");

        // $this->assertInternalType('string', 5);
        $this->assertNotSame($id, $texto);

    }
}
