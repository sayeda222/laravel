<?php
# test/Browser/BetaTest.php

. . .

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/beta')
                    ->assertSee('Beta')
                    ->clickLink('Previous')
                    ->assertPathIs('/alpha');
        });
    }