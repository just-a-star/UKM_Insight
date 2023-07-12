<div class="p-6 mt-4 bg-white border rounded-sm shadow-lg border-slate-200">
    <h2 class="text-lg font-semibold text-slate-800">Dana</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Nama
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                        Deskripsi</th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase whitespace-nowrap">Dana
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Waktu
                        Transaksi</th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Tipe
                        Transaksi</th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Laporan
                        Keuangan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($dataKegiatan->dana as $dana)
                    <tr>
                        
                        <td class="px-6 py-4">{{ $dana->nama }}</td>
                        <td class="px-6 py-4">{{ $dana->deskripsi }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($dana->dana, 2, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ $dana->waktu_transaksi }}</td>
                        <td class="px-6 py-4">{{ $dana->tipe_transaksi }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ $dana->laporan_keuangan }}" download
                                class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">Download</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
