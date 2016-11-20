<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToUsers1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //slug field create
        //unique used to create a unique
        //place the slug field after body field
        Schema::table('posts', function ($table) {
            $table->string('slug')->unique()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop ony the slug field
        Schema::table('posts', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
