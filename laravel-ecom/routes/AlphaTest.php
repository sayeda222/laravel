<?php
# test/Browser/AlphaTest.php

. . .

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/alpha')
                    ->assertSee('Alpha')
                    ->clickLink('Next')
                    ->assertPathIs('/beta');
        });
    }

. . .