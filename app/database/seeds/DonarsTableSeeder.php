<?php

class DonarsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('donors')->truncate();
		 $faker = Faker\Factory::create();

		 foreach(range(1,200) as $index){
		 	
		$bg = ['a+ve','a-ve','a+ve','a-ve','a+ve','a-ve','ab+ve'];
		$bgg = $bg[rand(0,6)];
		Donor::create([
				'name' =>$faker->name,
				'description'=>$faker->sentence(10),
				'city'=>$faker->city,
				'phoneNo'=>$faker->phoneNumber,
				'bgroup'=>$bgg,
				'image'=>$faker->imageUrl(100,100),
				'email'=>$faker->email,
				'password'=>Hash::make('1234')

		]);
}

		// Uncomment the below to run the seeder
		// DB::table('members')->insert($members);
	}

}
