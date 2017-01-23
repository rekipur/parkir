<?php

use Illuminate\Database\Seeder;
use App\Jenis_kendaraan as JK;

class JkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jk1 = JK::create([
        		'nama'=>'Roda Dua'
        	]);
        $jk2 = JK::create([
        		'nama'=>'Roda Empat'
        	]);
    }
}
