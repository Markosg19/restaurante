<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Constants\TableConstants as TBConstants;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        if(!Schema::hasTable(TBConstants::PLATOS_TABLE_NAME)){

            Schema::create(TBConstants::PLATOS_TABLE_NAME, function (Blueprint $table){
                $table->id();
                $table->string('nombre');
                $table->decimal('precio', 8, 2);
                $table->enum('categoria', TBConstants::CATEGORIES_OF_PLATOS);
            });





            DB::table(TBConstants::PLATOS_TABLE_NAME)->insert([
                [
                    'nombre' => 'Ensalada con lechuga',
                    'precio' => 15.99,
                    'categoria' => 'vegano'
                ],

                [
                    'nombre' => 'Pan sin harina',
                    'precio' => 2.99,
                    'categoria' => 'sin_gluten'
                ],

                [
                    'nombre' => 'Yogur GRIEGO',
                    'precio' => 10.00,
                    'categoria' => 'sin_lactosa'
                ],

                [
                    'nombre' => 'Fideos con tofu y pimiento',
                    'precio' => 15.00,
                    'categoria' => 'vegano'
                ],


                [
                    'nombre' => 'Tzatziki griego',
                    'precio' => 20.75,
                    'categoria' => 'sin_gluten'
                ],

                [
                    'nombre' => 'Farinata genovesa',
                    'precio' => 18.75,
                    'categoria' => 'sin_gluten'
                ],

                [
                    'nombre' => 'Natillas sin lactosa',
                    'precio' => 12.25,
                    'categoria' => 'sin_lactosa'
                ],

                [
                    'nombre' => 'Natillas',
                    'precio' => 18.45,
                    'categoria' => 'normal'
                ],

                [
                    'nombre' => 'Espaguetis con tomate',
                    'precio' => 12.99,
                    'categoria' => 'normal'
                ],

                [
                    'nombre' => 'Ensalada César',
                    'precio' => 12.99,
                    'categoria' => 'normal'
                ],


                [
                    'nombre' => 'Sopa de marisco',
                    'precio' => 14.99,
                    'categoria' => 'normal'
                ],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(TBConstants::PLATOS_TABLE_NAME);
    }
};
