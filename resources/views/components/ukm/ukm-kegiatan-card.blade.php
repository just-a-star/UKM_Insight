<div
    class="col-span-full rounded-sm border border-slate-200 bg-white shadow-lg dark:border-slate-700 dark:bg-slate-800 xl:col-span-8">
    <header class="border-b border-slate-100 px-5 py-4 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Kegiatan periode ini</h2>
    </header>
    <div class="p-3">
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto dark:text-slate-300">
                <!-- Table header -->
                <thead
                    class="rounded-sm bg-slate-50 text-xs uppercase text-slate-400 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-500">
                    <tr>
                        <th class="p-2">
                            <div class="text-left font-semibold">Nama Kegiatan</div>
                        </th>
                        <th class="p-2">
                            <div class="text-center font-semibold">Tgl Pelaksanaan</div>
                        </th>
                        <th class="p-2">
                            <div class="text-center font-semibold">Rating Feedback</div>
                        </th>
                        <th class="p-2">
                            <div class="text-center font-semibold">Penanggung Jawab</div>
                        </th>
                        <th class="p-2">
                            <div class="text-center font-semibold">Pengeluaran</div>
                        </th>
                        <th class="p-2">
                            <div class="text-center font-semibold">Pemasukan</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="divide-y divide-slate-100 text-sm font-medium dark:divide-slate-700">
                    @foreach ($dataKegiatan as $item)
                        <tr>
                            <td class="p-2">
                                <div class="flex items-center">
                                    {{-- @php
                                        $faker = Faker\Factory::create();
                                        $logoName = $faker->unique()->word . '.png';
                                        $logoPath = public_path('storages/logos/' . $logoName);
                                        $logoUrl = asset('storages/logos/' . $logoName);
                                        $faker->image(null, 36, 36, 'business', false, true, $logoPath);
                                    @endphp
                                    <img class="mr-2 shrink-0 sm:mr-3" src="{{ $logoUrl }}" alt="Logo"> --}}

                                    <div class="text-slate-800 dark:text-slate-100">{{ $item['nama_kegiatan'] }}</div>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{ $item['tanggal_pelaksanaan'] }}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center"
                                    style="background-color: {{ $item['rating_feedback'] >= 50 ? 'green' : 'red' }}; color: white;">
                                    {{ $item['rating_feedback'] }}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">
                                    {{ count($item['penanggung_jawab']) > 0 ? implode(', ', $item['penanggung_jawab']) : 'Belum ada' }}
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">
                                    {{ $item['dana_kegiatan'] > 0 ? $item['dana_kegiatan'] : 'Tidak ada' }}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">
                                    {{ $item['pendapatan'] > 0 ? $item['pendapatan'] : 'Tidak ada' }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
