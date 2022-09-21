<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChildrenResource\Pages;
use App\Filament\Resources\ChildrenResource\RelationManagers;
use App\Models\Children;
use App\Models\District;
use App\Models\Parish;
use App\Models\Sector;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Ysfkaya\FilamentPhoneInput\PhoneInput;

class ChildrenResource extends Resource
{
    protected static ?string $model = Children::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'About FRMIS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Section::make('Aho aherereye')
                        ->schema([
                            Forms\Components\Select::make('district_id')
                                ->label('Akarere')
                                ->options(District::all()->pluck('district_name', 'id')->toArray())
                                ->reactive()
                                ->searchable()
                                ->afterStateUpdated(fn(callable $set) => $set('sector_id', null))
                                ->required(),

                            Forms\Components\Select::make('sector_id')
                                ->label('Umurenge')
                                ->searchable()
                                ->reactive()
                                ->afterStateUpdated(fn(callable $set) => $set('cell_id', null))
                                ->options(function (callable $get) {
                                    $district = District::find($get('district_id'));
                                    if (!$district) {
                                        return [];
                                    }
                                    return $district->sector->pluck('sector_name', 'id');
                                })->required(),

                            Forms\Components\Select::make('cell_id')
                                ->label('Akagari')
                                ->searchable()
                                ->reactive()
                                ->options(function (callable $get) {
                                    $sector = Sector::find($get('sector_id'));
                                    if (!$sector) {
                                        return [];
                                    }
                                    return $sector->cell()->pluck('cell_name', 'id');
                                })->required(),

                            Forms\Components\Select::make('parish_id')
                                ->label('Paruwase')
                                ->searchable()
                                ->reactive()
                                ->options(function (callable $get) {
                                    $district = District::find($get('district_id'));
                                    if (!$district) {
                                        return [];
                                    }
                                    return $district->parish()->pluck('parish_name', 'id');
                                })->required(),
                            Forms\Components\TextInput::make('village')
                                ->maxLength(255),

                            Forms\Components\Select::make('centrale_id')
                                ->label('Santarali')
                                ->searchable()
                                ->reactive()
                                ->options(function (callable $get) {
                                    $parish = Parish::find($get('parish_id'));
                                    if (!$parish) {
                                        return [];
                                    }
                                    return $parish->centrales()->pluck('centrale_name', 'id');
                                })->required(),
                        ])
                        ->collapsible(),


                    Section::make('Amakuru yerekeye umwana')
                        ->schema([
                            Forms\Components\TextInput::make('childNames')
                                ->maxLength(255),

                            PhoneInput::make('childPhone')
                                ->required(),


                            Forms\Components\Select::make('disabilityType')
                                ->label('Ubwoko bwubumuga')
                                ->options([
                                    'Amputation' => 'Amputation',
                                    'Albinisme' => 'Albinisme',
                                    'Toubles du spectre autistique' => 'Toubles du spectre autistique',
                                    'Brûlures' => 'Brûlures',
                                    'Paralysie cérébrale' => 'Paralysie cérébrale',
                                    'Pied bot' => 'Pied bot',
                                    'Démence' => 'Démence',
                                    'Syndrome de Down' => 'Syndrome de Down',
                                    'Epilepsie' => 'Epilepsie',
                                    'Déficience intellectuelle' => 'Déficience intellectuelle',
                                    'Lépre' => 'Lépre',
                                    'Basse Vision et Aveugle' => 'Basse Vision et Aveugle',
                                    'Spina bifida' => 'Spina bifida',
                                    'Accident vasculaire Cérébral' => 'Accident vasculaire Cérébral',
                                    'Lésion de la moelle épiniére' => 'Lésion de la moelle épiniére',
                                    'Infirmite motrice celebrale' => 'Infirmite motrice celebrale',
                                    'Autre' => 'Autre'
                                ])->searchable(),

                            Forms\Components\Select::make('disabilitySource')
                                ->label("Imvano y'ubumuga")
                                ->options([
                                        'Yarabuvukanye' => 'Yarabuvukanye',
                                        'Impanuka' => 'Impanuka',
                                        'Uburwayi' => 'Uburwayi',
                                        'Byarizanye' => 'Byarizanye',
                                        'Ntizwi' => 'Ntizwi']
                                )
                                ->searchable(),

                            Forms\Components\DatePicker::make('dob')
                                ->required(),

                            Forms\Components\TextInput::make('fatherNames')
                                ->maxLength(255),

                            Forms\Components\TextInput::make('motherNames')
                                ->maxLength(255),


                            Forms\Components\Select::make('livingWith')
                                ->label("Abana nande: ")
                                ->options([
                                        'Umurera' => 'Umurera',
                                        'Ababyeyi be' => 'Ababyeyi be',
                                        'Umunyamuryango' => 'Umunyamuryango',
                                        'Undi' => 'Undi']
                                )
                                ->searchable(),

                            Forms\Components\FileUpload::make('childPhoto')
                                ->avatar()
                        ])->collapsible()
                ])->columns(3)


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('childPhoto')->rounded(),
                Tables\Columns\TextColumn::make('childNames')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListChildrens::route('/'),
            'create' => Pages\CreateChildren::route('/create'),
            'view' => Pages\ViewChildren::route('/{record}'),
            'edit' => Pages\EditChildren::route('/{record}/edit'),
        ];
    }
}
