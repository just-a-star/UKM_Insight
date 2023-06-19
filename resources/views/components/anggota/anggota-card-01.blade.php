<!-- Include the necessary Blade directives at the top of the file -->
@php
    use App\Models\Anggota;
    use App\Models\Ukm;
        $random =Ukm::inRandomOrder()->first()->id;
    $members = Anggota::with('ukm')->where('ukm_id', $random)->get();
@endphp

<div class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <!-- ...existing HTML code... -->
    <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
        @foreach($members as $member)
        <tr>
            <td class="p-2 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                        <img class="rounded-full" src="{{ asset('images/user-36-05.jpg') }}" width="40" height="40" alt="Alex Shatov" />
                    </div>
                    <div class="font-medium text-slate-800">{{ $member->nama }}</div>
                </div>
            </td>
            <td class="p-2 whitespace-nowrap">
                <div class="text-left">{{ $member->email }}</div>
            </td>
            <td class="p-2 whitespace-nowrap">
                <div class="text-left">{{ $member->masa_jabatan }}</div>
            </td>
            <td class="p-2 whitespace-nowrap">
                <div class="text-md text-center">{{ $member->posisi }}</div>
            </td>
            <td class="p-2 whitespace-nowrap">
                <div class="text-sm text-center">{{ $member->no_telepon }}</div>
            </td>
            <td class="p-2 whitespace-nowrap">
                <div class="text-sm text-center">{{ $member->angkatan }}</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
