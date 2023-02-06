<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Carbon;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomepageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_Morning_Test(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->script("var mock_time = new Date('2022-03-25 10:00:00')");
            $browser->visit('/')
                    ->assertSee('早安~');
        });


    }
}
