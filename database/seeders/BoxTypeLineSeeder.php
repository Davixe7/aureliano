<?php

namespace Database\Seeders;

use App\Models\BoxTypeLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoxTypeLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lines = [
            ['box_type_id' => 1, 'key' => 'length', 'x1' => 180, 'y1' => 76, 'x2' => 180, 'y2' => 12],
            ['box_type_id' => 1, 'key' => 'width', 'x1' => 91, 'y1' => 1, 'x2' => 167, 'y2' => 1],
            ['box_type_id' => 1, 'key' => 'height', 'x1' => 76, 'y1' => 76, 'x2' => 76, 'y2' => 12],

            ['box_type_id' => 2, 'key' => 'length', 'x1' => 117, 'y1' => 169, 'x2' => 207, 'y2' => 124],
            ['box_type_id' => 2, 'key' => 'width', 'x1' => 55, 'y1' => 145, 'x2' => 100, 'y2' => 167],
            ['box_type_id' => 2, 'key' => 'height', 'x1' => 45, 'y1' => 75, 'x2' => 45, 'y2' => 125],

            ['box_type_id' => 3, 'key' => 'length', 'x1' => 145, 'y1' => 150, 'x2' => 200, 'y2' => 125],
            ['box_type_id' => 3, 'key' => 'width', 'x1' => 77, 'y1' => 127, 'x2' => 122, 'y2' => 150],
            ['box_type_id' => 3, 'key' => 'height', 'x1' => 215, 'y1' => 75, 'x2' => 215, 'y2' => 105],

            ['box_type_id' => 4, 'key' => 'length', 'x1' => 150, 'y1' => 156, 'x2' => 213, 'y2' => 122],
            ['box_type_id' => 4, 'key' => 'width', 'x1' => 55, 'y1' => 118, 'x2' => 122, 'y2' => 151],
            ['box_type_id' => 4, 'key' => 'height', 'x1' => 215, 'y1' => 107, 'x2' => 215, 'y2' => 54],

            ['box_type_id' => 5, 'key' => 'length', 'x1' => 140, 'y1' => 163, 'x2' => 215, 'y2' => 123],
            ['box_type_id' => 5, 'key' => 'width', 'x1' => 80, 'y1' => 135, 'x2' => 115, 'y2' => 160],
            ['box_type_id' => 5, 'key' => 'height', 'x1' => 218, 'y1' => 109, 'x2' => 218, 'y2' => 77],

            ['box_type_id' => 6, 'key' => 'length', 'x1' => 140, 'y1' => 170, 'x2' => 190, 'y2' => 135],
            ['box_type_id' => 6, 'key' => 'width', 'x1' => 70, 'y1' => 129, 'x2' => 95, 'y2' => 165],
            ['box_type_id' => 6, 'key' => 'height', 'x1' => 205, 'y1' => 110, 'x2' => 204, 'y2' => 80],

            ['box_type_id' => 7, 'key' => 'length', 'x1' => 134, 'y1' => 169, 'x2' => 219, 'y2' => 117],
            ['box_type_id' => 7, 'key' => 'width', 'x1' => 68, 'y1' => 144, 'x2' => 115, 'y2' => 169],
            ['box_type_id' => 7, 'key' => 'height', 'x1' => 61, 'y1' => 131, 'x2' => 61, 'y2' => 71],

            ['box_type_id' => 8, 'key' => 'length', 'x1' => 150, 'y1' => 148, 'x2' => 200, 'y2' => 122],
            ['box_type_id' => 8, 'key' => 'width', 'x1' => 73, 'y1' => 125, 'x2' => 126, 'y2' => 150],
            ['box_type_id' => 8, 'key' => 'height', 'x1' => 69, 'y1' => 108, 'x2' => 69, 'y2' => 77],

            ['box_type_id' => 9, 'key' => 'width', 'x1' => 54, 'y1' => 96, 'x2' => 126, 'y2' => 131],
            ['box_type_id' => 9, 'key' => 'length', 'x1' => 146, 'y1' => 131, 'x2' => 223, 'y2' => 91],
        ];

        foreach($lines as $line){
            BoxTypeLine::create($line);
        }

    }
}
