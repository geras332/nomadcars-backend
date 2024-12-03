<?php

namespace App\Services\Contract;

use App\Models\Contract;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ContractService
{
    const INDIVIDUAL_TEMPLATE_NAME = 'individual';
    const LEGAL_ENTITY_TEMPLATE_NAME = 'legal_entity';

    public static function generatePdf(Contract $contract): StreamedResponse|Notification
    {
        $templatePath = self::getTemplatePath($contract);
        if (!Storage::fileExists($templatePath)) {
            return Notification::make()
                ->title('Ошибка')
                ->body('Шаблон контракта не найден!')
                ->icon('heroicon-o-exclamation-circle')
                ->iconColor('danger')
                ->send();
        }

        $template = Storage::get($templatePath);
        $template = self::replaceAliasesWithVars($contract, $template);

        $pdf = Pdf::loadHTML($template, 'UTF-8');

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, "$contract->contract_number.pdf");
    }

    public static function getTemplatePath(Contract $contract): string
    {
        $contractType = $contract->isIndividual() ? 'individual' : 'legal_entity';

        return "templates/contract_template_$contractType.html";
    }

    public static function replaceAliasesWithVars(Contract $contract, string $template): string
    {
        $vars = $contract->isIndividual() ? self::getIndividualTemplateVars() : self::getLegalEntityTemplateVars();

        foreach ($vars as $alias => $description) {
            $modelValue = $contract->getAttribute(strtolower(ltrim($alias, '$'))) ?? '';
            $template = str_replace($alias, $modelValue, $template);
        }

        return $template;
    }

    public static function getIndividualTemplateVars(): array
    {
        return [
            '$FIRST_NAME' => 'Имя клиента',
            '$LAST_NAME' => 'Фамилия клиента',
            '$MIDDLE_NAME' => 'Отчество клиента',
            '$EMAIL' => 'Email клиента',
            '$PHONE_NUMBER' => 'Номер телефона клиента',
            '$ADDRESS' => 'Адрес клиента',
            '$PASSPORT_NUMBER' => 'Номер паспорта клиента',
            '$PASSPORT_ISSUED_BY' => 'Кем выдан паспорт',
            '$PASSPORT_ISSUE_DATE' => 'Дата выдачи паспорта',
            '$CAR_NAME' => 'Марка автомобиля',
            '$VIN_CODE' => 'VIN код автомобиля',
            '$PRICE' => 'Цена контракта',
            '$CURRENCY' => 'Валюта контракта',
        ];
    }

    public static function getLegalEntityTemplateVars(): array
    {
        return [
            '$FIRST_NAME' => 'Имя клиента',
            '$LAST_NAME' => 'Фамилия клиента',
            '$MIDDLE_NAME' => 'Отчество клиента',
            '$EMAIL' => 'Email клиента',
            '$PHONE_NUMBER' => 'Номер телефона клиента',
            '$ADDRESS' => 'Адрес клиента',
            '$PASSPORT_NUMBER' => 'Номер паспорта клиента',
            '$PASSPORT_ISSUED_BY' => 'Кем выдан паспорт',
            '$PASSPORT_ISSUE_DATE' => 'Дата выдачи паспорта',
            '$CAR_NAME' => 'Марка автомобиля',
            '$VIN_CODE' => 'VIN код автомобиля',
            '$PRICE' => 'Цена контракта',
            '$CURRENCY' => 'Валюта контракта',
            '$COMPANY_NAME' => 'Название компании (для юр. лиц)',
            '$INN' => 'ИНН компании (для юр. лиц)',
            '$LEGAL_ADDRESS' => 'Юридический адрес компании (для юр. лиц)',
            '$BANK_NAME' => 'Название банка',
            '$BIC' => 'BIC банка',
            '$ACCOUNT_NUMBER' => 'Номер расчетного счета',
        ];
    }
}
