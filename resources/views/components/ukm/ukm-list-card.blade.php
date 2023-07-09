<div
    class="bg-white border rounded-sm shadow-lg col-span-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 xl:col-span-6">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">UKM List</h2>
    </header>
    <div class="p-3">
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <!-- Table header -->
                <thead
                    class="text-xs font-semibold uppercase bg-slate-50 text-slate-400 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-500">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Name</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Deskripsi</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Ketua</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Jumlah Anggota</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Pengeluaran Periode Ini</div>
                        </th>
                        <th class="p-2 whitespace-wrap">
                            <div class="font-semibold text-center text-ellipsis">Kegiatan yang Dilaksanakan Periode Ini
                            </div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                @php
                    
                @endphp
                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                    
                    @foreach ($ukmList as $ukm)
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 mr-2 shrink-0 sm:mr-3">
                                        <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}"
                                            width="40" height="40" alt="{{ $ukm['name'] }}" />
                                    </div>
                                    <div class="font-medium text-slate-800">{{ $ukm['name'] }}</div>
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $ukm['deskripsi'] }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{ $ukm['ketua'] }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-center">{{ $ukm['total_anggota'] }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-center">Rp.
                                    {{ number_format($ukm['pengeluaran_periode_ini'], 0, ',', '.') }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-center">{{ $ukm['kegiatan_periode_ini'] }}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="self-end ml-2 shrink-0">
                                    <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                        href="{{ route('ukm-dasbor', ['id' => $ukm['id']]) }}">
                                        View<span class="hidden sm:inline"> -&gt;</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
