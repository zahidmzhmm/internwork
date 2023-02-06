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
                'start_date' => Carbon::parse('January 2023'),
                'deadline' => Carbon::parse('June 03, 2022'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'applicable_entry' => 'Fall 2023',
                'start_date' => Carbon::parse('August 2023'),
                'deadline' => Carbon::parse('April 30, 2023'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'applicable_entry' => 'Summer 2023',
                'start_date' => Carbon::parse('May 2023'),
                'deadline' => Carbon::parse('February 01, 2023'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'applicable_entry' => 'Winter 2024',
                'start_date' => Carbon::parse('January 2024'),
                'deadline' => Carbon::parse('September 30, 2023'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
