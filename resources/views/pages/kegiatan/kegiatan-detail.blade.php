<x-app-layout>
    <div class="mx-auto w-full max-w-9xl px-4 py-8 sm:px-6 lg:px-8">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="mb-8 sm:flex sm:items-center sm:justify-end">

            <!-- Left: Avatars -->
            {{-- <x-dashboard.dashboard-avatars />
            <x-dashboard.dashboard-avatars  /> --}}

            <!-- Right: Actions -->
            <div class="flex grid-flow-col justify-end gap-2 sm:auto-cols-max sm:justify-end">


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
        <x-kegiatan.kegiatan-detail-card :dataKegiatan="$dataKegiatan" />


        <x-kegiatan.kegiatan-feedback-card :dataKegiatan="$dataKegiatan" />

        <x-kegiatan.kegiatan-feedback-chart :dataKegiatan="$dataKegiatan" />

        <x-kegiatan.kegiatan-partisipan-card :dataKegiatan="$dataKegiatan" />

        <x-kegiatan.kegiatan-dana-card :dataKegiatan="$dataKegiatan" />

    </div>
    </div>

</x-app-layout>
