<?php

use Illuminate\Database\Seeder;

class classesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'classId' => 'T1705M',
            'classStatus' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('classes')->insert([
            'classId' => 'T1706M',
            'classStatus' => '1',
            'created_at' => '2018/05/30',
        ]);
        DB::table('classes')->insert([
            'classId' => 'T1707M',
            'classStatus' => '1',
            'created_at' => '2018/05/30',
        ]);
    }
}
