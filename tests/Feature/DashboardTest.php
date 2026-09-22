<?php

use App\Models\User;

it('si no tengo usuario, el dashboard me redirige al login', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect(route('login'));
});

it('si visito el dashboard con un usuario, veo su contenido', function () {
    // AAA (Arrange-Act-Assert)
    // Arrange: crear un usuario
    $usuario = User::factory()->create();

    // Act: visitar el dashboard con ese usuario
    $response = $this->actingAs($usuario)
        ->get('/dashboard');

    // Assert: comprobar que puedo ver el dashboard
    $response->assertOk();
});
