<?php

class ContactTelsTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 DB::statement('delete from contact_tels');
 DB::statement('ALTER TABLE contact_tels AUTO_INCREMENT = 1');
for ($i = 1; $i < 10001; $i++)
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
