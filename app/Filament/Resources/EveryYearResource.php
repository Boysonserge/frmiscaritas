<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EveryYearResource\Pages;
use App\Filament\Resources\EveryYearResource\RelationManagers;
use App\Models\EveryYear;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EveryYearResource extends Resource
{
    protected static ?string $model = EveryYear::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('children_id')
                    ->required(),
                Forms\Components\TextInput::make('serviceOffered')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('decision')
                    ->maxLength(255),
                Forms\Components\TextInput::make('year'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('children_id'),
                Tables\Columns\TextColumn::make('serviceOffered'),
                Tables\Columns\TextColumn::make('decision'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEveryYears::route('/'),
            'create' => Pages\CreateEveryYear::route('/create'),
            'edit' => Pages\EditEveryYear::route('/{record}/edit'),
        ];
    }    
}
