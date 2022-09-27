<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StructureResource\Pages;
use App\Filament\Resources\StructureResource\RelationManagers;
use App\Models\Structure;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class StructureResource extends Resource
{
    protected static ?string $model = Structure::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    protected static ?string $navigationGroup = 'About website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([

                    Tabs::make('Heading')->columnSpan(2)
                        ->tabs([
                            Tabs\Tab::make('Default(French)')
                                ->schema([
                                    Forms\Components\TextInput::make('structureTitle')
                                        ->maxLength(255)->columnSpan(2),
                                    TinyEditor::make('structureDescription')
                                        ->columnSpan(2)
                                ]),
                            Tabs\Tab::make('English')
                                ->schema([
                                    Forms\Components\TextInput::make('structureTitle_en')
                                        ->maxLength(255),
                                    TinyEditor::make('structureDescription_en')
                                ]),
                            Tabs\Tab::make('Kinyarwanda')
                                ->schema([
                                    Forms\Components\TextInput::make('structureTitle_kiny')
                                        ->maxLength(255),
                                    TinyEditor::make('structureDescription_kiny')
                                ]),
                        ]),



                    Forms\Components\FileUpload::make('structureImage'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('structureTitle'),
                Tables\Columns\TextColumn::make('structureDescription'),
                Tables\Columns\ImageColumn::make('structureImage')->rounded(),

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
            'index' => Pages\ListStructures::route('/'),
            'create' => Pages\CreateStructure::route('/create'),
            'edit' => Pages\EditStructure::route('/{record}/edit'),
        ];
    }
}
