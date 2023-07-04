<x-app-layout>

    <div>
        <!-- Doughnut chart (Top Countries) -->
        <x-dashboard.dashboard-card-06 />

        <!-- Dougnut chart (Top Angkatan) -->
        <x-dasbor.dasbor-angkatan />
    </div>

    <div>tes</div>
    @if (session()->has('key'))
        <div>
            <!-- Content to display when session exists -->
            <p>Session exists!</p>
        </div>
    @endif
    @unless (session()->has('key'))
        <div>
            <!-- Content to display when session doesn't exist -->
            <p>Session doesn't exist!</p>
        </div>
    @endunless


</x-app-layout>
