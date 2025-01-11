<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GenerationResource\Pages;
use App\Models\Generation;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GenerationResource extends Resource
{
    protected static ?string $model = Generation::class;
    protected static ?string $modelLabel = 'Поколения';

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';
    protected static ?string $navigationGroup = 'Бренды и автомобили';
    protected static ?string $navigationLabel = 'Поколении';
    protected static ?string $slug = 'generations';
    protected static ?string $breadcrumb = 'Поколении';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('thumbnail')
                    ->label('Логотип')
                    ->image()
                    ->disk('public')
                    ->directory('thumbnails/generations')
                    ->preserveFilenames()
                    ->required()
                    ->maxSize(10240)
                    ->columnSpanFull(),

                Forms\Components\Select::make('model_id')
                    ->label('Модель')
                    ->relationship('model', 'name')
                    ->required()
                    ->searchable()
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Нет записей для отображения');
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
            'index' => Pages\ListGenerations::route('/'),
            'create' => Pages\CreateGeneration::route('/create'),
            'edit' => Pages\EditGeneration::route('/{record}/edit'),
        ];
    }
}
