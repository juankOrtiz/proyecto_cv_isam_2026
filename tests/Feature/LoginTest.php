<?php

it('comprobar ruta login', function () {
    $response = $this->get('/login');

    $response->assertOk();
});
