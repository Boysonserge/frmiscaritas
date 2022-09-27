<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResponsibilityResource\Pages;
use App\Filament\Resources\ResponsibilityResource\RelationManagers;
use App\Models\Children;
use App\Models\Responsibility;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResponsibilityResource extends Resource
{
    protected static ?string $model = Responsibility::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'CBR Program';

    protected static ?string $navigationLabel = 'Abagize uruhare muri service';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Select::make('children_id')
                        ->options(Children::all()->pluck('childNames', 'id'))
                        ->label("Izina ry'umwana")
                        ->searchable()
                        ->required(),

                    TextInput::make('provider')
                        ->label('Izina ry\'abagize uruhare muri service')
                        ->datalist([
                            'Ababyeyi',
                            "Itsinda ry'ababyeyi",
                            'Programu-CBR',
                            'Inzego za leta',
                        ]),

                    Forms\Components\Select::make('year')
                        ->searchable()
                        ->options([
                            '2018'=>'2018',
                            '2019'=>'2019',
                            '2020'=>'2020',
                            '2021'=>'2021',
                            '2022'=>'2022',

                        ]),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('children.childNames')
                    ->label('Izina ry\'umwana')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provider')->label('Izina ry\'abagize uruhare muri service')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('year'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Raporo yakozwe')
                    ->date(),

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
            'index' => Pages\ListResponsibilities::route('/'),
            'create' => Pages\CreateResponsibility::route('/create'),
            'edit' => Pages\EditResponsibility::route('/{record}/edit'),
        ];
    }
}
