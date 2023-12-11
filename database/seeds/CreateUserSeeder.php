<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$user = User::create([
'name' => 'abdo',
'email' => 'admin@gm.com',
'password' => bcrypt('123456789')
]);

$role = Role::create(['name' => 'Admin']);

$permissions = Permission::pluck('id','id')->all();

$role->syncPermissions($permissions);

$user->assignRole([$role->id]);
}
}