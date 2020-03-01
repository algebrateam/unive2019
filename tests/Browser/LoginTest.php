<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });       
    }
    public function testAdmnLTE()
    {
        $this->browse(function (Browser $browser) {
  $browser->visit('/')
                ->assertSee('LOGIN')
                ->clickLink('Login')
                ->assertPathIs('/login')
                ->assertSee('Sign in to start your session')
                ->type('email', 'pmrvic@123.com')
                ->type('password', '123456')
                ->screenshot('login-podaci')
                //->press('submit_btn')
                ->press('Sign In');
            $browser->pause(1500)
                ->screenshot('login-screenshot');
        });       
    }    
}
