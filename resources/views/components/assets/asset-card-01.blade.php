@php
    use App\Models\Asset;
    $assets = Asset::with('ukm')->where('ukm_id', 1)->get();
@endphp

<div
    class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Asset</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <!-- Table header -->
                <thead
                    class="text-xs font-semibold uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                <tr>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">No</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Nama Asset</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Deksripsi</div>
                    </th>

                </tr>
                </thead>
                <!-- Table body -->

                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                @foreach($assets as $asset)
                <tr>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left">{{$loop->iteration}}</div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left">{{$asset['nama']}}</div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left">{{$asset['deskripsi']}}</div>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
