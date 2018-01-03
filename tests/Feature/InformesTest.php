<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InformesTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

		$user = factory(User::class)->create();
		
		$response = $this
			->actingAs($user)
			->get('/descargar-informespdf?id=a');

		$response->assertJson(["success"=>false]);
		
		$response = $this
			->actingAs($user)
			->get('/descargar-informespdf');

		$this->assertTrue($response->headers->get('content-type') == 'application/pdf');
		
    }
}
