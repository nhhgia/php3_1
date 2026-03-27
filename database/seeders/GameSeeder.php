<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game')->insert([
            [
                'name' => 'Azur Lane',
                'slug' => Str::slug('Azur Lane'),
                'img' => 'azurlane.jpg',
                'mascos_left' => 'mascot_azurlane_left.jpg',
                'mascos_right' => 'mascot_azurlane_right.png',
                'banner1' => 'azurlane_banner1.jpg',
                'banner2' => 'azurlane_banner2.jpg',
                  'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Zenless Zone Zero',
                'slug' => Str::slug('Zenless Zone Zero'),
                'img' => 'zzz.jpg',
                'mascos_left' => 'mascot_zzz_left.png',
                'mascos_right' => 'mascot_zzz_right.png',
                'banner1' => 'zzz_banner1.jpg',
                'banner2' => 'zzz_banner2.jpg',
                  'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Honkai Star Rail',
                'slug' => Str::slug('Honkai Star Rail'),
                'img' => 'hsr.jpg',
                'mascos_left' => 'mascot_hsr_left.png',
                'mascos_right' => 'mascot_hsr_right.png',
                'banner1' => 'hsr_banner1.jpg',
                'banner2' => 'hsr_banner2.jpg',
                  'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Honkai Impact 3rd',
                'slug' => Str::slug('Honkai Impact 3rd'),
                'img' => 'hi3.jpg',
                'mascos_left' => 'mascot_hi3_left.png',
                'mascos_right' => 'mascot_hi3_right.png',
                'banner1' => 'hi3_banner1.jpg',
                'banner2' => 'hi3_banner2.jpg',
                  'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Arknights',
                'slug' => Str::slug('Arknights'),
                'img' => 'arknights.jpg',
                'mascos_left' => 'mascot_arknights_left.png',
                'mascos_right' => 'mascot_arknights_right.png',
                'banner1' => 'arknights_banner1.jpg',
                'banner2' => 'arknights_banner2.jpg',
                  'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Arknights: Endfield',
                'slug' => Str::slug('Arknights Endfield'),
                'img' => 'arknights_endfield.jpg',
                'mascos_left' => 'mascot_endfield_left.png',
                'mascos_right' => 'mascot_endfield_right.png',
                'banner1' => 'endfield_banner1.jpg',
                'banner2' => 'endfield_banner2.jpg',
                  'created_at' => now(),
                'updated_at' => now(),

            ]
        ]);
    }
}
