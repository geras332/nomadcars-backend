<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Advertisement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class CarResource extends Resource
{
    protected static ?string $model = Advertisement::class;

    protected static ?string $navigationLabel = 'Объявления';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Бренды и автомобили';
    protected static ?string $slug = 'advertisements';
    protected static ?string $breadcrumb = 'Объявления';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vin_code')
                    ->label('VIN')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->label('Название')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('body_type')
                    ->label('Кузов')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('transmission')
                    ->label('Коробка передач')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('engine_type')
                    ->label('Тип топлива')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('drive_type')
                    ->label('Привод')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->label('Год')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('mileage')
                    ->label('Пробег')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('engine_capacity')
                    ->label('Объем двигателя')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->label('Цена')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\Textarea::make('images')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vin_code')
                    ->label('VIN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Цена')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата изменения')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                DateRangeFilter::make('created_at')->label('Дата создания'),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
