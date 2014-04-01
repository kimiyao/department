<?php

class NewsTableSeeder extends Seeder
{

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('news')->truncate();

		$news = array(
			
			['id'            => 1,
			'title' 	     => 'News number 1',
			'en'		     => 'News number 1',
			'kg'		     => 'News number 1',
			'tr'		     => 'News number 1',
			'ru'		     => 'News number 1',
			'description_en' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
			'description_kg' => 'In Kyrgyz',
			'description_tr' => 'In Turkish',
			'description_ru' => 'In Russian',
			'type'		     => 1,	
			'created_at'     => date('Y-m-d H:i:s'),
			'updated_at'     => date('Y-m-d H:i:s')],
			['id'         => 2,
			'title' 	  => 'News number 2',
			'en'		     => 'News number 2',
			'kg'		     => 'News number 2',
			'tr'		     => 'News number 2',
			'ru'		     => 'News number 2',
			'description_en' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
			'description_kg' => 'In Kyrgyz',
			'description_tr' => 'In Turkish',
			'description_ru' => 'In Russian',
			'type'		  => 1,	
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')],
			['id'         => 3,
			'title' 	  => 'Announcement number 1',
			'en'		     => 'News number 1',
			'kg'		     => 'News number 1',
			'tr'		     => 'News number 1',
			'ru'		     => 'News number 1',
			'description_en' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
			'description_kg' => 'In Kyrgyz',
			'description_tr' => 'In Turkish',
			'description_ru' => 'In Russian',
			'type'		  => 2,	
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')],
			['id'         => 4,
			'title' 	  => 'Announcement number 2',
			'en'		     => 'News number 2',
			'kg'		     => 'News number 2',
			'tr'		     => 'News number 2',
			'ru'		     => 'News number 2',
			'description_en' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
			'description_kg' => 'In Kyrgyz',
			'description_tr' => 'In Turkish',
			'description_ru' => 'In Russian',
			'type'		  => 2,	
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')],
			['id'         => 5,
			'title' 	  => 'News number 3',
			'en'		     => 'News number 3',
			'kg'		     => 'News number 3',
			'tr'		     => 'News number 3',
			'ru'		     => 'News number 3',
			'description_en' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
			'description_kg' => 'In Kyrgyz',
			'description_tr' => 'In Turkish',
			'description_ru' => 'In Russian',
			'type'		  => 1,	
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')],
			['id'         => 6,
			'title' 	  => 'News number 4',
			'en'		     => 'News number 4',
			'kg'		     => 'News number 4',
			'tr'		     => 'News number 4',
			'ru'		     => 'News number 4',
			'description_en' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.',
			'description_kg' => 'In Kyrgyz',
			'description_tr' => 'In Turkish',
			'description_ru' => 'In Russian',
			'type'		  => 1,	
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')]
	
		);

		// Uncomment the below to run the seeder
		DB::table('news')->insert($news);
	}
}