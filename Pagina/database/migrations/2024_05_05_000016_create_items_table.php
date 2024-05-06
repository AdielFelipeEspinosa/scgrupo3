<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'items';

    /**
     * Run the migrations.
     * @table items
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_compra_item')->unsigned();
            $table->integer('id_producto_item')->unsigned();
            $table->integer('cantidad_item');
            $table->integer('costo_item');

            $table->foreign('id_compra_item', 'id_compra_item')
                ->references('id_compra')->on('compras')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_producto_item', 'id_producto_item')
                ->references('id_producto')->on('productos')
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
