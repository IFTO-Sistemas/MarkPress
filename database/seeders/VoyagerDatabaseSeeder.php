<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
        ]);
        DB::table('users')->insert([
            'role_id' => 1,
            'name'  => 'admin',
            'email' => 'admin@admin.com',
            'cpf'   => '000.000.000-00',
            'phone' => '(63)90000-0000',
            'password' => Hash::make('password'),
            'settings' => '{"locale":"pt_br"}'
        ]);
    }
}
