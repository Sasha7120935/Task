<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusColumnToIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ingredients')) {
            Schema::table('ingredients', function (Blueprint $table) {
                if (!Schema::hasColumn('ingredients','status_id')){
                    $table->unsignedBigInteger('status_id')->after('id');

                    $table->foreign('status_id')
                        ->references('id')
                        ->on('ingredient_Statuses');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredients', function (Blueprint $table) {
            //
        });
    }
}
