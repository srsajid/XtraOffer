<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
	    Schema::create("categories", function(Blueprint $table) {
            $table->increments("id");
            $table->string("name")->unique();
            $table->integer("category_id")->unsigned()->nullable();
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
        Schema::drop("categories");
	}

}
