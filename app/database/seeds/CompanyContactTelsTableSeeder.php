<?php

class CompanyContactTelsTableSeeder extends Seeder {

  public function run() {
$telephone = new Faker\Generator();
$telephone->addProvider(new Faker\Provider\en_GB\PhoneNumber($telephone));
    
$faker = Faker\Factory::create();
 DB::statement('delete from company_contact_tels');
 DB::statement('ALTER TABLE company_contact_tels AUTO_INCREMENT = 1');
for ($i = 1; $i < 10001; $i++)
{
  DB::table('company_contact_tels')->insert(array(
    'tel_type_id' => 1,
    'company_contact_id' => $i,
    'ctps' => 0,
    'tel' => preg_replace('/[^\d]/i', '',$telephone->phoneNumber)
  ));
}

  }
}
?>
