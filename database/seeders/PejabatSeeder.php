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
            'nip' => '91204912',
            'pangkat' => 'Pembina Utama Muda (IV/c)',
            'jabatan' => 'Sekretaris DPRD',
        ]);
    }
}
