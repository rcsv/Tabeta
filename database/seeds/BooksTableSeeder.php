<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('ja-JP') ;
        for ( $i=0 ; $i<2000 ; $i++ ) {
            App\Book::create([
                'item_name'     => $faker->text($maxNbChars = 100), // string
                /*
                 * item_name に unique 制約をかけているおかげで、
                 * seeder がランダムで作る文字列に重複が出てきてしまっている。
                 */
                'user_id'       => '1',
                'item_number'   => $faker->numberBetween(1,999),
                'item_amount'   => $faker->numberBetween(100,5000),
                'published'     => $faker->dateTime('now'),
                'created_at'    => $faker->dateTime('now'),
                'updated_at'    => $faker->dateTime('now'),
            ]);
        }
    }
}
