<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Duration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Application\Duration::insert([
            [
                'applicable_entry' => 'Spring 2023',
                'start_date' => 'January 2023',
                'end_date' => 'June, 2023',
                'deadline' => 'June 03, 2022',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'applicable_entry' => 'Fall 2023',
                'start_date' => 'August 2023',
                'end_date' => 'April, 2023',
                'deadline' => 'April 30, 2023',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'applicable_entry' => 'Summer 2023',
                'start_date' => 'May 2023',
                'end_date' => 'February, 2023',
                'deadline' => 'February 01, 2023',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'applicable_entry' => 'Winter 2024',
                'start_date' => 'January 2024',
                'end_date' => 'September, 2023',
                'deadline' => 'September 30, 2023',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}