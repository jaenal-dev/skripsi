<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = [
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            app()[PermissionRegistrar::class]->forgetCachedPermissions();
            Permission::create(['name' => 'read role']);
            Permission::create(['name' => 'create role']);
            Permission::create(['name' => 'update role']);
            Permission::create(['name' => 'delete role']);
            Permission::create(['name' => 'read sppd']);
            Permission::create(['name' => 'create sppd']);
            Permission::create(['name' => 'update sppd']);
            Permission::create(['name' => 'delete sppd']);
            Permission::create(['name' => 'read report']);
            Permission::create(['name' => 'create report']);
            Permission::create(['name' => 'update report']);
            Permission::create(['name' => 'delete report']);

            $roleAdmin = Role::create(['name' => 'admin']);

            $roleSekwan = Role::create(['name' => 'sekwan']);
            $roleSekwan->givePermissionTo('read sppd', 'create sppd', 'update sppd', 'delete sppd');

            $rolePegawai = Role::create(['name' => 'pegawai']);
            $rolePegawai->givePermissionTo('read sppd', 'read report', 'create report', 'update report', 'delete report');

            $admin = User::create(array_merge([
                'name' => 'Fitriana Pramitasari',
                'nip' => '196689127489232532',
                'image' => null,
                'jenis_kelamin' => 'P',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'TU & Kepegawaian',
                'golongan' => 'IV/b',
            ], $default));
            $admin->assignRole($roleAdmin);

            $admin = User::create(array_merge([
                'name' => 'Hj. Risma Sugianto',
                'nip' => '196689127',
                'image' => null,
                'jenis_kelamin' => 'P',
                'pangkat' => 'Pembina Tingkat I',
                'jabatan' => 'TU & Kepegawaian',
                'golongan' => 'IV/a',
            ], $default));
            $admin->assignRole($roleAdmin);

            $sekwan = User::create(array_merge([
                'name' => 'H. Ridwan SH, MBA, MM',
                'nip' => '19661289478128',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat Muda',
                'jabatan' => 'Sekretaris DPRD',
                'golongan' => 'IV/c',
            ], $default));
            $sekwan->assignRole($roleSekwan);

            $pegawai = User::create(array_merge([
                'name' => 'Drs. Dodi Mulyanto',
                'nip' => '19667812471281',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat I',
                'jabatan' => 'Kabag Penganggaran & Pengawasan',
                'golongan' => 'IV/b',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Drs. Sugeng Dalu',
                'nip' => '1966127318931',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'Kabag Umum',
                'golongan' => 'IV/b',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Maman Abdurrahman',
                'nip' => '1966891273120',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'Kabag Persidangan & Per-UU',
                'golongan' => 'IV/b',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Bambang Pamungkas',
                'nip' => '1966192847919',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'Kasubag AKD',
                'golongan' => 'III/d',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Lili Pali',
                'nip' => '1966012983932',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'Kasubag RT & Perlengkapan',
                'golongan' => 'IV/c',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Jajang Mulyana',
                'nip' => '1966012910537',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'Kasubag Akutansi & Pelaporan',
                'golongan' => 'IV/c',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Rohit Hidayat',
                'nip' => '19661516274992',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'jabatan' => 'Pelaksana',
                'golongan' => 'IV/c',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
