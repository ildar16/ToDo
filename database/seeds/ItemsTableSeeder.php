<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'user_id' => '1',
                'name' => 'Задача №1',
                'done' => false,
            ],
            [
                'user_id' => '2',
                'name' => 'Задача №2',
                'done' => false,
            ],
        ];

        DB::table('items')->insert($items);
    }
}
