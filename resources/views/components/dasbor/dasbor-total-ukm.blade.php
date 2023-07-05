@php
    use App\Models\Ukm;
    $totalUkm = Ukm::count();
    
@endphp

<div
    class="flex flex-col bg-white border rounded-sm shadow-lg col-span-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 sm:col-span-6 xl:col-span-4">
    <div class="px-5 pt-5">
        <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
            <h2 class="font-semibold text-slate-800 dark:text-slate-100">Total UKM</h2>
            <div class="flex flex-col justify-center grow">
                <p>{{ $totalUkm }}</p>
            </div>
        </header>
        {{-- <div class="flex flex-col justify-center grow">
            <div>
                <canvas id="dasbor-ukm-aktif" width="389" height="260"></canvas>
            </div>
            <div id="dasbor-ukm-aktif-legend" class="px-5 pt-2 pb-6">
                <ul class="flex flex-wrap justify-center -m-1"></ul>
            </div> --}}
        </div>
    </div>
</div>
