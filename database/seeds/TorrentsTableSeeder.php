<?php

use Illuminate\Database\Seeder;

class TorrentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('torrents')->insert([
            'movie_id' => "1",
            'torrent_id' => "6BC76006C9552D9875926A4AAAD5670CD09129E5",
            'torrent_file_name' => "Tomb.Raider.2018.1080p.WEBRip.x264-[YTS.AM].mp4",
        ]);
    }
}