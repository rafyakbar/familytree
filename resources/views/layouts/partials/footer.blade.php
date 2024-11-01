<footer class="text-center print:hidden text-neutral-600 dark:text-neutral-200 lg:text-left">
    <!-- Top Section: Social Media Links -->
    <div class="flex items-center justify-center p-2 border-b-2 border-neutral-200 dark:border-neutral-500 lg:justify-between bg-neutral-200 dark:bg-neutral-700">
        <!-- Social Media Header (Visible on Large Screens) -->
        <div class="hidden mr-12 lg:block">
            <span>{{ __('app.connected_social') }}:</span>
        </div>

        <!-- Social Media Icons -->
        <div class="flex justify-center">
            <a href="https://github.com/rafyakbar/familytree" class="text-neutral-600 dark:text-neutral-200" target="_blank" title="GitHub">
                <x-ts-icon icon="brand-github" class="text-neutral-900 dark:text-neutral-200" />
            </a>
        </div>
    </div>

    <!-- Middle Section: Main Content -->
    <div class="px-2 py-5 text-center md:text-left bg-neutral-100 dark:bg-neutral-600">
        <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <!-- Logo Section -->
            <div class="flex justify-center md:justify-start">
                <a href="{{ route('home') }}" aria-label="Go to Home" title="Home">
                    <x-svg.genealogy class="size-48 fill-dark dark:fill-neutral-400 hover:fill-primary-300 dark:hover:fill-primary-300" alt="Genealogy Logo" />
                </a>
            </div>

            <!-- Useful Links Section -->
            <div>
                <h6 class="flex justify-center mb-4 font-semibold uppercase md:justify-start">{{ __('app.useful_links') }}</h6>
                <x-hr.narrow class="w-48 h-1 my-4 bg-gray-100 border-0 rounded max-md:mx-auto dark:bg-gray-700" />
                <p class="mb-4">
                    <x-nav-link-footer href="{{ route('about') }}" :active="request()->routeIs('about')">
                        {{ __('app.about') }}
                    </x-nav-link-footer>
                </p>
                <p class="mb-4">
                    <x-nav-link-footer href="{{ route('help') }}" :active="request()->routeIs('help')">
                        {{ __('app.help') }}
                    </x-nav-link-footer>
                </p>
            </div>

            <!-- Impressum Section -->
            <div>
                <h6 class="flex justify-center mb-4 font-semibold uppercase md:justify-start">{{ __('app.impressum') }}</h6>
                <x-hr.narrow class="w-48 h-1 my-4 bg-gray-100 border-0 rounded max-md:mx-auto dark:bg-gray-700" />
                <p class="mb-4">
                    <x-nav-link-footer href="{{ url('terms-of-service') }}" :active="request()->is('terms-of-service')">
                        {{ __('app.terms_of_service') }}
                    </x-nav-link-footer>
                </p>
                <p class="mb-4">
                    <x-nav-link-footer href="{{ url('privacy-policy') }}" :active="request()->is('privacy-policy')">
                        {{ __('app.privacy_policy') }}
                    </x-nav-link-footer>
                </p>
            </div>

            <!-- Contact Section -->
            <div>
                <h6 class="flex justify-center mb-4 font-semibold uppercase md:justify-start">{{ __('app.contact') }}</h6>
                <x-hr.narrow class="w-48 h-1 my-4 bg-gray-100 border-0 rounded max-md:mx-auto dark:bg-gray-700" />

                <p class="flex items-center justify-center mb-4 md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 size-5">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path
                            d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                    Indonesia, Surabaya
                </p>

                <p class="flex items-center justify-center mb-4 md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 size-5">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                    24051905007@mhs.unesa.ac.id (Rafy)
                </p>

                <p class="flex items-center justify-center mb-4 md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 size-5">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                    </svg>
                    24051905008@mhs.unesa.ac.id (Rezky)
                </p>
            </div>
        </div>
    </div>

    <!-- Bottom Section: Copyright -->
    @include('layouts.partials.copyright')
</footer>
