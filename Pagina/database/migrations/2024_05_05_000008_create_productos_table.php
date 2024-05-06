<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'productos';

    /**
     * Run the migrations.
     * @table productos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_producto');
            $table->string('nombre_producto', 50);
            $table->integer('costo_producto');
            $table->string('descripcion_producto', 250);
            $table->integer('cantidad_producto');
            $table->integer('id_marca_producto')->unsigned();
            $table->integer('id_talla_producto')->unsigned();
            $table->integer('id_color_producto')->unsigned();
            $table->integer('id_categoria_producto')->unsigned();

            $table->foreign('id_categoria_producto', 'id_categoria_producto')
                ->references('id_categoria')->on('categorias')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_color_producto', 'id_color_producto')
                ->references('id_color')->on('colores')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_marca_producto', 'id_marca_producto')
                ->references('id_marca')->on('marcas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_talla_producto', 'id_talla_producto')
                ->references('id_talla')->on('tallas')
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
