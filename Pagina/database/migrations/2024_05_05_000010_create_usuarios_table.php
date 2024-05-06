<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_usuario', 12)->primary();
            $table->string('login_usuario', 30);
            $table->string('nombre_usuario', 50);
            $table->string('email_usuario', 80);
            $table->string('celular_usuario', 16)->nullable()->default(null);
            $table->string('direccion_usuario', 80);
            $table->string('password_usuario', 100);
            $table->dateTime('registro_usuario')->default(null);
            $table->string('foto_usuario', 80);
            $table->integer('id_municipio_usuario')->unsigned();
            $table->integer('id_perfil_usuario')->unsigned();



            $table->foreign('id_municipio_usuario', 'id_municipio_usuario')
                ->references('id_municipio')->on('municipios')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_perfil_usuario', 'id_perfil_usuario')
                ->references('id_perfil')->on('perfiles')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
