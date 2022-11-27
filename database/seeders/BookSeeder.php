<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['publisher_id'=> 1,
            'title'=>'A Game of Thrones',
            'author'=>'George R. R. Martin',
            'year'=>'1996',
            'synopsis'=>'The first book in the A Song of Ice and Fire Series',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 2,
            'title'=>'A Clash of Kings',
            'author'=>'George R. R. Martin',
            'year'=>'1998',
            'synopsis'=>'The second book in the A Song of Ice and Fire Series',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 3,
            'title'=>'A Storm of Swords',
            'author'=>'George R. R. Martin',
            'year'=>'2000',
            'synopsis'=>'The third book in the A Song of Ice and Fire Series',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 4,
            'title'=>'The Shining',
            'author'=>'Stephen King',
            'year'=>'1977',
            'synopsis'=>'The Shining centers on the life of Jack Torrance, a struggling writer and recovering alcoholic who accepts a position as the off-season caretaker of the historic Overlook Hotel in the Colorado Rockies',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 1,
            'title'=>'IT',
            'author'=>'Stephen King',
            'year'=>'1986',
            'synopsis'=>'The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears of its victims to disguise itself while hunting its prey',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 2,
            'title'=>'The Exorcist',
            'author'=>'William Peter Blatty',
            'year'=>'1971',
            'synopsis'=>'The book details the demonic possession of eleven-year-old Regan MacNeil, the daughter of a famous actress, and the two priests who attempt to exorcise the demon',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 3,
            'title'=>'The Fault in Our Stars',
            'author'=>'John Green',
            'year'=>'2012',
            'synopsis'=>'The story is narrated by Hazel Grace Lancaster, a 16-year-old girl with thyroid cancer. Hazel attends a support group where she falls in love with 17-year-old Augustus Waters',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 4,
            'title'=>'It Ends With Us',
            'author'=>'Colleen Hoover',
            'year'=>'2016',
            'synopsis'=>'Sometimes it is the one who loves you who hurts you the most',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 1,
            'title'=>'The Hating Game',
            'author'=>'Sally Thorne',
            'year'=>'2016',
            'synopsis'=>'Lucy Hutton and Joshua Templeman hate each other. Not dislike. Not begrudgingly tolerate. Hate. And they have no problem displaying their feelings through a series of ritualistic passive aggressive maneuvers',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 2,
            'title'=>'The Inner Game of Tennis',
            'author'=>'Timothy Gallwey',
            'year'=>'1997',
            'synopsis'=>'An accessible, invaluable guide to mastering your “inner game” to ensure success on and off the court—part of the bestselling Inner Game series, with more than one million copies sold',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 3,
            'title'=>'The Subtle Art of Not Giving A F*ck',
            'author'=>'Mark Manson',
            'year'=>'2016',
            'synopsis'=>'In this generation-defining self-help guide, a superstar blogger cuts through the crap to show us how to stop trying to be "positive" all the time so that we can truly become better, happier people',
            'image'=>'https://picsum.photos/200'],

            ['publisher_id'=> 4,
            'title'=>'The 7 Habits of Highly Effective People',
            'author'=>'Stephen R. Covey',
            'year'=>'2004',
            'synopsis'=>'In The 7 Habits of Highly Effective People, author Stephen R. Covey presents a holistic, integrated, principle-centered approach for solving personal and professional problems',
            'image'=>'https://picsum.photos/200']

        ]);
    }
}
