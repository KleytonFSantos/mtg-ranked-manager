@php
    $user = filament()->auth()->user();
@endphp

<x-filament-widgets::widget class="fi-account-widget">
    <x-filament::section>
        <div class="flex items-center justify-between gap-x-3 py-3">
            <x-filament::link
                color="gray"
                href="{{ route('scoreTable') }}"
                icon="heroicon-o-home"
                icon-alias="panels::widgets.account.logout-button"
                labeled-from="sm"
            >
                <div class="flex-1 ml-12">
                    <h2
                        class="grid flex-1 text-base font-semibold leading-6 text-gray-950 dark:text-white"
                    >
                        Click to go to the score table
                    </h2>
                </div>
            </x-filament::link>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
