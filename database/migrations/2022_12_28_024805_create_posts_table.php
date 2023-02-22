<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('pemateri');
            $table->date('tanggal')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('jam')->nullable();
            $table->string('jam_selesai')->nullable();
            $table->string('poster')->nullable();
            $table->string('harga')->nullable();
            $table->string('jmlh_peserta')->nullable();
            $table->string('berbayar_tidak')->nullable();
            $table->string('online_offline')->nullable();
            $table->string('terbatas_tidak')->nullable();
            $table->string('terbuka_tidak')->nullable();
            $table->string('sertifikat')->nullable();
            // $table->date('tanggal')->nullable();
            $table->text('body');
            $table->string('status')->nullable();
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
