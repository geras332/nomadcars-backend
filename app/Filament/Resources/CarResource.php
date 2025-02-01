<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers\ContractRelationManager;
use App\Models\Car;
use App\Models\Contract;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;
use Parallax\FilamentComments\Tables\Actions\CommentsAction;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;
    protected static ?string $modelLabel = 'Машина';

    protected static ?string $navigationGroup = 'Логистика и контракты';
    protected static ?string $navigationLabel = 'Логистика автомобилей';
    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?int $navigationSort = 1;
    protected static ?string $breadcrumb = 'Логистика автомобилей';
    protected static ?string $slug = 'logistics-cars';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('manager_id')->default(Auth::id()),
                Forms\Components\Section::make('Финансовая информация')
                    ->schema([
                        Forms\Components\TextInput::make('purchase_price')
                            ->label('Цена покупки')
                            ->required()
                            ->numeric()
                            ->helperText('Укажите цену покупки автомобиля'),

                        Forms\Components\TextInput::make('sale_price')
                            ->label('Цена продажи')
                            ->required()
                            ->numeric()
                            ->helperText('Укажите цену, по которой планируется продать автомобиль'),

                        Forms\Components\TextInput::make('commission_payment')
                            ->label('Комиссия')
                            ->required()
                            ->numeric()
                            ->helperText('Размер комиссии за сделку'),
                    ])
                    ->collapsible(),

                Forms\Components\Section::make('Валюта и обменные курсы')
                    ->schema([
                        Forms\Components\Select::make('purchase_currency')
                            ->label('Валюта покупки')
                            ->required()
                            ->options([
                                'rub' => 'Рубль (₽)',
                                'usd' => 'Доллар США (USD)',
                                'cny' => 'Юань (CNY)',
                                'eur' => 'Евро (EUR)',
                            ])
                            ->native(false)
                            ->helperText('Выберите валюту, в которой была проведена покупка'),

                        Forms\Components\TextInput::make('purchase_exchange_rate')
                            ->label('Курс покупки')
                            ->required()
                            ->numeric()
                            ->helperText('Укажите курс валюты на момент покупки'),

                        Forms\Components\Select::make('sale_currency')
                            ->label('Валюта продажи')
                            ->required()
                            ->options([
                                'rub' => 'Рубль (₽)',
                                'usd' => 'Доллар США (USD)',
                                'cny' => 'Юань (CNY)',
                                'eur' => 'Евро (EUR)',
                            ])
                            ->native(false)
                            ->helperText('Выберите валюту, в которой будет происходить продажа'),

                        Forms\Components\TextInput::make('sale_exchange_rate')
                            ->label('Курс продажи')
                            ->required()
                            ->numeric()
                            ->helperText('Укажите курс валюты на момент продажи'),
                    ])
                    ->collapsible(),

                Forms\Components\Section::make('Статус и контракт')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Статус машины')
                            ->options([
                                'china' => 'Китай',
                                'kashgar' => 'Кашгар',
                                'irkeshtam' => 'Иркештам',
                                'bishkek' => 'Бишкек',
                                'osh' => 'Ош',
                                'svh' => 'СВХ',
                                'customs' => 'Растаможка - оформление',
                                'delivered' => 'Передали клиенту',
                                'delayed' => 'Задерживается',
                            ])
                            ->native(false)
                            ->required()
                            ->helperText('Выберите текущее местоположение или статус машины'),

                        Forms\Components\Select::make('payment_status')
                            ->label('Статус платежа')
                            ->options([
                                'paid' => 'Оплачено',
                                'not_paid' => 'Не оплачено',
                            ])
                            ->native(false)
                            ->required()
                            ->helperText('Выберите статус оплаты для данной сделки'),

                        Forms\Components\Select::make('contract_id')
                            ->label('Контракт')
                            ->relationship(
                                name: 'contract',
                                modifyQueryUsing: fn (Builder $query) => $query->orderBy('id', 'desc'),
                            )
                            ->getOptionLabelFromRecordUsing(fn (Contract $contract) => "NOMADCARS{$contract->getAttribute('id')}")
                            ->searchable(['id', 'customer_name'])
                            ->native(false)
                            ->preload()
                            ->required()
                            ->helperText('Выберите контракт, с которым связана сделка'),
                    ])
                    ->collapsible(),
            ]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contract.id')
                    ->label('Контракт')
                    ->getStateUsing(function (Car $car) {
                        return "NOMADCARS{$car->contract->getAttribute('id')}";
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Название машины')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vin')
                    ->label('VIN')
                    ->searchable()
                    ->getStateUsing(function (Car $car) {
                        $paymentStatus = $car->getAttribute('payment_status');

                        return match ($paymentStatus) {
                            "paid" => 'Оплачено',
                            "not_paid" => 'Не оплачено',
                            default => 'Неизвестный статус',
                        };
                    }),
                Tables\Columns\TextColumn::make('status')
                    ->label('Статус')
                    ->getStateUsing(function (Car $car) {
                        $status = $car->getAttribute('status');

                        return match ($status) {
                            "china" => 'Китай',
                            "kashgar" => 'Кашгар',
                            "irkeshtam" => 'Иркештам',
                            "bishkek" => 'Бишкек',
                            "osh" => 'Ош',
                            "svh" => 'СВХ',
                            "customs" => 'Растаможка - оформление',
                            "delivered" => 'Передали клиенту',
                            "delayed" => 'Задерживается',
                            default => 'Неизвестный статус',
                        };
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата обновление')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                DateRangeFilter::make('created_at')
                    ->placeholder('Дата создания')
                    ->label('Дата создания'),
            ])
            ->actions([
                CommentsAction::make(),
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
            ContractRelationManager::class,
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
