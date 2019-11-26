<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function ($user) {
            $user->assignRole('Admin');
        });
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->assignRole('Inscrit');
        });
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->assignRole('NonInscrit');
        });
    }
}
