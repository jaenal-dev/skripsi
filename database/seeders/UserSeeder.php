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
                'name' => 'Admin',
                'nip' => 'admin',
                'image' => null,
                'jenis_kelamin' => 'L',
            ], $default));
            $admin->assignRole($roleAdmin);

            $sekwan = User::create(array_merge([
                'name' => 'Sekertaris Dewan',
                'nip' => 'sekwan',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat Muda',
                'golongan' => 'IV/c',
                'esselon' => 'III.a',
            ], $default));
            $sekwan->assignRole($roleSekwan);

            $pegawai = User::create(array_merge([
                'name' => 'Jaenal Mustakim',
                'nip' => '1855201369',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat I',
                'golongan' => 'IV/a',
                'esselon' => 'III.a',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Andi Burhanuddin',
                'nip' => '1855201111',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'golongan' => 'IV/b',
                'esselon' => 'III.b',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Muhammad Iqbal Rashid',
                'nip' => '1855201112',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat II',
                'golongan' => 'IV/b',
                'esselon' => 'III.b',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            $pegawai = User::create(array_merge([
                'name' => 'Muhammad Wahyudin',
                'nip' => '1855201113',
                'image' => null,
                'jenis_kelamin' => 'L',
                'pangkat' => 'Pembina Tingkat I',
                'golongan' => 'IV/c',
                'esselon' => 'III.c',
            ], $default));
            $pegawai->assignRole($rolePegawai);

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
