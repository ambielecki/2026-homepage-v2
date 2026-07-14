<?php

test('the homepage renders the professional profile', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Andrew Bielecki')
        ->assertSee('Lead Software Engineer')
        ->assertSee('Selected work')
        ->assertSee('Start a conversation')
        ->assertDontSee('Documentation');
});

test('the homepage includes accessible navigation and landmarks', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Skip to content')
        ->assertSee('aria-label="Primary navigation"', false)
        ->assertSee('id="main"', false)
        ->assertSee('alt="Portrait of Andrew Bielecki"', false);
});
