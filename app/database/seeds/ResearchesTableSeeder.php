<?php

class ResearchesTableSeeder extends Seeder
{

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('researches')->truncate();

		$researches = array(
			
			['id'         => 1,
			'type'		  => 1,
			'department_id'=> 24,
			'title' 	  => 'Research 1',
			'description' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'         => 2,
			'type'		  => 2,
			'department_id'=> 24,
			'title' 	  => 'thesis 1',
			'description' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'         => 3,
			'type'		  => 1,
			'department_id'=> 24,
			'title' 	  => 'Research 2',
			'description' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'         => 4,
			'type'		  => 3,
			'department_id'=> 24,
			'title' 	  => 'Project 1',
			'description' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'         => 5,
			'type'		  => 1,
			'department_id'=> 24,
			'title' 	  => 'Research 3',
			'description' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'         => 6,
			'type'		  => 2,
			'department_id'=> 24,
			'title' 	  => 'thesis 2',
			'description' => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],			
	
		);

		// Uncomment the below to run the seeder
		DB::table('researches')->insert($researches);
	}
}