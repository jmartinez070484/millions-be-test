<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class RolesAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin','user'];

        foreach($roles as $role){
            if(!Role::where('slug',$role) -> first()){
                Role::create([
                    'name' => $role,
                    'slug' => Str::slug($role,'-')
                ]);
            }
        }

        $users = [
            [
                'email' => 'admin@test.com',
                'role_id' => 1,
                'first_name' => 'John',
                'last_name' => 'Doe',
                'password' => Hash::make('test2022#')
            ],
            [
                'email' => 'user@test.com',
                'role_id' => 2,
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'password' => Hash::make('test2022#')
            ]
        ];

        foreach($users as $user){
            if(!User::where('email',$user['email']) -> first()){
                $user = User::create($user);
                $token = $user -> createToken('api_token');

                $this -> command -> info('User ('.$user -> id.') created! Token: '.$token -> plainTextToken);
            }
        }
    }
}
