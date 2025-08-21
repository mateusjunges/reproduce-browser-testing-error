<?php

it('can send request', function (): void {
    $page = visit('/');

    $page->assertSee('You should see this text.');
});