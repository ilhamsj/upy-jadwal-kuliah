<?php

use Illuminate\Database\Seeder;
use App\Ruangan;

class RuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ruangan::class, 100)->create();
    }
}
