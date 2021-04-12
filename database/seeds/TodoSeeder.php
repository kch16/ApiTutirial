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
        // 할일 30개 만들기
        factory(\App\Todo::class, 30)->create();
    }
}
