<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign(['customer_id'], 'FK_Customers_TO_Orders')->references(['customer_id'])->on('customers');
            $table->foreign(['admin_id'], 'FK_Admin_TO_Orders')->references(['admin_id'])->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('FK_Customers_TO_Orders');
            $table->dropForeign('FK_Admin_TO_Orders');
        });
    }
}
