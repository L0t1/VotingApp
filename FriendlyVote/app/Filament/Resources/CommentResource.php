<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Comment;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CommentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CommentResource\RelationManagers;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat';
    protected static ?string $navigationGroup = 'Post Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('body'),
            ]);
      }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('user_id')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('idea_id')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('status_id')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('body')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('spam_reports')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('created_at')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')->sortable()->searchable()->toggleable(),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }    
}
