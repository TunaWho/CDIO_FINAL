<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $user = new \App\Models\User();
        (clone ($user)->fill([
            'name' => 'Admin',
            'role_id' => (\App\Enums\UserRole::ADMIN),
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]))->save();
        (clone ($user)->fill([
            'name' => 'Partner 1',
            'role_id' => \App\Enums\UserRole::PARTNER,
            'email' => 'partner@example.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]))->save();
        (clone ($user)->fill([
            'name' => 'customer 1',
            'role_id' => \App\Enums\UserRole::USER,
            'email' => 'customer@example.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]))->save();
    }
}
