<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImiryangoResource\Pages;
use App\Filament\Resources\ImiryangoResource\RelationManagers;
use App\Models\Centrale;
use App\Models\Imiryango;
use Filament\Forms;
use Filament\Forms\Components\MultiSelect;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImiryangoResource extends Resource
{
    protected static ?string $model = Imiryango::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MultiSelect::make('technologies')
                    ->getSearchResultsUsing(fn (string $search) => Centrale::where('centrale_name', 'like', "%{$search}%")->limit(50)->pluck('centrale_name', 'id'))
                    ->getOptionLabelsUsing(fn (array $values) => Centrale::find($values)->pluck('centrale_name'))->searchable(),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('centrale_id'),
                Tables\Columns\TextColumn::make('name'),
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
            'index' => Pages\ListImiryangos::route('/'),
            'create' => Pages\CreateImiryango::route('/create'),
            'edit' => Pages\EditImiryango::route('/{record}/edit'),
        ];
    }
}
