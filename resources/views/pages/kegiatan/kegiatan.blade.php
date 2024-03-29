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

                
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12"></div>
            {{-- Skala kegiatan --}}
            {{-- <x-dasbor.dasbor-skala-kegiatan /> --}}
        </div>

        {{-- Kategori kegiatan --}}
        {{-- Tabel kegiatan --}}
        <x-kegiatan.kegiatan-card :dataKegiatan="$dataKegiatan" />

    </div>
    </div>

</x-app-layout>
