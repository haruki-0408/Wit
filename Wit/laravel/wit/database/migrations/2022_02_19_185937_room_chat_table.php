<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoomChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_chat', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users'); //users_tableからの外部キー参照

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms'); //rooms_tableからの外部キー参照

            $table->primary("id")->incriment();
            $table->string('message'); //内容
            $table->string('postfile'); //投稿ファイルのパス
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->nullable();
            $table->softDeletes(); //論理削除のためのdeleted_at
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_chat');
    }
}
