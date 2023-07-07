<div
    class="col-span-full rounded-sm border border-slate-200 bg-white shadow-lg dark:border-slate-700 dark:bg-slate-800 xl:col-span-6">
    <header class="border-b border-slate-100 px-5 py-4 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Recent Aktivitas UKM</h2>
    </header>
    <div class="p-3">
        <!-- Card content -->
        @php
            use App\Models\Kegiatan;
            use App\Models\PartisipanKegiatan;
            use Carbon\Carbon;
            
            $today = Carbon::today();
            $lastWeek = Carbon::today()->subWeek();
            
            $kegiatansToday = Kegiatan::whereDate('tgl_pelaksanaan', $today)->get();
            $kegiatansLastWeek = Kegiatan::whereBetween('tgl_pelaksanaan', [$lastWeek, $today])
                ->whereDate('tgl_pelaksanaan', '!=', $today)
                ->get();
            
            $kegiatansTodayIds = $kegiatansToday->pluck('id');
            $kegiatansLastWeekIds = $kegiatansLastWeek->pluck('id');
            
            $partisipansToday = PartisipanKegiatan::whereIn('kegiatan_id', $kegiatansTodayIds)->get();
            $partisipansLastWeek = PartisipanKegiatan::whereIn('kegiatan_id', $kegiatansLastWeekIds)->get();
        @endphp

        <!-- "Today" group -->
        <div>
            <header
                class="rounded-sm bg-slate-50 p-2 text-xs font-semibold uppercase text-slate-400 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-500">
                Today</header>
            <ul class="my-1">
                @forelse ($kegiatansToday as $kegiatan)
                    <!-- Item -->
                    <li class="flex px-2">
                        <div class="flex grow items-center border-b border-slate-100 py-2 text-sm dark:border-slate-700">
                            <div class="flex grow justify-between">
                                <div class="self-center">
                                    <a class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                        href="#0">
                                        {{ $kegiatan->nama }}
                                    </a>
                                    <span
                                        class="@if ($kegiatan->skala === 'Lokal') bg-indigo-500 text-indigo-50
                                        @elseif ($kegiatan->skala === 'Nasional')
                                            bg-red-500 text-red-50
                                        @elseif ($kegiatan->skala === 'Internasional')
                                            bg-yellow-500 text-yellow-50 @endif ml-2 inline-block rounded px-2 py-1 text-xs font-semibold dark:bg-opacity-75 dark:bg-opacity-50">
                                        {{ $kegiatan->skala }}
                                    </span>
                                    <span
                                        class="@if ($kegiatan->kategori === 'Workshop') bg-green-500 text-green-50
                                        @elseif ($kegiatan->kategori === 'Kompetisi')
                                            bg-blue-500 text-blue-50
                                        @elseif ($kegiatan->kategori === 'Pameran')
                                            bg-orange-500 text-orange-50 @endif ml-2 inline-block rounded px-2 py-1 text-xs font-semibold dark:bg-opacity-75 dark:bg-opacity-50">
                                        {{ $kegiatan->kategori }}
                                    </span>
                                </div>
                                <div class="ml-2 shrink-0 self-end">
                                    <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                        href="#0">
                                        View<span class="hidden sm:inline"> -&gt;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="flex px-2">
                        <div class="flex grow items-center py-2 text-sm">
                            <div class="self-center text-slate-800 dark:text-slate-100">No kegiatan scheduled for today
                            </div>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>

        <!-- "Last Week" group -->
        <div>
            <header
                class="rounded-sm bg-slate-50 p-2 text-xs font-semibold uppercase text-slate-400 dark:bg-slate-700 dark:bg-opacity-50 dark:text-slate-500">
                Last Week</header>
            <ul class="my-1">
                @forelse ($kegiatansLastWeek as $kegiatan)
                    <!-- Item -->
                    <li class="flex px-2">
                        <div
                            class="flex grow items-center border-b border-slate-100 py-2 text-sm dark:border-slate-700">
                            <div class="flex grow justify-between">
                                <div class="self-center">
                                    <a class="font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white"
                                        href="#0">
                                        {{ $kegiatan->nama }}
                                    </a>
                                    <span
                                        class="@if ($kegiatan->skala === 'Lokal') bg-indigo-500 text-indigo-50
                                        @elseif ($kegiatan->skala === 'Nasional')
                                            bg-red-500 text-red-50
                                        @elseif ($kegiatan->skala === 'Internasional')
                                            bg-yellow-500 text-yellow-50 @endif ml-2 inline-block rounded px-2 py-1 text-xs font-semibold dark:bg-opacity-75 dark:bg-opacity-50">
                                        {{ $kegiatan->skala }}
                                    </span>
                                    <span
                                        class="@if ($kegiatan->kategori === 'Workshop') bg-green-500 text-green-50
                                        @elseif ($kegiatan->kategori === 'Kompetisi')
                                            bg-blue-500 text-blue-50
                                        @elseif ($kegiatan->kategori === 'Pameran')
                                            bg-orange-500 text-orange-50 @endif ml-2 inline-block rounded px-2 py-1 text-xs font-semibold dark:bg-opacity-75 dark:bg-opacity-50">
                                        {{ $kegiatan->kategori }}
                                    </span>
                                </div>
                                <div class="ml-2 shrink-0 self-end">
                                    <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                                        href="#0">
                                        View<span class="hidden sm:inline"> -&gt;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="flex px-2">
                        <div class="flex grow items-center py-2 text-sm">
                            <div class="self-center text-slate-800 dark:text-slate-100">No kegiatan scheduled for last
                                week</div>
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
