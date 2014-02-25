<?php

class CompanyTableSeeder extends Seeder {

  public function run() {

    
$faker = Faker\Factory::create();
 
for ($i = 1; $i < 101; $i++)
{
  DB::table('companies')->insert(array(
    'record_id' => $i,
    'name' => $faker->company,
    'description' => $faker->sentence($nbWords = 6),
    'notes' => $faker->sentence($nbWords = 6),
    'logo' =>$faker->imageUrl(640, 480, "business")
  ));
}

  }
}
?>
