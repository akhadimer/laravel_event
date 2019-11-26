<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Inscrit']);
        Role::create(['name' => 'NonInscrit']);
        Permission::create(['name' => 'modifications sur évènement']);
        Permission::create(['name' => 'rejoindre évènement']);
        Permission::create(['name' => 'supprimer compte']);
        Permission::create(['name' => 'acceptation à rjd evenement']);
    }
}
