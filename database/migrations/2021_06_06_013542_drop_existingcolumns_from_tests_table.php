<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropExistingcolumnsFromTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
             //If the id column exists on tests table
            if (Schema::hasColumn('tests', 'id')){
               

                //drop the id column
                Schema::table('tests', function (Blueprint $table) {
    
                    $table->dropColumn('id');
    
                });
    
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            //
        });
    }
}
