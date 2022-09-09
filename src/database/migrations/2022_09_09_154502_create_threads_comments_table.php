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
        Schema::create('threads_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('thread_id')->constrained()->onUpdate('cascade'); //外部キー制約

            $table->unsignedBigInteger('tag_id'); # 外部キー
            $table->foreign('tag_id')->references('id')->on('tag_lists');
            
            $table->string('comments',255);
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
        Schema::dropIfExists('threads_comments');
    }
};
