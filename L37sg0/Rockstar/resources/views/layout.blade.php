<x-app-layout>
        <x-slot:navigationLinks>

            <x-nav-link :href="route('dashboard.icon-section')"
                        :active="request()->routeIs('dashboard.icon-section')">Icon
            </x-nav-link>
            <x-nav-link :href="route('dashboard.home-section')"
                        :active="request()->routeIs('dashboard.home-section')">Home
            </x-nav-link>
            <x-nav-link :href="route('dashboard.band-section')"
                        :active="request()->routeIs('dashboard.band-section')">Band
            </x-nav-link>
            <x-nav-link :href="route('dashboard.tour-section')"
                        :active="request()->routeIs('dashboard.tour-section')">Tour
            </x-nav-link>
            <x-nav-link :href="route('dashboard.contact-section')"
                        :active="request()->routeIs('dashboard.contact-section')">Contact
            </x-nav-link>
            <x-nav-link :href="route('dashboard.social-section')"
                        :active="request()->routeIs('dashboard.social-section')">Social
            </x-nav-link>
        </x-slot:navigationLinks>
        <x-slot:responsiveNavigation>
            <x-responsive-nav-link :href="route('dashboard.icon-section')"
                                   :active="request()->routeIs('dashboard.icon-section')">
                Icon
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard.home-section')"
                                   :active="request()->routeIs('dashboard.home-section')">
                Home
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard.band-section')"
                                   :active="request()->routeIs('dashboard.band-section')">
                Band
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard.tour-section')"
                                   :active="request()->routeIs('dashboard.tour-section')">
                Tour
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard.contact-section')"
                                   :active="request()->routeIs('dashboard.contact-section')">
                Contact
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard.social-section')"
                                   :active="request()->routeIs('dashboard.social-section')">
                Social
            </x-responsive-nav-link>

        </x-slot:responsiveNavigation>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$header}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
