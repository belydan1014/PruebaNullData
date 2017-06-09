<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('address_employees', function (Blueprint $table) {
            $table->string('calle');
            $table->string('colonia');
            $table->string('localidad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('pais');
            $table->integer('codigo_postal');
            $table->string('no_exterior');
            $table->string('no_interior');
            $table->string('telefono',10);
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->softDeletes();
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
        //
        Schema::drop('address_employees');
    }
}
