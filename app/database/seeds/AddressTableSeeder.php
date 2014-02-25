<?php

class AddressTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 
for ($i = 1; $i < 101; $i++)
{
  DB::table('addresses')->insert(array(
    'address_1' => $faker->buildingNumber." ".$faker->streetName,
    'address_3' => $faker->lastName." ".$faker->citySuffix,
      'county'=> $faker->city,
      'country' => "United Kingdom",
      'postcode' => $faker->postcode,
      'created_at' => date('Y-m-d H:i:s'),
      'company_id' => $i
  ));
}

  }
}
?>
