<div class="rounded-sm border border-slate-200 bg-white p-6 shadow-lg">
    <h2 class="text-lg font-semibold text-slate-800">Kegiatan Detail</h2>

    <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">
        <div>
            <h3 class="text-base font-semibold text-slate-800">Nama Kegiatan</h3>
            <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->nama }}</p>
        </div>

        <div>
            <h3 class="text-base font-semibold text-slate-800">UKM</h3>
            <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->ukm->nama }}</p>
        </div>

        <div>
            <h3 class="text-base font-semibold text-slate-800">Skala</h3>
            <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->skala }}</p>
        </div>

        <div>
            <h3 class="text-base font-semibold text-slate-800">Kategori</h3>
            <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->kategori }}</p>
        </div>

        <div>
            <h3 class="text-base font-semibold text-slate-800">Tanggal Pelaksanaan</h3>
            <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->tgl_pelaksanaan }}</p>
        </div>

        <div>
            <h3 class="text-base font-semibold text-slate-800">Proposal</h3>
            <p class="mt-2 text-sm text-gray-700">
                @if ($dataKegiatan->proposal)
                    <a href="{{ $dataKegiatan->proposal }}" class="text-indigo-500 hover:text-indigo-600">Download</a>
                @else
                    Belum tersedia
                @endif
            </p>
        </div>

        <div>
            <h3 class="text-base font-semibold text-slate-800">Penanggung Jawab</h3>
            @foreach ($dataKegiatan->partisipanKegiatan as $partisipan)
                @if ($partisipan->role === 'penanggung_jawab')
                    <p class="mt-2 text-sm text-gray-700">{{ $partisipan->anggota?->nama ?? 'N/A' }}</p>
                @endif
            @endforeach
        </div>
    </div>
</div>
