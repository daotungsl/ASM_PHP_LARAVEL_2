<?php

use Illuminate\Database\Seeder;

class student_classesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00001',
            'classId' => 'T1705M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00002',
            'classId' => 'T1705M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00004',
            'classId' => 'T1705M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00003',
            'classId' => 'T1706M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00005',
            'classId' => 'T1706M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00001',
            'classId' => 'T1706M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00002',
            'classId' => 'T1707M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00004',
            'classId' => 'T1707M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('student_classes')->insert([
            'rollNumber' => 'D00001',
            'classId' => 'T1707M',
            'status' => '1',
            'created_at' => '2018/05/30',
        ]);
    }
}
