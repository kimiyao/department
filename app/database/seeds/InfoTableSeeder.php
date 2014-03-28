 <?php 

class  InfoTableSeeder extends Seeder
 {  

 	public function  run()  
	 {
		// Uncomment the below to wipe the table clean before populating
 		// DB::table('Infoes')->truncate();   

		$Info = array (
		 	
			['id'          => 1,
			'type'		   => 1,
			'department_id'=> 24,
			'title' 	   => 'Info 1',
			'description'  => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'          => 2,
			'type'		   => 2,
			'department_id'=> 24,
			'title' 	   => 'For Prospective Students 1',
			'description'  => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'          => 3,
			'type'		   => 1,
			'department_id'=> 24,
			'title' 	   => 'Info 2',
			'description'  => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'          => 4,
			'type'		   => 3,
			'department_id'=> 24,
			'title' 	   => 'History 1',
			'description'  => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'          => 5,
			'type'		   => 1,
			'department_id'=> 24,
			'title' 	   => 'Info 3',
			'description'  => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],
			['id'          => 6,
			'type'		   => 2,
			'department_id'=> 24,
			'title' 	   => 'For Prospective Students 2',
			'description'  => 'Laravel also includes a simple way to seed your database with test data using seed classes. All seed classes are stored in app/database/seeds. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UserTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'],			 
 	
		);    

		// Un comment the below to run the seeder
		DB::table('Info')->insert($Info);
	}
}