{{-- <div
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
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Kegiatan yang Dilaksanakan Periode Ini</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                    @php
                        $ukmList = $attributes['ukmList'];
                    @endphp
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
<!-- resources/views/components/ukm/ukm-list-card.blade.php -->
<div
    class="col-span-full rounded-sm border border-slate-200 bg-white shadow-lg dark:border-slate-700 dark:bg-slate-800 xl:col-span-6">
    <header class="border-b border-slate-100 px-5 py-4 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">UKM List</h2>
    </header>
    <div class="p-3">
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <!-- Table header -->
                <thead
                    class="bg-slate-50 text-xs font-semibold uppercase text-slate-400 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-500">
                    <tr>
                        <th class="whitespace-nowrap p-2">
                            <div class="text-left font-semibold">Name</div>
                        </th>
                        <th class="whitespace-nowrap p-2">
                            <div class="text-left font-semibold">Deskripsi</div>
                        </th>
                        <th class="whitespace-nowrap p-2">
                            <div class="text-left font-semibold">Ketua</div>
                        </th>
                        <th class="whitespace-nowrap p-2">
                            <div class="text-center font-semibold">Jumlah Anggota</div>
                        </th>
                        <th class="whitespace-nowrap p-2">
                            <div class="text-center font-semibold">Pengeluaran Periode Ini</div>
                        </th>
                        <th class="whitespace-nowrap p-2">
                            <div class="text-center font-semibold">Kegiatan yang Dilaksanakan Periode Ini</div>
                        </th>
                    </tr>
                </thead>
                @php
                    $ukmList = $attributes['ukmList'];
                @endphp
                <!-- Table body -->
                <tbody class="divide-y divide-slate-100 text-sm dark:divide-slate-700">
                    @foreach ($ukmList as $ukm)
                        <tr>
                            <td class="whitespace-nowrap p-2">
                                <div class="flex items-center">
                                    <div class="mr-2 h-10 w-10 shrink-0 sm:mr-3">
                                        <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}"
                                            width="40" height="40" alt="{{ $ukm['name'] }}" />
                                    </div>
                                    <div class="font-medium text-slate-800">{{ $ukm['name'] }}</div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap p-2">
                                <div class="text-left">{{ $ukm['deskripsi'] }}</div>
                            </td>
                            <td class="whitespace-nowrap p-2">
                                <div class="text-left">{{ $ukm['ketua'] }}</div>
                            </td>
                            <td class="whitespace-nowrap p-2">
                                <div class="text-center">{{ $ukm['total_anggota'] }}</div>
                            </td>
                            <td class="whitespace-nowrap p-2">
                                <div class="text-center">Rp.
                                    {{ number_format($ukm['pengeluaran_periode_ini'], 0, ',', '.') }}</div>
                            </td>
                            <td class="whitespace-nowrap p-2">
                                <div class="text-center">{{ $ukm['kegiatan_periode_ini'] }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
