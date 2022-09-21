<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CauseResource\Pages;
use App\Filament\Resources\CauseResource\RelationManagers;
use App\Models\Cause;
use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CauseResource extends Resource
{
    protected static ?string $model = Cause::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'About website';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Heading')
                    ->columnSpan(2)

                    ->tabs([
                        Tabs\Tab::make('Default(French)')
                            ->schema([
                                Forms\Components\TextInput::make('causeTitle')
                                    ->maxLength(255),
                                Forms\Components\MarkdownEditor::make('causeSummary'),
                                Forms\Components\RichEditor::make('causeDescription'),

                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('causeTitle_en')
                                    ->maxLength(255),
                                Forms\Components\MarkdownEditor::make('causeSummary_en'),
                                Forms\Components\RichEditor::make('causeDescription_en'),


                            ]),
                        Tabs\Tab::make('Kinyarwanda')
                            ->schema([
                                Forms\Components\TextInput::make('causeTitle_kiny')
                                    ->maxLength(255),
                                Forms\Components\MarkdownEditor::make('causeSummary_kiny'),
                                Forms\Components\RichEditor::make('causeDescription_kiny'),
                            ]),
                    ]),

                Forms\Components\Card::make([
                    Forms\Components\Select::make('department_id')
                        ->label('Choose department')
                        ->options(Department::all()->pluck('department_name', 'id'))
                        ->searchable(),



                    Forms\Components\TextInput::make('raisedAmount')->numeric(),
                    Forms\Components\TextInput::make('beneficiaries')->numeric(),

                    Forms\Components\FileUpload::make('causePhoto')
                        ->image()
                        ->required(),
                    Forms\Components\FileUpload::make('causeDocument'),
                    Forms\Components\TextInput::make('causeCategory')
                        ->maxLength(255),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('causePhoto')->rounded(),
                Tables\Columns\TextColumn::make('department.department_name')->label('Department'),
                Tables\Columns\TextColumn::make('causeTitle')->limit(40),
                Tables\Columns\TextColumn::make('raisedAmount'),
                Tables\Columns\TextColumn::make('beneficiaries'),

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
            'index' => Pages\ListCauses::route('/'),
            'create' => Pages\CreateCause::route('/create'),
            'edit' => Pages\EditCause::route('/{record}/edit'),
        ];
    }
}
