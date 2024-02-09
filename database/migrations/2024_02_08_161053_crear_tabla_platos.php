<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
