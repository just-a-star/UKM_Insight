<x-app-layout>
    {{-- Container --}}
    <div class="mx-auto w-full max-w-9xl px-4 py-8 sm:px-6 lg:px-8">
        <x-dashboard.welcome-banner />

        <div class="mb-2">
            {{-- Tabel Anggota --}}
            {{-- <x-dashboard.dashboard-card-10 /> --}}

        </div>
        <div class="grid grid-cols-2 gap-4">

            {{-- <div><x-dashboard.dashboard-card-12 /></div> --}}
            {{-- Aktivitas terkini --}}
            <div>
                {{-- <x-dashboard.dashboard-card-06 /> --}}
            </div>
            {{-- Angkatan --}}

        </div>
        <div class="mt-2">
            <x-anggota.anggota-card-01 />
        </div>
        <x-dasbor.dasbor-angkatan />
    </div>
    </div id="">

</x-app-layout>
