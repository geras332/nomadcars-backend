<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContractLegalEntityResource\Pages;
use App\Models\Contract;
use App\Services\Contract\ContractService;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class ContractLegalEntityResource extends Resource
{
    protected static ?string $model = Contract::class;
    protected static ?string $navigationGroup = 'Менеджер контрактов';
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Контракты для юр. лиц';
    protected static ?int $navigationSort = 2;
    protected static ?string $breadcrumb = 'Контракты для юр. лиц';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Hidden::make('initiator_id')->default(Auth::id()),
            Section::make('Данные компании')
                ->schema([
                    TextInput::make('company_name')
                        ->label('Название компании')
                        ->required(),
                    TextInput::make('inn')->label('ИНН')->required(),
                    TextInput::make('legal_address')->label('Юридический адрес')->required(),
                    TextInput::make('bank_name')->label('Название банка')->required(),
                    TextInput::make('bic')->label('БИК')->required(),
                    TextInput::make('account_number')->label('Номер счета')->required(),
                ])
                ->columns(),

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
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Компания')
                    ->sortable()
                    ->searchable(),
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
                return $query->whereNotNull('company_name');
            })
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('generate_pdf')
                    ->label('Сгенерировать контракт')
                    ->icon('heroicon-o-document')
                    ->color('primary')
                    ->action(function (Contract $record) {
                        return ContractService::generatePdf($record);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Подтвердите создание PDF')
                    ->modalDescription('Вы уверены, что хотите создать PDF для этого контракта?'),
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
            'index' => Pages\ListContractLegalEntities::route('/'),
            'create' => Pages\CreateContractLegalEntity::route('/create'),
            'edit' => Pages\EditContractLegalEntity::route('/{record}/edit'),
        ];
    }
}
