<?php

it('has cansendrequest page', function () {
    $response = $this->get('/cansendrequest');

    $response->assertStatus(200);
});
