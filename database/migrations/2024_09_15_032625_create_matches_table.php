<?php

use App\Models\Deck;
use App\Models\Player;
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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Deck::class, 'deck1Id')->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Deck::class, 'deck2Id')->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Deck::class, 'deck3Id')->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Deck::class, 'deck4Id')->constrained('decks')->cascadeOnDelete();
            $table->foreignIdFor(Player::class, 'winnerId')->nullable()->constrained('players')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
