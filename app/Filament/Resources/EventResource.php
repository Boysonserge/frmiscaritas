<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'About website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Heading')
                    ->tabs([
                        Tabs\Tab::make('Default(French)')
                            ->schema([
                                Forms\Components\TextInput::make('eventTitle')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('eventSlug')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('eventDescription')
                                    ->maxLength(255),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('eventTitle_en')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('eventSlug_en')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('eventDescription_en')
                                    ->maxLength(255),
                            ]),
                        Tabs\Tab::make('Kinyarwanda')
                            ->schema([
                                Forms\Components\TextInput::make('eventTitle_kiny')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('eventSlug_kiny')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('eventDescription_kiny')
                                    ->maxLength(255),
                            ]),
                    ])->columnSpan(2),

                Forms\Components\Card::make([
                    Forms\Components\TextInput::make('eventLocation')
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('startDate'),
                    Forms\Components\DatePicker::make('endDate'),
                    Forms\Components\FileUpload::make('eventImage')->columnSpan(2),
                    Forms\Components\FileUpload::make('otherPhotos')->multiple()->columnSpan(2),

                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('eventTitle'),
                Tables\Columns\ImageColumn::make('eventImage')->rounded(),
                Tables\Columns\TextColumn::make('eventLocation'),
                Tables\Columns\TextColumn::make('startDate')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('endDate')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('eventImage'),

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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
