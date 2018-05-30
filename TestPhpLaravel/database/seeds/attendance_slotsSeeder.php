<?php

use Illuminate\Database\Seeder;

class attendance_slotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('attendance_slots')->insert([
            'classId' => 'T1705M',
            'slotId' => '1',
            'subjectId' => 'PHP',
            'created_at' => '2018/05/30',
        ]);
        DB::table('attendance_slots')->insert([
            'classId' => 'T1706M',
            'slotId' => '2',
            'subjectId' => 'EJB',
            'created_at' => '2018/05/30',
        ]);
        DB::table('attendance_slots')->insert([
            'classId' => 'T1707M',
            'slotId' => '3',
            'subjectId' => 'ASF2',
            'created_at' => '2018/05/30',
        ]);
    }
}
