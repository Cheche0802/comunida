<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role1= Role::create(['name' => 'Admin']);
       $role2= Role::create(['name' => 'Lider']);
       $role3= Role::create(['name' => 'Aspirante']);
       $role4= Role::create(['name' => 'Blogger']);

       Permission::create(['name' => 'admin.home', 'description' => 'Ver el Dashboard'])->syncRoles([$role1, $role2, $role3, $role4]);

       Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.users.create', 'description' => 'Crear usuarios'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un rol al usuario'])->syncRoles([$role1]);
       Permission::create(['name' => 'admin.users.destroy', 'description' => 'Eliminar usuarios'])->syncRoles([$role1]);

       Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de Categorias'])->syncRoles([$role1, $role2, $role3, $role4]);
       Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear Categoria'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.categories.edit', 'description' => 'Actualizar Categoria'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar Categoria'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver listado de Etiquetas'])->syncRoles([$role1, $role2, $role3, $role4]);
       Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear Etiqueta'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.tags.edit', 'description' => 'Actualizar Etiqueta'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar Etiqueta'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver listado de publicaciones'])->syncRoles([$role1, $role2, $role3, $role4]);
       Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear Publicacion'])->syncRoles([$role1, $role2, $role3, $role4]);
       Permission::create(['name' => 'admin.posts.edit', 'description' => 'Actualizar Publicacion'])->syncRoles([$role1, $role2, $role3, $role4]);
       Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Elimninar Publicacion'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'admin.preachs.index', 'description' => 'Ver listado de Predicas'])->syncRoles([$role1, $role2, $role3, $role4]);
       Permission::create(['name' => 'admin.preachs.create', 'description' => 'Crear Predica'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.preachs.edit', 'description' => 'Actualizar Predica'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.preachs.destroy', 'description' => 'Eliminar Predica'])->syncRoles([$role1, $role2]);




    }
}
