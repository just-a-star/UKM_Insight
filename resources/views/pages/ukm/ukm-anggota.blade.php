<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto max-w-9xl sm:px-6 lg:px-8">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="mb-8 sm:flex sm:items-center sm:justify-end">

            <!-- Left: Avatars -->
            {{-- <x-dashboard.dashboard-avatars />
            <x-dashboard.dashboard-avatars  /> --}}

            <!-- Right: Actions -->
            <div class="flex justify-end grid-flow-col gap-2 sm:auto-cols-max sm:justify-end">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />


                <!-- Anggota button -->
                {{-- <a href="{{ url('ukm-anggota/' . $ukmList[0]['id']) }}"
                    class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path d="M12 3H4c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 9H4V4h8v8z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Anggota UKM</span>
                </a> --}}

                <!-- Aset button -->
                <a href="{{ url('ukm-aset/' . $anggotaList[0]['id']) }}"
                    class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path d="M12 3H4c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 9H4V4h8v8z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Aset UKM</span>
                </a>

                <!-- Dasbor button -->
                <a href="{{ url('ukm-dasbor/' . $anggotaList[0]['id']) }}"
                    class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path <path
                            d="M12 3H4c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 9H4V4h8v8z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Dasbor UKM</span>
                </a>

                <a href="{{ url('ukm-dana/' . $anggotaList[0]['id']) }}"
                    class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path <path
                            d="M12 3H4c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 9H4V4h8v8z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Riwayat Keuangan</span>
                </a>

            </div>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            
            <div class="col-span-12">
                <x-ukm.ukm-anggota-card :anggotaList="$anggotaList" />
            </div>


        </div>

    </div>
</x-app-layout>
