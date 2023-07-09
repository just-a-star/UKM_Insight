<div class="col-span-12">
    <div class="rounded-sm border border-slate-200 bg-white p-6 shadow-lg">
        {{-- <h2 class="text-lg font-semibold text-slate-800">Daftar UKM</h2> --}}
        <div class="mt-4 space-y-4">
            @foreach ($ukmList as $ukm)
                <div>
                    <h2 class="text-lg font-medium text-slate-800">{{ $ukm['name'] }}</h2>
                    <p class="text-gray-500">{{ $ukm['deskripsi'] }}</p>
                    <p class="text-gray-500">Ketua: {{ $ukm['ketua'] }}</p>
                    <p class="text-gray-500">Total Anggota: {{ $ukm['total_anggota'] }}</p>
                    <p class="text-gray-500">Pengeluaran Periode Ini:
                        Rp{{ number_format($ukm['pengeluaran_periode_ini'], 0, ',', '.') }}</p>
                    <p class="text-gray-500">Kegiatan Periode Ini: {{ $ukm['kegiatan_periode_ini'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
