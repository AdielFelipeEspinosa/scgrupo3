<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'carritos';

    /**
     * Run the migrations.
     * @table carritos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_usuario_carrito')->unsigned();
            $table->integer('id_producto_carrito')-> unsigned();
            $table->integer('cantidadproducto_carrito');
            $table->dateTime('registro_carrito')->default(null);

          


            $table->foreign('id_producto_carrito', 'id_producto_carrito')
                ->references('id_producto')->on('productos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario_carrito', 'id_usuario_carrito')
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
