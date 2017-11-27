<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$KQhbTmucCRQf73qd0C7CtOuv8RbIuia6dlxDBCVwr8QG.dE0h7qj6', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Eg', 'email' => 'eg@mail.com', 'password' => '$2y$10$m2y45W9x4NYPqrqAYDKgaOzaWl5I5LjDX8JtPxFPDOicNUnyHrcQq', 'role_id' => 2, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
