<?php

class ContactTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
  DB::statement('delete from contacts');
 DB::statement('ALTER TABLE contacts AUTO_INCREMENT = 1');
for ($i = 1; $i < 10001; $i++)
{
  DB::table('contacts')->insert(array(
    'record_id' => $i,
    'title' => $faker->firstName,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'website' => $faker->url,
    'position_id' => 1,
    'image' => $faker->imageUrl(640, 480, "people"),
    'created_at' => date('Y-m-d H:i:s')
  ));
}

  }
}
?>
