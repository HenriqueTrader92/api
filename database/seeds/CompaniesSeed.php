<?php

use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Company::create([
            'name'      => 'Henrique',
            'email'     => 'Henrique@gmail.com',
            'website'   => 'Henrique@gmail.com',
            'logo'      => 'H',
            'password'  => bcrypt('secret'),
        ]);
    }
}
