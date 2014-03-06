<?php

class CompanyAddressTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 DB::statement('delete from company_addresses');
 DB::statement('ALTER TABLE company_addresses AUTO_INCREMENT = 1');
 
for ($i = 1; $i < 10001; $i++)
{
  DB::table('company_addresses')->insert(array(
    'address_1' => $faker->buildingNumber." ".$faker->streetName,
    'address_3' => $faker->lastName." ".$faker->citySuffix,
      'county'=> $faker->city,
      'country' => "United Kingdom",
      'created_at' => date('Y-m-d H:i:s'),
      'company_id' => $i
  ));
}

  }
}
?>
