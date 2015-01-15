<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            $this->seedTable('SettingsTableSeeder', 'Settings');
	}
        
        private function seedTable($seederName, $tableName) {
            $this->call($seederName);
            $this->command->info($tableName.' table seeded!');
        }

}
