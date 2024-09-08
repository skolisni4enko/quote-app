<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('phrases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->text('text');
            $table->timestamps();
        });

        // Добавление предустановленных фраз
        DB::table('phrases')->insert([
            ['user_id' => null, 'text' => 'Stay positive, work hard, make it happen.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => null, 'text' => 'Your limitation—it’s only your imagination.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => null, 'text' => 'Push yourself, because no one else is going to do it for you.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => null, 'text' => 'Great things never come from comfort zones.', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => null, 'text' => 'Success doesn’t just find you. You have to go out and get it.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('phrases');
    }
};
