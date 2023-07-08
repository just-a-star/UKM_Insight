<x-app-layout>
    <div class="mx-auto w-full max-w-9xl px-4 py-8 sm:px-6 lg:px-8">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="mb-8 sm:flex sm:items-center sm:justify-between">

            <!-- Left: Avatars -->
            <x-dashboard.dashboard-avatars />

            <!-- Right: Actions -->
            <div class="grid grid-flow-col justify-start gap-2 sm:auto-cols-max sm:justify-end">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                <!-- Datepicker built with flatpickr -->
                <x-datepicker />

                <!-- Add view button -->
                <button class="btn bg-indigo-500 text-white hover:bg-indigo-600">
                    <svg class="h-4 w-4 shrink-0 fill-current opacity-50" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="ml-2 hidden xs:block">Add View</span>
                </button>

            </div>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-2 gap-6">

            {{-- {{ dd($ukms) }} --}}

            <x-ukm.ukm-list-card :ukmList="$ukmList" />

            {{-- {{ dd($ukms) }} --}}


            {{-- <!-- Line chart (Acme Plus) -->

            

            {{-- <!-- Line chart (Acme Plus) -->
            {{-- <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" /> --}}

            <!-- Line chart (Acme Advanced) -->
            {{-- <x-dashboard.dashboard-card-02 :dataFeed="$dataFeed" /> --}}

            <!-- Line chart (Acme Professional) -->
            {{-- <x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" />

            <!-- Bar chart (Direct vs Indirect) -->
            <x-dashboard.dashboard-card-04 />

            <!-- Line chart (Real Time Value) -->
            <x-dashboard.dashboard-card-05 />

            <!-- Doughnut chart (Top Countries) -->
            <x-dashboard.dashboard-card-06 />

            <!-- Table (Top Channels) -->
            <x-dashboard.dashboard-card-07 />

            <!-- Line chart (Sales Over Time)  -->
            <x-dashboard.dashboard-card-08 />

            <!-- Stacked bar chart (Sales VS Refunds) -->
            <x-dashboard.dashboard-card-09 />

            <!-- Card (Customers)  -->
            <x-dashboard.dashboard-card-10 />

            <!-- Card (Reasons for Refunds)   -->
            <x-dashboard.dashboard-card-11 />

            <!-- Card (Recent Activity) -->
            <x-dashboard.dashboard-card-12 />

            <!-- Card (Income/Expenses) -->
            <x-dashboard.dashboard-card-13 /> --}}

        </div>

    </div>
</x-app-layout>
