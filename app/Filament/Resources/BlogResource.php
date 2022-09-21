<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    public static function getGloballySearchableAttributes(): array
    {
        return ['blogTitle', 'blogSlug'];
    }
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static    ?string $navigationLabel="News room";

    protected static ?string $navigationGroup = 'About website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')->default(Auth::id()),

                Tabs::make('Heading')->columnSpan(2)
                    ->tabs([
                        Tabs\Tab::make('default(French)')
                            ->icon('heroicon-o-bell')
                            ->badge('*4')
                            ->schema([
                                Placeholder::make('French'),
                                Forms\Components\TextInput::make('blogTitle')
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state ){
                                        $set('blogSlug',Str::slug($state));
                                    })
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('blogSlug')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('blogSummary')
                                    ->required()
                                    ->maxLength(65535),
                                Forms\Components\RichEditor::make('mainStory')
                            ]),





                        /*English language*/
                        Tabs\Tab::make('English')
                            ->schema([
                                Placeholder::make('English'),
                                Forms\Components\TextInput::make('blogTitle_en')
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state ){
                                        $set('blogSlug_en',Str::slug($state));
                                    })
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('blogSlug_en')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('blogSummary_en')
                                    ->required()
                                    ->maxLength(65535),
                                Forms\Components\Textarea::make('mainStory_en')
                                    ->required(),
                            ]),


                        /*French language*/
                        Tabs\Tab::make('Kinyarwanda')

                            ->schema([
                                Placeholder::make('Kinyarwanda'),
                                Forms\Components\TextInput::make('blogTitle_kiny')
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state ){
                                        $set('blogSlug_kiny',Str::slug($state));
                                    })
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('blogSlug_kiny')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('blogSummary_kiny')
                                    ->required()
                                    ->maxLength(65535),
                                Forms\Components\RichEditor::make('mainStory_kiny')
                                    ->required(),
                            ]),
                    ]),

                Forms\Components\FileUpload::make('mainPhoto')
                    ->required()
                ->image(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('mainPhoto')->rounded(),
                Tables\Columns\TextColumn::make('blogTitle')->wrap(),
                Tables\Columns\TextColumn::make('blogSummary')->wrap(),
                Tables\Columns\TextColumn::make('views'),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
