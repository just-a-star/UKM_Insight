<div
    class="flex flex-col bg-white border rounded-sm shadow-lg col-span-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 sm:col-span-6 xl:col-span-4">
    <div class="px-5 pt-5">
        <header class="flex items-start justify-between mb-2">
            <!-- Icon -->
            <img src="{{ asset('images/icon-01.svg') }}" width="32" height="32" alt="Icon 01" />
            <!-- Menu button -->
            <div class="relative inline-flex" x-data="{ open: false }">
                <button class="rounded-full"
                    :class="open ? 'bg-slate-100 dark:bg-slate-700 text-slate-500 dark:text-slate-400' :
                        'text-slate-400 hover:text-slate-500 dark:text-slate-500 dark:hover:text-slate-400'"
                    aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                    <span class="sr-only">Menu</span>
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                        <circle cx="16" cy="16" r="2" />
                        <circle cx="10" cy="16" r="2" />
                        <circle cx="22" cy="16" r="2" />
                    </svg>
                </button>
                <div class="min-w-36 absolute top-full right-0 z-10 mt-1 origin-top-right overflow-hidden rounded border border-slate-200 bg-white py-1.5 shadow-lg dark:border-slate-700 dark:bg-slate-800"
                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" x-cloak>
                    <ul>
                        <li>
                            <a class="flex px-3 py-1 text-sm font-medium text-slate-600 hover:text-slate-800 dark:text-slate-300 dark:hover:text-slate-200"
                                href="#0" @click="open = false" @focus="open = true"
                                @focusout="open = false">Option 1</a>
                        </li>
                        <li>
                            <a class="flex px-3 py-1 text-sm font-medium text-slate-600 hover:text-slate-800 dark:text-slate-300 dark:hover:text-slate-200"
                                href="#0" @click="open = false" @focus="open = true"
                                @focusout="open = false">Option 2</a>
                        </li>
                        <li>
                            <a class="flex px-3 py-1 text-sm font-medium text-rose-500 hover:text-rose-600"
                                href="#0" @click="open = false" @focus="open = true"
                                @focusout="open = false">Remove</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <h2 class="mb-2 text-lg font-semibold text-slate-800 dark:text-slate-100">Acme Plus</h2>
        <div class="mb-1 text-xs font-semibold uppercase text-slate-400 dark:text-slate-500">Sales</div>
        <div class="flex items-start">
            <div class="mr-2 text-3xl font-bold text-slate-800 dark:text-slate-100">
                ${{ number_format($dataFeed->sumDataSet(1, 1), 0) }}</div>
            <div class="rounded-full bg-emerald-500 px-1.5 text-sm font-semibold text-white">+49%</div>
        </div>
    </div>
    <!-- Chart built with Chart.js 3 -->
    <!-- Check out src/js/components/dashboard-card-01.js for config -->
    <div class="grow max-sm:max-h-[128px] xl:max-h-[128px]">
        <!-- Change the height attribute to adjust the chart height -->
        <canvas id="dashboard-card-01" width="389" height="128"></canvas>
    </div>
</div>
