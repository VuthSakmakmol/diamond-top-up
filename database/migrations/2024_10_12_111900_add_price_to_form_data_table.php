<?php
// 2024_10_12_111900_add_price_to_form_data_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceToFormDataTable extends Migration
{
    public function up()
    {
        Schema::table('form_data', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->after('field_two');  // Add a price column
        });
    }

    public function down()
    {
        Schema::table('form_data', function (Blueprint $table) {
            $table->dropColumn('price');  // Drop the price column in case of rollback
        });
    }
}
