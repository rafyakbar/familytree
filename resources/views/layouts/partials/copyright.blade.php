<div class="flex justify-between p-2 text-xs bg-neutral-200 dark:bg-neutral-700">
    <div class="text-left">
        Copyright © {{ date('Y') }} | <x-link href="https://bertemu.id/" target="_blank">BERTEMU</x-link>.<br />
        {{ __('app.open_source') }} <x-link href="/about">{{ __('app.licence') }}</x-link>.<br />
        {{ __('app.free_use') }}.
    </div>

    <div class="flex items-center">
        <div class="px-2 text-right">
            {{ __('app.design_development') }}<br />
            {{ __('app.by') }} <x-link href="https://bertemu.id/" target="_blank">Bertemu</x-link>
        </div>

        <a href="https://bertemu.id/" target="_blank" title="Bertemu">
            <x-svg.kreaweb class="size-11 dark:fill-white hover:fill-primary-300 dark:hover:fill-primary-300" alt="kreaweb" />
        </a>
    </div>
</div>
