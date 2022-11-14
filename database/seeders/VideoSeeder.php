<?php

namespace Database\Seeders;

use App\Models\VideosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'link' => "https://www.youtube.com/embed/dQw4w9WgXcQ",
            'name' => 'Top Tier Music',
            'desc' => 'One of the best songs ever produced.'
        ]);
        DB::table('videos')->insert([
            'link' => 'http://www.youtube.com/embed/GozQCpgJYMg',
            'name' => 'Arcane is Incredible. No, Really.',
            'desc' => "Who knew I'd wake up in a world where League of Legends was my Anime of the year."
        ]);
        DB::table('videos')->insert([
            'link' => 'https://www.youtube.com/embed/xylh_sJAYdc',
            'name' => 'One Piece | The Man Who Will be King of The Pirates「ASMV」',
            'desc' => "Anime - One Piece"
        ]);
        DB::table('videos')->insert([
            'link' => 'http://www.youtube.com/embed/c4NrMq2OSLk',
            'name' => "Vagabond Is “Boring”",
            'desc' => "Vagabond is one of the best illustrated manga of all time, but it is still more than just pretty art. Let's talk about it."
        ]);
        DB::table('videos')->insert([
            'link' => 'http://www.youtube.com/embed/vHDNQe8qrss',
            'name' => 'Ronnie Coleman screaming for 4 hours',
            'desc' => 'LIGHT WEIGHT!!!'
        ]);
    }
}
