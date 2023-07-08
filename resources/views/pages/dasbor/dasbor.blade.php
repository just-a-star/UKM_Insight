<x-app-layout>
    <div class="mx-auto w-full max-w-9xl px-4 py-8 sm:px-6 lg:px-8">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="mb-8 sm:flex sm:items-center sm:justify-between">

            <!-- Left: Avatars -->
            <x-dashboard.dashboard-avatars />

            <!-- Right: Actions -->
            <div class="grid grid-flow-col justify-start gap-2 sm:auto-cols-max sm:justify-end">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn bg-indigo-500 text-white hover:bg-indigo-600">
                    <svg class="h-4 w-4 shrink-0 fill-current opacity-50" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="ml-2 hidden xs:block">Add View</span>
                </button>

            </div>

        </div>

        <!-- Cards -->
        <div class="grid gap-6">

            <div class="grid grid-cols-6">
                <!-- Total UKM -->
                <div class="col-span-6 sm:col-span-3">
                    <x-dasbor.dasbor-total-ukm />
                </div>

                <!-- Total Member -->
                <div class="col-span-6 sm:col-span-3">
                    <x-dasbor.dasbor-total-member />
                </div>
            </div>

            <div class="grid grid-cols-4">
                <!-- UKM Aktif -->
                <div class="col-span-4 sm:col-span-2">
                    <x-dasbor.dasbor-ukm-aktif />
                </div>

                <!-- Skala Kegiatan -->
                <div class="col-span-4 sm:col-span-2">
                    <x-dasbor.dasbor-skala-kegiatan />
                </div>

                <!-- Aktivitas Terkini -->
                <div class="col-span-4 sm:col-span-2">
                    <x-dasbor.dasbor-aktivitas-terkini />
                </div>

                <!-- Recent Activity -->
                <div class="col-span-4">
                    <x-dasbor.dasbor-recent-activity />
                </div>
            </div>
        </div>


</x-app-layout>
