<?php

class FacultiesTableSeeder extends Seeder
{

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('courses')->truncate();

		$faculties = array(
			['id'   	      => 1,
			'name'        	  => 'Letters',
			'en'        	  => 'Letters',
			'kg'        	  => 'Гуманитардык',
			'ru'        	  => 'Гуманитарный',
			'tr'        	  => 'Edebiyat',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 2,
			'name'        	  => 'Fine Arts',
			'en'        	  => 'Fine Arts',
			'kg'        	  => 'Көркөм өнөр',
			'ru'        	  => 'Искусств',
			'tr'        	  => 'Güzel Sanatlar',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 3,
			'name'        	  => 'Science',
			'en'        	  => 'Science',
			'kg'        	  => 'Табигый Илимдер',
			'ru'        	  => 'Точных Наук',
			'tr'        	  => 'Fen',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 4,
			'name'        	  => 'Economics and Administrative Science',
			'en'        	  => 'Economics and Administrative Science',
			'kg'        	  => 'Экономика жана Башкаруу',
			'ru'        	  => 'Экономики и Управления',
			'tr'        	  => 'İktisadi ve İdari Bilimler',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 5,
			'name'        	  => 'Communication',
			'en'        	  => 'Communication',
			'kg'        	  => 'Комуникациялык',
			'ru'        	  => 'Комуникация',
			'tr'        	  => 'İletişim',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 6,
			'name'        	  => 'Engineering',
			'en'        	  => 'Engineering',
			'kg'        	  => 'Инженердик',
			'ru'        	  => 'Инженерия',
			'tr'        	  => 'Mühendislik',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 7,
			'name'        	  => 'Veterinary',
			'en'        	  => 'Veterinary',
			'kg'        	  => 'Ветеринардык',
			'ru'        	  => 'Ветеринария',
			'tr'        	  => 'Veteriner',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 8,
			'name'        	  => 'Agriculture',
			'en'        	  => 'Agriculture',
			'kg'        	  => 'Айыл Чарба',
			'ru'        	  => 'Сельскохозяйственный',
			'tr'        	  => 'Ziraat',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 9,
			'name'        	  => 'Theology',
			'en'        	  => 'Theology',
			'kg'        	  => 'Теология',
			'ru'        	  => 'Теология',
			'tr'        	  => 'İlahiyat',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 10,
			'name'        	  => 'High School of Foreign Languages',
			'en'        	  => 'High School of Foreign Languages',
			'kg'        	  => 'Чет тилдер жогорку мектеби',
			'ru'        	  => 'Высшая Школа Иностранных Языков',
			'tr'        	  => 'Yabancı Diller Yüksek Okulu',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
			['id'   	      => 11,
			'name'        	  => 'Foreign Languages',
			'en'        	  => 'Foreign Languages',
			'kg'        	  => 'Чет тилдер',
			'ru'        	  => 'Иностранных Языков',
			'tr'        	  => 'Yabancı Diller',
			'created_at'  	  => date('Y-m-d H:i:s'),
			'updated_at'  	  => date('Y-m-d H:i:s')],
		);

		// Uncomment the below to run the seeder
		DB::table('faculties')->insert($faculties);
	}

}