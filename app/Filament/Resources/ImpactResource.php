<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImpactResource\Pages;
use App\Filament\Resources\ImpactResource\RelationManagers;
use App\Models\Impact;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImpactResource extends Resource
{
    protected static ?string $model = Impact::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('department_id')
                    ->required(),
                Forms\Components\TextInput::make('impact_name')
                    ->maxLength(255),
                Forms\Components\Textarea::make('impact_description')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('baseline')
                    ->maxLength(255),
                Forms\Components\TextInput::make('men'),
                Forms\Components\TextInput::make('women'),
                Forms\Components\TextInput::make('youth'),
                Forms\Components\TextInput::make('disabilities'),
                Forms\Components\TextInput::make('total_budget'),
                Forms\Components\DateTimePicker::make('deadline'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('department_id'),
                Tables\Columns\TextColumn::make('impact_name'),
                Tables\Columns\TextColumn::make('impact_description'),
                Tables\Columns\TextColumn::make('baseline'),
                Tables\Columns\TextColumn::make('men'),
                Tables\Columns\TextColumn::make('women'),
                Tables\Columns\TextColumn::make('youth'),
                Tables\Columns\TextColumn::make('disabilities'),
                Tables\Columns\TextColumn::make('total_budget'),
                Tables\Columns\TextColumn::make('deadline')
                    ->dateTime(),
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
            'index' => Pages\ListImpacts::route('/'),
            'create' => Pages\CreateImpact::route('/create'),
            'edit' => Pages\EditImpact::route('/{record}/edit'),
        ];
    }    
}
