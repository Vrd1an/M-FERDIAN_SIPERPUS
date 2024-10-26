<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bookshelves')->insert([
            [
                'code'=>'RAK01',
                'name'=> 'Annumaki',
            ],
            [
                'code'=> 'RAK02',
                'name'=> 'Informatika',
            ],
            [
                'code'=> 'RAK03',
                'name'=> 'Budi and Friend',
            ],
        ]);

        Bookshelf::create([
            'code'=> 'RAK03',
            'name'=> 'Industri',
        ]);
    }
}
