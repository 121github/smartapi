<?php

class CompanyTableSeeder extends Seeder {

  public function run() {


    $faker = Faker\Factory::create();
    DB::statement('delete from companies');
    DB::statement('ALTER TABLE companies AUTO_INCREMENT = 1');
    for ($i = 1; $i < 10001; $i++) {
      if ($faker->boolean(50)) {
        $employees = $faker->randomNumber(3);
      } else {
        $employees = $faker->randomNumber(2);
      }
      DB::table('companies')->insert(array(
          'record_id' => $i,
          'name' => $faker->company,
          'description' => $faker->sentence($nbWords = 6),
          'notes' => $faker->sentence($nbWords = 6),
          'employees' => $employees,
          'turnover' => $faker->randomNumber(5),
          'logo' => $faker->imageUrl(100, 100, "business") . "/?" . $faker->randomNumber(5)
      ));
    }
  }

}

?>
