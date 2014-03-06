<?php

class ContactAddressTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 DB::statement('delete from contact_addresses');
 DB::statement('ALTER TABLE contact_addresses AUTO_INCREMENT = 1');
 
for ($i = 1; $i < 10001; $i++)
{
  DB::table('contact_addresses')->insert(array(
    'address_1' => $faker->buildingNumber." ".$faker->streetName,
    'address_3' => $faker->lastName." ".$faker->citySuffix,
      'county'=> $faker->city,
      'country' => "United Kingdom",
      'created_at' => date('Y-m-d H:i:s'),
      'contact_id' => $i
  ));
}

  }
}
?>
