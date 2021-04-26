<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        $role = new \App\Models\Role();

        (clone ($role)->fill([
            'role_name' => 'ADMIN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]))->save();
        (clone ($role)->fill([
            'role_name' => 'PARTNER',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]))->save();
        (clone ($role)->fill([
            'role_name' => 'USER',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]))->save();
    }
}
