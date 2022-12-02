<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('customer_id', true);
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('birthdate');
            $table->string('email_address', 50);
            $table->string('address', 60);
            $table->string('password', 50);
            $table->bigInteger('mobile_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
