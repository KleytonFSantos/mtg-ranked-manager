<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatchesResource\Pages;
use App\Models\Deck;
use App\Models\Matches;
use App\Models\Player;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MatchesResource extends Resource
{
    protected static ?string $model = Matches::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('deck1Id')
                    ->label('Primeiro Deck')
                    ->options(Deck::all()->pluck('name','id')),
                Forms\Components\Select::make('deck2Id')
                    ->label('Segundo Deck')
                    ->options(Deck::all()->pluck('name','id')),
                Forms\Components\Select::make('deck3Id')
                    ->label('Terceiro Deck')
                    ->options(Deck::all()->pluck('name','id')),
                Forms\Components\Select::make('deck4Id')
                    ->label('Quarto Deck')
                    ->options(Deck::all()->pluck('name','id')),
                Forms\Components\Select::make('winnerId')
                    ->label('Ganhador')
                    ->options(Player::all()->pluck('name','id')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('deck1.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deck2.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deck3.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deck4.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('winner.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatches::route('/'),
            'create' => Pages\CreateMatches::route('/create'),
            'edit' => Pages\EditMatches::route('/{record}/edit'),
        ];
    }
}
