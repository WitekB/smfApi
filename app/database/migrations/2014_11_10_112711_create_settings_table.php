<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            if(Schema::hasTable('settings')) {
               throw new Exception('Cannot create table settings as it already exists'); 
            }
            
            Schema::create('settings', function($table) {
                $table->increments('id');
                $table->string('name', 40)->unique();
                $table->string('value');
                $table->timestamps();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
