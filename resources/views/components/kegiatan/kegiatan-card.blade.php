<div class="p-6 bg-white border rounded-sm shadow-lg border-slate-200">
    <h2 class="text-lg font-semibold text-slate-800">List of Kegiatan</h2>
    <div class="mt-4">
        <div class="flex justify-between mb-4">
            <!-- Filter by Tanggal Pelaksanaan -->
            <div>
                <label for="tgl_pelaksanaan_filter" class="block text-sm font-medium text-gray-700">Filter by Tanggal
                    Pelaksanaan:</label>
                <input id="tgl_pelaksanaan_filter" type="text"
                    class="w-48 py-2 pl-4 border-gray-300 rounded-md datepicker form-input focus:border-indigo-500 focus:outline-none focus:ring-indigo-500"
                    placeholder="Select dates">
            </div>

            <!-- Filter by Skala -->
            <div>
                <label for="skala_filter" class="block text-sm font-medium text-gray-700">Filter by Skala:</label>
                <select id="skala_filter"
                    class="w-48 py-2 pl-4 pr-8 border-gray-300 rounded-md form-select focus:border-indigo-500 focus:outline-none focus:ring-indigo-500">
                    <option value="">All</option>
                    <option value="Lokal">Lokal</option>
                    <option value="Nasional">Nasional</option>
                    <option value="Internasional">Internasional</option>
                </select>
            </div>

            <!-- Filter by Kategori -->
            <div>
                <label for="kategori_filter" class="block text-sm font-medium text-gray-700">Filter by Kategori:</label>
                <select id="kategori_filter"
                    class="w-48 py-2 pl-4 pr-8 border-gray-300 rounded-md form-select focus:border-indigo-500 focus:outline-none focus:ring-indigo-500">
                    <option value="">All</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Kompetisi">Kompetisi</option>
                    <option value="Pameran">Pameran</option>
                </select>
            </div>

            <!-- Filter by Proposal -->
            <div>
                <label for="proposal_filter" class="block text-sm font-medium text-gray-700">Filter by Proposal:</label>
                <select id="proposal_filter"
                    class="w-48 py-2 pl-4 pr-8 border-gray-300 rounded-md form-select focus:border-indigo-500 focus:outline-none focus:ring-indigo-500">
                    <option value="">All</option>
                    <option value="1">With Proposal</option>
                    <option value="0">No Proposal</option>
                </select>
            </div>
        </div>

        <table id="kegiatan_table" class="min-w-full divide-y divide-gray-200">
            <!-- Table headers -->
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Nama
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Skala
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                        Kategori</th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Tanggal
                        Pelaksanaan</th>
                    <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">
                        Proposal</th>
                    <th class="relative px-6 py-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($dataKegiatan->sortByDesc('tgl_pelaksanaan') as $kegiatan)
                    <tr data-tgl_pelaksanaan="{{ $kegiatan->tgl_pelaksanaan }}" data-skala="{{ $kegiatan->skala }}"
                        data-kategori="{{ $kegiatan->kategori }}" data-proposal="{{ $kegiatan->proposal ? '1' : '0' }}"
                        class="kegiatan-row">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $kegiatan->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="@if ($kegiatan->skala === 'Lokal') bg-indigo-500 text-indigo-50 @elseif ($kegiatan->skala === 'Nasional') bg-red-500 text-red-50 @elseif ($kegiatan->skala === 'Internasional') bg-yellow-500 text-yellow-50 @endif ml-2 inline-block rounded px-2 py-1 text-xs font-semibold">{{ $kegiatan->skala }}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="@if ($kegiatan->kategori === 'Workshop') bg-green-500 text-green-50 @elseif ($kegiatan->kategori === 'Kompetisi') bg-blue-500 text-blue-50 @elseif ($kegiatan->kategori === 'Pameran') bg-orange-500 text-orange-50 @endif ml-2 inline-block rounded px-2 py-1 text-xs font-semibold">{{ $kegiatan->kategori }}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $kegiatan->tgl_pelaksanaan }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if ($kegiatan->proposal)
                                <a href="{{ $kegiatan->proposal }}"
                                    class="text-indigo-500 hover:text-indigo-600">Download</a>
                            @else
                                Belum tersedia
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            <a href="{{ route('kegiatan-detail', ['id' => $kegiatan->id]) }}"
                                class="text-indigo-500 hover:text-indigo-600">View Detail</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
