<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //setiap di jalankan akan menambahkan 50 data
        factory(App\Models\User::class, 50)->create();
    }
}
