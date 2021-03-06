<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        //$this->call(UsersTableSeeder::class);
        $this->call('UsersTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PainsTableSeeder');
        $this->call('SellingPointsTableSeeder');
        Model::reguard();
    }
}
