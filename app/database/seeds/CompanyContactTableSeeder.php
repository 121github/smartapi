<?php

class CompanyContactTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
  DB::statement('delete from company_contacts');
 DB::statement('ALTER TABLE company_contacts AUTO_INCREMENT = 1');
for ($i = 1; $i < 10001; $i++)
{
  DB::table('company_contacts')->insert(array(
    'record_id' => $i,
    'title' => $faker->prefix,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'website' => $faker->url,
    'position_id' => 1,
    'image' => $faker->imageUrl(100, 100, "people")."?".$faker->randomNumber(5),
    'created_at' => date('Y-m-d H:i:s')
  ));
}

  }
}
?>
