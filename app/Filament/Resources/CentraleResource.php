<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CentraleResource\Pages;
use App\Filament\Resources\CentraleResource\RelationManagers;
use App\Models\Centrale;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CentraleResource extends Resource
{
    protected static ?string $model = Centrale::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('parish_id')
                    ->required(),
                Forms\Components\TextInput::make('centrale_name')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('parish_id'),
                Tables\Columns\TextColumn::make('centrale_name'),
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
            'index' => Pages\ListCentrales::route('/'),
            'create' => Pages\CreateCentrale::route('/create'),
            'edit' => Pages\EditCentrale::route('/{record}/edit'),
        ];
    }    
}
