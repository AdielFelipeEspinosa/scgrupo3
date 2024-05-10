<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'favoritos';

    /**
     * Run the migrations.
     * @table favoritos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_usuario_favorito', 12)-> unsigned();
            $table->integer('id_producto_favorito')-> unsigned();
            $table->dateTime('registro_favorito')->default(null);

           


            $table->foreign('id_producto_favorito', 'id_producto_favorito')
                ->references('id_producto')->on('productos')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_usuario_favorito', 'id_usuario_favorito')
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
