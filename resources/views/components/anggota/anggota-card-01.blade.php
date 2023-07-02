<!-- Include the necessary Blade directives at the top of the file -->
@php
    use App\Models\Anggota;
    use App\Models\Ukm;
    $random = Ukm::inRandomOrder()->first()->id;
    $members = Anggota::with('ukm')
        ->where('ukm_id', $random)
    ->get(); @endphp

<div
    class="col-span-full rounded-sm border border-slate-200 bg-white shadow-lg dark:border-slate-700 dark:bg-slate-800 xl:col-span-6">
    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <!-- Table header -->
            <thead
                class="bg-slate-50 text-center text-xs font-semibold uppercase text-slate-700 dark:bg-slate-800 dark:bg-opacity-50 dark:text-slate-500">
                <tr>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-center font-bold">No</div>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-left font-bold">Posisi</div>
                    </th>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-left font-semibold">Nama Anggota</div>
                    </th>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-left font-semibold">Masa Jabatan</div>
                    </th>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-center font-semibold">No Telepon</div>
                    </th>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-center font-semibold">
                            Angkatan
                        </div>
                    </th>
                    <th class="whitespace-nowrap p-2">
                        <div class="text-center font-semibold">Email</div>
                    </th>
                </tr>
            </thead>
            <!-- ...existing HTML code... -->
            <tbody class="divide-y divide-slate-100 text-sm dark:divide-slate-700">
                @foreach ($members as $index => $member)
                    <tr>
                        <td class="whitespace-nowrap p-2">
                            <div class="text-center">{{ $index + 1 }}</div>
                        <td class="whitespace-nowrap p-2">
                            <div class="flex items-center">
                                <div class="mr-2 h-10 w-10 shrink-0 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40"
                                        height="40" alt="Alex Shatov" />
                                </div>
                                <div class="font-medium text-slate-800">
                                    {{ $member->posisi }}
                                </div>
                            </div>
                        </td>
                        <td class="whitespace-nowrap p-2">
                            <div class="text-left">{{ $member->nama }}</div>
                        </td>
                        <td class="whitespace-nowrap p-2">
                            <div class="text-left">{{ $member->masa_jabatan }}</div>
                        </td>
                        <td class="whitespace-nowrap p-2">
                            <div class="text-md text-center">
                                {{ $member->no_telepon }}
                            </div>
                        </td>
                        <td class="whitespace-nowrap p-2">
                            <div class="text-center text-sm">
                                {{ $member->angkatan }}
                            </div>
                        </td>
                        <td class="whitespace-nowrap p-2">
                            <div class="text-center text-sm">
                                {{ $member->email }}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
