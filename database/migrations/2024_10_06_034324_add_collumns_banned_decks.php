<?php

use App\Models\Deck;
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
        Schema::table('matches', function (Blueprint $table) {
            $table->foreignIdFor(Deck::class, 'banned_deck1Id')->nullable()->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Deck::class, 'banned_deck2Id')->nullable()->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Deck::class, 'banned_deck3Id')->nullable()->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Deck::class, 'banned_deck4Id')->nullable()->constrained('decks')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropForeign(['banned_deck1Id', 'banned_deck2Id', 'banned_deck3Id', 'banned_deck4Id']);
            $table->dropColumn(['banned_deck1Id', 'banned_deck2Id', 'banned_deck3Id', 'banned_deck4Id']);
        });
    }
};
