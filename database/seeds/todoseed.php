<?php

use Illuminate\Database\Seeder;

class todoseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\todo::class, 10)->create();
    }
}
