<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $permissions =  [
        'package.create',
        'package.update',
        'package.delete',
        'package.view',
        'package.index',
    
        'tour.create',
        'tour.update',
        'tour.delete',
        'tour.view',
        'tour.index',
    
        'hotel.create',
        'hotel.update',
        'hotel.delete',
        'hotel.view',
        'hotel.index',
    
        'transport.create',
        'transport.update',
        'transport.delete',
        'transport.view',
        'transport.index',
    
        'agent.create',
        'agent.update',
        'agent.delete',
        'agent.view',
        'agent.index'
       ];

       $admin = Role::find(2);
       $agent = Role::find(3);

        foreach($permissions as $permision){

            // Permission::create(['name' => $permision]);
            $agent->givePermissionTo([
                'transport.view',
                'tour.view',
                'package.view',
                'hotel.view',
                'transport.view',
                
            ]);
        }
      
    }
}
