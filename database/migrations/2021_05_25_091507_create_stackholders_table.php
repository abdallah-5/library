<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStackholdersTable extends Migration {

	public function up()
	{
		Schema::create('stackholders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->enum('type', array('doc', 'student'));
		});
	}

	public function down()
	{
		Schema::drop('stackholders');
	}
}