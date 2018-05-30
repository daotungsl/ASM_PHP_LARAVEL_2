<?php

use Illuminate\Database\Seeder;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'rollNumber' => 'D00001',
            'fullName' => 'Nguyễn Tiến Bắc',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00002',
            'fullName' => 'Nguyễn Tiến Nam',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00003',
            'fullName' => 'Nguyễn Tiến Sơn',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00004',
            'fullName' => 'Nguyễn Tiến Hoàng',
        ]);
        DB::table('students')->insert([
            'rollNumber' => 'D00005',
            'fullName' => 'Nguyễn Tiến Hùng',
        ]);
    }
}
