<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertisementResource\Pages;
use App\Models\Advertisement;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class AdvertisementResource extends Resource
{
    protected static ?string $model = Advertisement::class;
    protected static ?string $modelLabel = 'Объявление';

    protected static ?string $navigationLabel = 'Объявления';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Бренды и объявления';
    protected static ?int $navigationSort = 2;
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
                Forms\Components\Select::make('brand_id')
                    ->label('Бренд')
                    ->relationship('brand', 'name')
                    ->native(false)
                    ->preload()
                    ->searchable()
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('images')
                    ->label('Изображения')
                    ->disk('public')
                    ->directory('advertisements')
                    ->multiple()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    /**
     * @throws Exception
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
                Filter::make('vin_code')
                    ->label('VIN Код')
                    ->form([
                        Forms\Components\TextInput::make('vin_code')->label('VIN Код')->placeholder('VIN Код'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if (isset($data['vin_code'])) {
                            return $query->where('vin_code', $data['vin_code']);
                        }

                        return $query;
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['vin_code']) {
                            $indicators['vin_code'] = 'VIN ' . $data['vin_code'];
                        }

                        return $indicators;
                    }),
                Tables\Filters\SelectFilter::make('brand')
                    ->label('Бренд')
                    ->relationship('brand', 'name')
                    ->searchable()
                    ->preload(),
                DateRangeFilter::make('created_at')->label('Дата создания')->placeholder('Дата создания'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAdvertisements::route('/'),
            'create' => Pages\CreateAdvertisements::route('/create'),
            'edit' => Pages\EditAdvertisements::route('/{record}/edit'),
        ];
    }
}
