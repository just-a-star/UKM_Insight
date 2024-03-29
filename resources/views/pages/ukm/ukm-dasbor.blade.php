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

                <!-- Add view button -->
                {{-- <button class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Add View</span>
                </button> --}}

                <!-- Anggota button -->
                <a href="{{ url('ukm-anggota/' . $ukmList[0]['id']) }}"
                    class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path d="M12 3H4c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 9H4V4h8v8z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Anggota</span>
                </a>

                <!-- Aset button -->
                <a href="{{ url('ukm-aset/' . $ukmList[0]['id']) }}"
                    class="text-white bg-indigo-500 btn hover:bg-indigo-600">
                    <svg class="w-4 h-4 opacity-50 fill-current shrink-0" viewBox="0 0 16 16">
                        <path d="M12 3H4c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1zm0 9H4V4h8v8z" />
                    </svg>
                    <span class="hidden ml-2 xs:block">Aset</span>
                </a>

                <!-- Dasbor button -->
                <a href="{{ url('ukm-dana/' . $ukmList[0]['id']) }}"
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
                <div class="p-6 bg-white border rounded-sm shadow-lg border-slate-200">
                    <h2 class="text-lg font-semibold text-slate-800">Dasbor UKM</h2>
                    <p>This is a simple dashboard page for UKM.</p>
                </div>
            </div>
            <x-ukm.ukm-detail-card :ukmList="$ukmList" />
            <x-ukm.ukm-kegiatan-card :dataKegiatan="$dataKegiatan" />

        </div>

    </div>
</x-app-layout>
