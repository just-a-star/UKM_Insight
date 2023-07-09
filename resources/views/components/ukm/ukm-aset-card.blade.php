<div class="bg-white border rounded-sm shadow-lg col-span-full xl:col-span-6 dark:bg-slate-800 border-slate-200 dark:border-slate-700">
    {{-- <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Asset</h2>
    </header> --}}
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
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
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                    @foreach($assetList as $index => $asset)
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ $index + 1 }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ $asset->nama }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ $asset->deskripsi }}</div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
