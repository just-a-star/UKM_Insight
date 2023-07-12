<div class="p-6 bg-white border rounded-sm shadow-lg border-slate-200">
    <h2 class="text-lg font-semibold text-slate-800">Kegiatan Detail</h2>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Nama Kegiatan</h3>
        <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->nama }}</p>
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Skala</h3>
        <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->skala }}</p>
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Kategori</h3>
        <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->kategori }}</p>
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Tanggal Pelaksanaan</h3>
        <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->tgl_pelaksanaan }}</p>
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Proposal</h3>
        <p class="mt-2 text-sm text-gray-700">
            @if ($dataKegiatan->proposal)
                <a href="{{ $dataKegiatan->proposal }}" class="text-indigo-500 hover:text-indigo-600">Download</a>
            @else
                Belum tersedia
            @endif
        </p>
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Deskripsi</h3>
        <p class="mt-2 text-sm text-gray-700">{{ $dataKegiatan->deskripsi }}</p>
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Partisipan Kegiatan</h3>
        @foreach ($dataKegiatan->partisipanKegiatan as $partisipan)
            <p class="mt-2 text-sm text-gray-700">{{ $partisipan->role }}: {{ $partisipan->anggota?->nama ?? 'N/A' }}
            </p>
        @endforeach
    </div>

    <div class="mt-4">
        <h3 class="text-base font-semibold text-slate-800">Dana</h3>
        @foreach ($dataKegiatan->dana as $dana)
            <p class="mt-2 text-sm text-gray-700">Jumlah: {{ $dana->dana }}</p>
        @endforeach
    </div>


</div>
