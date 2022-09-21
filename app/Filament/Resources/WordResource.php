<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WordResource\Pages;
use App\Filament\Resources\WordResource\RelationManagers;
use App\Models\Word;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class WordResource extends Resource
{
    protected static ?string $model = Word::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static ?string $recordTitleAttribute= 'wordTitle';

    protected static ?string $navigationGroup = 'About website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Heading')
                    ->tabs([
                        Tabs\Tab::make('Default(French)')
                            ->schema([
                                Forms\Components\TextInput::make('wordTitle')
                                    ->maxLength(255),
                                Forms\Components\MarkdownEditor::make('wordDescription'),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('wordTitle_en')
                                    ->maxLength(255),
                                Forms\Components\MarkdownEditor::make('wordDescription_en'),
                            ]),
                        Tabs\Tab::make('Kinyarwanda')
                            ->schema([
                                Forms\Components\TextInput::make('wordTitle_kiny')
                                    ->maxLength(255),
                                Forms\Components\MarkdownEditor::make('wordDescription_kiny'),
                            ]),
                    ])->columnSpan(2),

                Forms\Components\Card::make([
                    Forms\Components\Hidden::make('user_id')->default(Auth::id()),

                    Forms\Components\FileUpload::make('wordImage'),

                    Forms\Components\Select::make('wordYear')
                        //display sample of years from 2010 to 2022
                        ->options([
                            '2010' => '2010',
                            '2011' => '2011',
                            '2012' => '2012',
                            '2013' => '2013',
                            '2014' => '2014',
                            '2015' => '2015',
                            '2016' => '2016',
                            '2017' => '2017',
                            '2018' => '2018',
                            '2019' => '2019',
                            '2020' => '2020',
                            '2021' => '2021',
                            '2022' => '2022',

                        ])->searchable(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('wordTitle')->label('Ubutumwa'),
                Tables\Columns\ImageColumn::make('wordImage')->rounded(),
                Tables\Columns\TextColumn::make('views'),
                Tables\Columns\TextColumn::make('wordYear')->label('Year'),

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
            'index' => Pages\ListWords::route('/'),
            'create' => Pages\CreateWord::route('/create'),
            'edit' => Pages\EditWord::route('/{record}/edit'),
        ];
    }
}
