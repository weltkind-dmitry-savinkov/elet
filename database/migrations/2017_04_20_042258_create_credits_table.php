<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('lang', ['ru', 'en', 'ky']);
            $table->string('title', 400);
            $table->string('icon', 400);
            $table->text('description');
            $table->decimal('interest_rate');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->tinyint('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('credits');
    }
}
