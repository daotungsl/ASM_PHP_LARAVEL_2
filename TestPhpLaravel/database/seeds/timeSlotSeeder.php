<?php

use Illuminate\Database\Seeder;

class timeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeslots')->insert([
            'slotId' => '1',
            'timeSlot' => '8h-12h',
        ]);
        DB::table('timeslots')->insert([
            'slotId' => '2',
            'timeSlot' => '13h30-17h30',
        ]);
        DB::table('timeslots')->insert([
            'slotId' => '3',
            'timeSlot' => '18h30-21h30',
        ]);
    }
}
