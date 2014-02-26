<?php

class AddressTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 DB::statement('delete from addresses');
 DB::statement('ALTER TABLE addresses AUTO_INCREMENT = 1');
 
for ($i = 1; $i < 10001; $i++)
{
  DB::table('addresses')->insert(array(
    'address_1' => $faker->buildingNumber." ".$faker->streetName,
    'address_3' => $faker->lastName." ".$faker->citySuffix,
      'county'=> $faker->city,
      'country' => "United Kingdom",
      'postcode' => "(select postcode from rdm_postcodes where id=$i)",
      'created_at' => date('Y-m-d H:i:s'),
      'company_id' => $i
  ));
}

  }
}
?>
