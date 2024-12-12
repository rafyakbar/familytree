<div class="flex justify-between p-2 text-xs bg-neutral-200 dark:bg-neutral-700">
    <!-- Left Section: Copyright and Licensing -->
    <div class="text-left">
        <p>
            Copyright © {{ date('Y') }} |
            <x-link href="https://bertemu.id/" target="_blank" aria-label="Visit Bertemu website">
                Bertemu
            </x-link>.
        </p>
        <p>
            {{ __('app.open_source') }}
            <x-link href="/about" aria-label="Read about the license">{{ __('app.licence') }}</x-link>.
        </p>
        <p>{{ __('app.free_use') }}.</p>
    </div>

    <!-- Right Section: Design and Development Credits -->
    <div class="flex items-center">
        <div class="px-2 text-right">
            <p>
                {{ __('app.design_development') }}<br />
                {{ __('app.by') }}
                <x-link href="https://bertemu.id/" target="_blank" aria-label="Visit Bertemu website">
                    Bertemu
                </x-link>
            </p>
        </div>

        <!-- Bertemu Logo -->
        <a href="https://bertemu.id/" target="_blank" title="Bertemu" aria-label="Visit Bertemu website">
            <x-svg.kreaweb class="size-11 dark:fill-white hover:fill-primary-300 dark:hover:fill-primary-300" alt="Bertemu Logo" />
        </a>
    </div>
</div>
