<?php

use App\Enums\TaskPriorities;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('任務標題');
            $table->text('description')->nullable()->comment('任務描述');
            $table->string('status')->default('pending')->comment('任務狀態');
            $table->integer('priority')->default(TaskPriorities::Medium)->comment('任務優先度');
            $table->dateTime('due_date')->nullable()->comment('任務截止日期');
            $table->json('tags')->nullable()->comment('任務標籤');
            $table->string('category')->nullable()->comment('任務分類');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
