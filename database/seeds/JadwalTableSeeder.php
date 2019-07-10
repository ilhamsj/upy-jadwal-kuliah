<?php

use Illuminate\Database\Seeder;
use App\JadwalKuliah;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(JadwalKuliah::class, 105)->create();
    }
}
