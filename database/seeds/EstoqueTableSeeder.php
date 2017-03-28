<?php

use Illuminate\Database\Seeder;

class EstoqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::truncate();
        factory(\App\Models\Product::class, 10)->create();
    }
}
