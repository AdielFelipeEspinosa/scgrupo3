<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'compras';

    /**
     * Run the migrations.
     * @table compras
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_compra')-> primary();
            $table->integer('id_usuario_compra')-> unsigned();
            $table->integer('total_compra');
            $table->dateTime('registro_compra')->default(null);

            


            $table->foreign('id_usuario_compra', 'id_usuario_compra')
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
