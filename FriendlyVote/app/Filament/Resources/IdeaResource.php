<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IdeaResource\Pages;
use App\Filament\Resources\IdeaResource\RelationManagers;
use App\Models\Idea;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class IdeaResource extends Resource
{
    protected static ?string $model = Idea::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Post Management';
    protected static ?int $navigationSort = 1;
    
    protected static function getNavigationBadge(): ?string
    {
    return static::getModel()::count();
    }
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('user_id')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('category_id')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('status_id')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('description')->sortable()->searchable()->toggleable(),
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
            'index' => Pages\ListIdeas::route('/'),
            'create' => Pages\CreateIdea::route('/create'),
            'edit' => Pages\EditIdea::route('/{record}/edit'),
        ];
    }    
}
