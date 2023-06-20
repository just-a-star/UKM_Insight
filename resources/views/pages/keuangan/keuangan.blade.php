<x-app-layout>
    {{-- Container --}}
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <x-dashboard.welcome-banner/>

        <div class="mb-2">
            {{-- Tabel kegiatan --}}
            <x-keuangan.keuangan/>

        </div>
    </div>
</x-app-layout>
