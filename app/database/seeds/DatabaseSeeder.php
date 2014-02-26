<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
    $this->call('RecordTableSeeder');
    $this->command->info('Record table seeded!');
    $this->call('PostcodeTableSeeder');
    $this->command->info('Postcodes generated!');
    $this->call('CompanyTableSeeder');
    $this->command->info('Company table seeded!');
    $this->call('ContactTableSeeder');
    $this->command->info('Contact table seeded!');
    $this->call('ContactTelsTableSeeder');
    $this->command->info('Contact Tels table seeded!');
		$this->call('AddressTableSeeder');
    $this->command->info('Addresses table seeded!');
	}
  

}

