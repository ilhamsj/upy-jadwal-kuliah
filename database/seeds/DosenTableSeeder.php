<?php

use Illuminate\Database\Seeder;
use App\Dosen;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dosen::class, 5)->create();
    }
}
