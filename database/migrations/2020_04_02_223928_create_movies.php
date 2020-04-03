<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->integer('year_released');

            $table->timestamps();
        });

        DB::table('movies')->insert(
            array(
                'title' => 'Step Brothers',
                'year_released' => 2008
            )
        );

        DB::table('movies')->insert(
            array(
                'title' => 'Black Hawk Down',
                'year_released' => 2002
            )
        );

        DB::table('movies')->insert(
            array(
                'title' => 'Dumb and Dumber',
                'year_released' => 1994
            )
        );

        DB::table('movies')->insert(
            array(
                'title' => 'Last of the Mochicans',
                'year_released' => 1992
            )
        );

        DB::table('movies')->insert(
            array(
                'title' => 'The Godfather',
                'year_released' => 1972
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
