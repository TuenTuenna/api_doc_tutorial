<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 할 일 10개 만들기
        factory(\App\Model\Todo::class, 30)->create();
    }
}
