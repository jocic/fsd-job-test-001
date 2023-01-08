<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table)
        {
            $table->id();
            $table->string('title', 150);
            $table->string('img_cover', 500)->default('');
            $table->string('slug', 300)->index()->unique();
            $table->string('tagline', 2000)->default('');
            
            $table->enum('status', [
                'ACTIVE', 'INACTIVE'
            ])->default('ACTIVE');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
