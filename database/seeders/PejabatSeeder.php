<?php

namespace Database\Seeders;

use App\Models\Pejabat;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PejabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pejabat::create([
            'name' => 'H. Ridwan SH, MBA, MM',
            'nip' => '19661289478128',
            'pangkat' => 'Pembina Utama Muda',
            'jabatan' => 'Sekretaris DPRD',
            'golongan' => 'IV/c',
        ]);
    }
}
