<?php

class ContactTelsTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 
for ($i = 1; $i < 101; $i++)
{
  DB::table('contact_tels')->insert(array(
    'tel_type_id' => 1,
    'contact_id' => $i,
    'ctps' => 1,
    'tel' => '0'.preg_replace('/[^\d]/i', '',$faker->phoneNumber),
    
  ));
}

  }
}
?>
