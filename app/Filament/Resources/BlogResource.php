<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class BlogResource extends Resource
{

    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Hidden::make('user_id')->default(Auth::id()),
                        TextInput::make('blogTitle')
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('blogSlug', Str::slug($state));
                            })->required(),
                        TextInput::make('blogSlug')
                            ->disabled()
                            ->maxLength(255)->required(),

                        Textarea::make('blogSummary')
                            ->required(),
                        TinyEditor::make('mainStory')->height(300)->required(),

                        FileUpload::make('mainPhoto')->image()
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('1080')->required()

                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('blogTitle'),
                Tables\Columns\TextColumn::make('blogSlug'),
                Tables\Columns\TextColumn::make('blogSummary'),
                Tables\Columns\TextColumn::make('mainStory'),
                Tables\Columns\TextColumn::make('mainPhoto'),
                Tables\Columns\TextColumn::make('views'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
