<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'observaciones';

    /**
     * Run the migrations.
     * @table observaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_observacion')-> primary();
            $table->integer('id_usuario_observacion')-> unsigned();
            $table->Integer('id_estado_observacion')-> unsigned();
            $table->Integer('id_asunto_observacion')-> unsigned();
            $table->string('mensaje_observacion', 250);
            $table->dateTime('registro_observacion')->default(null);

        


            $table->foreign('id_asunto_observacion', 'id_asunto_observacion')
                ->references('id_asunto')->on('asuntos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_estado_observacion', 'id_estado_observacion')
                ->references('id_estado')->on('estados')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario_observacion', 'id_usuario_observacion')
                ->references('id_usuario')->on('users')
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
