<?php

use App\Models\Globals;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use L37sg0\Rockstar\Models\Attribute;
use L37sg0\Rockstar\Models\Block;
use L37sg0\Rockstar\Models\Pivots\BlockAttribute as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->foreignId(Model::FIELD_BLOCK_ID)
                ->constrained(Block::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);
            $table->foreignId(Model::FIELD_ATTRIBUTE_ID)
                ->constrained(Attribute::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
