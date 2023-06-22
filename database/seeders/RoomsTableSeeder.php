<?php

namespace Database\Seeders;

class RoomsTableSeeder extends \Illuminate\Database\Seeder
{
    public function run() : void {
        $this->command->comment('Nastavuji DB místností');

//        \App\Models\Room::create([
//            'no' => '13',
//            'name' => 'šatna',
//            'phone' => null
//        ]);
//
//        \App\Models\Room::create([
//            'no' => '21',
//            'name' => 'ředitelna',
//            'phone' => '112'
//        ]);

        \App\Models\Room::factory(20)->create();
    }
}
