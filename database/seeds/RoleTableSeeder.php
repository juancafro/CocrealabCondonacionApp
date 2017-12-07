<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_member = new Role();
        $role_member->name ='miembro';
        $role_member->description='beneficiario de cocrealab';
        $role_member->save();

        $role_cocrealab_manager = new Role();
        $role_cocrealab_manager->name ='adminCC';
        $role_cocrealab_manager->description='administrador de cocrealab';
        $role_cocrealab_manager->save();

        $role_mintic_manager = new Role();
        $role_mintic_manager->name ='adminMT';
        $role_mintic_manager->description= 'funcionario de MinTic';
        $role_mintic_manager->save();
    }
}
