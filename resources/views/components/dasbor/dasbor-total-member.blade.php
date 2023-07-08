@php
    use App\Models\Anggota;
    $totalAnggota = Anggota::count();
    
@endphp

{{-- <div
    class="flex flex-col bg-white border rounded-sm shadow-lg col-span-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 sm:col-span-6 xl:col-span-4">
    <div class="px-5 pt-5">
        <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
            <h2 class="font-semibold text-slate-800 dark:text-slate-100">Total mahasiswa yang mengikuti UKM</h2>
            <div class="flex flex-col justify-center grow">
                <p>{{ $totalAnggota }}</p>
            </div>
        </header>
    </div>
</div>

@php
    use App\Models\Ukm;
    $totalUkm = Ukm::count();
    
@endphp --}}

<div
    class="col-span-full flex flex-col rounded-sm border border-slate-200 bg-white shadow-lg dark:border-slate-700 dark:bg-slate-800 sm:col-span-6 xl:col-span-4">
    <div class="px-5 pt-5">
        <header class="border-b border-slate-100 px-5 py-4 dark:border-slate-700">
            <h2 class="font-semibold text-slate-800 dark:text-slate-100">Total Mahasiswa Yang Mengikuti UKM</h2>
        </header>
        <div class="flex grow flex-col justify-center p-5">
            <p>{{ $totalAnggota }}</p>
        </div>
    </div>
</div>
