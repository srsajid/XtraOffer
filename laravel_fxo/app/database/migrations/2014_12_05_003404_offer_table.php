<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OfferTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
	    Schema::create("offers", function(Blueprint $table) {
            $table->increments("id");
            $table->string("title");
            $table->text("description");
            $table->string("image_ref");
            $table->string("company_name");
            $table->string("contact_address", 300);
            $table->string("contact_number", 20);
            $table->string("contact_email", 50);
            $table->boolean("is_approved")->default(false);
            $table->date("last_date");
            $table->integer("category_id")->unsigned();
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}

}
