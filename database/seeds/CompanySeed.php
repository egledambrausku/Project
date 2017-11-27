<?php

use Illuminate\Database\Seeder;

class CompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'SM Gaja', 'address' => 'Baršausko g. 4', 'logo' => '/tmp/phpF4MVVq',],
            ['id' => 2, 'name' => 'OK Medeina', 'address' => 'Laisvės al. 2, Kaunas', 'logo' => '/tmp/phpk30lYb',],
            ['id' => 3, 'name' => 'OK Takas', 'address' => 'Taikos 82, Kaunas', 'logo' => '/tmp/phpPTfmHC',],
            ['id' => 4, 'name' => 'Sportuok miške', 'address' => 'Miško g. 1, miškas', 'logo' => '/tmp/phpaZ3ozT',],

        ];

        foreach ($items as $item) {
            \App\Company::create($item);
        }
    }
}
