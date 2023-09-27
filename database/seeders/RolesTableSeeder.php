<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->truncate();

        //Create Admin Role
        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();
        //Create Editor Role
        $editor = new Role();
        $editor->name = "editor";
        $editor->display_name = "Editor";
        $editor->save();

        //Create Author Role
        $author = new Role();
        $author->name = "author";
        $author->display_name = "Author";
        $author->save();

        //Attach the Roles
        //first user as admin
        $user = User::find(1);
        $role = Role::find(2);
        $user->roles()->detach($role);

        //second user as editor
        $user2 = User::find(2);
        $user2->attachRole($editor);

        //third user as author
        $user3 = User::find(2);
        $user3->attachRole($author);
    }
}
