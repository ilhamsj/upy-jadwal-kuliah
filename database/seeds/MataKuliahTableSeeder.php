<?php

use Illuminate\Database\Seeder;
use App\MataKuliah;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MataKuliah::class, 10)->create();   
    }
}
