<?php

use Illuminate\Database\Seeder;
use App\Kelas;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Kelas::class, 100)->create();
    }
}
