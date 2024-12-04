@php use App\Services\Contract\ContractService; @endphp

<x-filament-panels::page>
    <x-filament::tabs label="Content tabs">
        <x-filament::tabs.item :active="$activeTab === ContractService::INDIVIDUAL_TEMPLATE_NAME" wire:click="setIndividualTab()">
            Шаблон для для физ. лиц
        </x-filament::tabs.item>
        <x-filament::tabs.item :active="$activeTab === ContractService::LEGAL_ENTITY_TEMPLATE_NAME" wire:click="setLegalEntityTab()">
            Шаблон для для юр. лиц
        </x-filament::tabs.item>
    </x-filament::tabs>

    @if($activeTab === ContractService::INDIVIDUAL_TEMPLATE_NAME)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b-2 border-gray-300">
                        Переменная
                    </th>
                    <th scope="col" class="px-6 py-3 border-b-2 border-gray-300">
                        Описание
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($individualTemplateVars as $var => $description)
                    <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white border-l border-gray-300">
                            {{ $var }}
                        </td>
                        <td class="px-6 py-4 text-gray-600 dark:text-gray-400 border-l border-gray-300">
                            {{ $description }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

    @if($activeTab === ContractService::LEGAL_ENTITY_TEMPLATE_NAME)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b-2 border-gray-300">
                        Переменная
                    </th>
                    <th scope="col" class="px-6 py-3 border-b-2 border-gray-300">
                        Описание
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($legalEntityTemplateVars as $var => $description)
                    <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white border-l border-gray-300">
                            {{ $var }}
                        </td>
                        <td class="px-6 py-4 text-gray-600 dark:text-gray-400 border-l border-gray-300">
                            {{ $description }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}
        <div class="mt-6 flex justify-start gap-4 space-x-4">
            <x-filament::button wire:click="save" color="primary">
                Сохранить
            </x-filament::button>
            <x-filament::button wire:click="cancel" color="gray">
                Отменить
            </x-filament::button>
        </div>
    </x-filament-panels::form>
</x-filament-panels::page>
