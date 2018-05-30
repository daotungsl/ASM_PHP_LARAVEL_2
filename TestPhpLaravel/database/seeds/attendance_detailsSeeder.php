<?php

use Illuminate\Database\Seeder;

class attendance_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance_details')->insert([
            'slotId' => '1',
            'rollNumber' => 'D00001',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('attendance_details')->insert([
            'slotId' => '1',
            'rollNumber' => 'D00002',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('attendance_details')->insert([
            'slotId' => '1',
            'rollNumber' => 'D00003',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('attendance_details')->insert([
            'slotId' => '1',
            'rollNumber' => 'D00004',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('attendance_details')->insert([
            'slotId' => '1',
            'rollNumber' => 'D00005',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
    }
}
