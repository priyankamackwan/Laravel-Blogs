<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
        $this->call(ContentCategoriesTableSeeder::class);
        $this->call(ContentTagsTableSeeder::class);
        $this->call(ContentPagesTableSeeder::class);
        $this->call(ContentCategoryContentPageTableSeeder::class);
        $this->call(ContentPageContentTagTableSeeder::class);
        $this->call(MediaTableSeeder::class);
    }
}
