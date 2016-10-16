<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

// Creado con php artisan make:test RequisitosTest
class RequisitosTest extends TestCase
{

	// HAving
	//Note::create(['' => '']);


	//when
    public function test_home()
    {
    	//then
    	/*$this->visit('/')
    		->see('Software Boulevard')
    		->see('Login');
    	*/
        $this->assertTrue(true);
    }
}
