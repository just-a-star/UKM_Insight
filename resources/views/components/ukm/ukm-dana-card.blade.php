<div
    class="bg-white border rounded-sm shadow-lg col-span-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 xl:col-span-6">
    {{-- <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Riwayat Keuangan UKM </h2>
    </header> --}}
    <div class="p-3">
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <!-- Table header -->
                <thead
                    class="text-xs font-semibold uppercase bg-slate-50 text-slate-400 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-500">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">No</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Nama Asset</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Deskripsi</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Dana</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Waktu Transaksi</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Tipe Transaksi</div>
                        </th>

                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                    @foreach ($danaList as $index => $dana)
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $index + 1 }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $dana->nama }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $dana->deskripsi }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">Rp {{ number_format($dana->dana, 0, ',', '.') }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $dana->waktu_transaksi }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $dana->tipe_transaksi }}</div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
