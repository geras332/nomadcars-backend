<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContractIndividualResource\Pages;
use App\Models\Contract;
use App\Services\Contract\ContractService;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContractIndividualResource extends Resource
{
    protected static ?string $model = Contract::class;

    protected static ?string $navigationGroup = 'Менеджер контрактов';
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Контракты для физ. лиц';
    protected static ?int $navigationSort = 1;
    protected static ?string $breadcrumb = 'Контракты для физ. лиц';

    const TEMPLATE_PATH = 'templates/contract_template_individual.html';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Личные данные')
                ->schema([
                    TextInput::make('first_name')
                        ->label('Имя')
                        ->required(),
                    TextInput::make('last_name')
                        ->label('Фамилия')
                        ->required(),
                    TextInput::make('middle_name')
                        ->label('Отчество')
                        ->required(),
                    TextInput::make('phone_number')
                        ->label('Номер телефона')
                        ->required(),
                    TextInput::make('email')
                        ->label('Почта')
                        ->email()
                        ->nullable()
                        ->columnSpanFull(),
                ])->columns(),

            Section::make('Паспортные данные')
                ->schema([
                    TextInput::make('passport_number')->label('Номер паспорта')->required(),
                    TextInput::make('passport_issued_by')->label('Кем выдан паспорт')->required(),
                    DatePicker::make('passport_issue_date')->label('Дата выдачи паспорта')
                        ->required()
                        ->minDate(now()->subYears(100))
                        ->maxDate(now()->toDateString())
                        ->suffixIcon('heroicon-o-calendar-days')
                        ->native(false),
                ]),

            Section::make('Данные автомобиля')
                ->schema([
                    TextInput::make('car_name')->label('Марка автомобиля')->required(),
                    TextInput::make('vin_code')->label('VIN код'),
                ]),

            Section::make('Финансовые данные')
                ->schema([
                    TextInput::make('price')->label('Цена')->numeric()->required()->suffixIcon('heroicon-o-currency-dollar'),
                    Select::make('currency')->label('Валюта')
                        ->options(['USD' => 'USD', 'EUR' => 'EUR', 'RUB' => 'RUB'])
                        ->default('USD')
                        ->required()
                        ->native(false),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('contract_number')
                    ->label('Номер контракта')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        return $record->contract_number;
                    }),
                Tables\Columns\TextColumn::make('full_name')
                    ->label('ФИО')
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        return $record->full_name;
                    }),
                Tables\Columns\TextColumn::make('car_name')
                    ->label('Машина')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Цена')
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        $currency = $record->currency;

                        return match ($currency) {
                            'USD' => '$' . number_format($state, 2),
                            'EUR' => '€' . number_format($state, 2),
                            'RUB' => '₽' . number_format($state, 2),
                            default => $state,
                        };
                    }),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Номер телефона')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создание')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата обновления')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->modifyQueryUsing(function ($query) {
                return $query->whereNull('company_name');
            })
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('generate_pdf')
                    ->label('Сгенерировать PDF')
                    ->icon('heroicon-o-document')
                    ->color('primary')
                    ->action(function (Contract $record) {
                        return ContractService::generatePdf($record);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Подтвердите создание PDF')
                    ->modalDescription('Вы уверены, что хотите создать PDF для этого контракта?')
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
            'index' => Pages\ListContractIndividuals::route('/'),
            'create' => Pages\CreateContractIndividual::route('/create'),
            'edit' => Pages\EditContractIndividual::route('/{record}/edit'),
        ];
    }
}
