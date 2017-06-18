<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMezunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mezuns', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kullanici_adi');
            $table->text('sifre');
            $table->text('ad');
            $table->text('soyad');
            $table->text('email');
            $table->bigInteger('telefon');
            $table->bigInteger('mezun_yili');
            $table->text('hash');
            $table->text('bolum');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mezuns');
    }
}
