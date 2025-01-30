<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use App\Models\Contract;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Основные данные автомобиля')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Название автомобиля')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('vin')
                            ->label('VIN Код')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('customer_fio')
                            ->label('ФИО клиента')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('customer_phone')
                            ->label('Номер телефона клиента')
                            ->tel()
                            ->maxLength(255),
                    ])
                    ->collapsible(),

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
                        Forms\Components\TextInput::make('purchase_currency')
                            ->label('Валюта покупки')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Укажите валюту, в которой была проведена покупка'),

                        Forms\Components\TextInput::make('purchase_exchange_rate')
                            ->label('Курс покупки')
                            ->required()
                            ->numeric()
                            ->helperText('Укажите курс валюты на момент покупки'),

                        Forms\Components\TextInput::make('sale_currency')
                            ->label('Валюта продажи')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Укажите валюту, в которой будет происходить продажа'),

                        Forms\Components\TextInput::make('sale_exchange_rate')
                            ->label('Курс продажи')
                            ->required()
                            ->numeric()
                            ->helperText('Укажите курс валюты на момент продажи'),
                    ])
                    ->collapsible(),

                Forms\Components\Section::make('Статус и контракт')
                    ->schema([
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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('purchase_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('commission_payment')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('purchase_currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('purchase_exchange_rate')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_currency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sale_exchange_rate')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('contract.id')
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
