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
        Schema::create('table_libros_revistas', function (Blueprint $table) {
            $table->id();
            $table->string('libro');
            $table->string('revista');
            $table->string('categoria');
            $table->string('autor');
            $table->integer('cantidad');

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
        Schema::dropIfExists('table_libros_revistas');
    }
};
