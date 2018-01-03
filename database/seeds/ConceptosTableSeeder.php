<?php

use Illuminate\Database\Seeder;

class ConceptosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Concepto::class, 9)->create();
    }
}
