<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (!Schema::hasColumn('articles', 'title')) {
                $table->string('title')->nullable();
            }
            if (!Schema::hasColumn('articles', 'address')) {
                $table->string('address')->nullable();
            }
            if (!Schema::hasColumn('articles', 'memo')) {
                $table->text('memo')->nullable();
            }
            // 既に存在しない場合にのみ softDeletes() を実行する
            if (!Schema::hasColumn('articles', 'deleted_at')) {
                $table->softDeletes();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};
