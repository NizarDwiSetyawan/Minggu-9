<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Bima',
            'nomor_tlp' => '082248645XXX',
            'ttl' => '2002-05-06',
            'foto' => 'picture.png',
        ]);
    }
}
