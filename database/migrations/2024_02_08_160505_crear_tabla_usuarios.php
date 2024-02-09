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
        if (!Schema::hasTable(TBConstants::USER_TABLE_NAME)) {

            Schema::create(TBConstants::USER_TABLE_NAME, function (Blueprint $table){
                $table->id();
                $table->string('nombre');
                $table->string('email')->unique();
                $table->timestamps();
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
        Schema::dropIfExists(TBConstants::USER_TABLE_NAME);
    }
};
