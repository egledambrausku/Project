<?php

use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Mama', 'email' => 'maildog@mail.com', 'company_id' => 3,],
            ['id' => 2, 'name' => 'Eglė aš', 'email' => 'eg@mail.com', 'company_id' => 2,],
            ['id' => 3, 'name' => 'tėtis', 'email' => 'tomas@talandis.lt', 'company_id' => 3,],
            ['id' => 4, 'name' => 'Gedukas', 'email' => 'gugle@gmail.com', 'company_id' => 4,],
            ['id' => 5, 'name' => 'Rūta Navickaitė', 'email' => 'rimkeviciusjonas@gmail.com', 'company_id' => 2,],
            ['id' => 6, 'name' => 'Jolanta Saul', 'email' => 'julita@gmail.com', 'company_id' => 1,],
            ['id' => 7, 'name' => 'aušra bartk', 'email' => 'asdads@sdsd.lt', 'company_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Employee::create($item);
        }
    }
}
