<?php

test('the homepage renders the professional profile', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Andrew Bielecki')
        ->assertSee('Lead Software Engineer')
        ->assertSee('Hobby projects')
        ->assertSee('Start a conversation')
        ->assertDontSee('Documentation')
        ->assertDontSee('Approach');
});

test('the homepage includes accessible navigation and landmarks', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Skip to content')
        ->assertSee('aria-label="Primary navigation"', false)
        ->assertSee('id="main"', false)
        ->assertSee('alt="Portrait of Andrew Bielecki"', false);
});

test('the homepage includes lightweight social icons', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('aria-hidden="true"', false)
        ->assertSee('GitHub')
        ->assertSee('LinkedIn');
});
