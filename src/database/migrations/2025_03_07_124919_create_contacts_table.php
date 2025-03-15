<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('category_id')->foreignId();
            $table->string('first_name');
            $table->string('last_name');
            $table->tinyInteger('gender')->default(0)->comment('0: 男性, 1: 女性, 2:その他');
            $table->string('email')->unique();
            $table->string('tell');
            $table->string('address');
            $table->string('building');
            $table->text('detail');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
