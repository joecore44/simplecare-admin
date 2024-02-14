<div>
    <div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">

        <!-- Welcome banner -->
        <livewire:dashboard.banner />

        <!-- Dashboard actions -->
        <div class="mb-8 sm:flex sm:justify-between sm:items-center">


            <!-- Left: Avatars -->
            <livewire:dashboard.avatar-cluster />

            <!-- Right: Actions -->
            <div class="grid justify-start grid-flow-col gap-2 sm:auto-cols-max sm:justify-end">

                <!-- Hours worked component -->
                <livewire:dashboard.hours-worked />

                <!-- View timeclock -->
                <button class="text-white bg-orange-500 btn hover:bg-orange-600">

                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>

                    <span class="hidden ml-2 xs:block">View Time</span>
                </button>

            </div>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Current patients component -->
            <livewire:dashboard.current-patients-card :dataFeed="$dataFeed">

            <!-- Current open orders component -->
            <livewire:dashboard.current-orders-card :dataFeed="$dataFeed" />

            <!-- Current support tickets -->
            <livewire:dashboard.current-support-tickets :dataFeed="$dataFeed" />

            <!-- Active Website Card -->
            <livewire:dashboard.active-website-card :site="$site"/>

            <!-- Card (Leads)  -->
            <livewire:dashboard.leads-table-card :leads="$leads" />

            <!-- Line chart (Real Time Value) -->
            {{-- <x-dashboard.dashboard-card-05 /> --}}

            <!-- Doughnut chart (Top Countries) -->
            {{-- <x-dashboard.dashboard-card-06 /> --}}

            <!-- Table (Top Channels) -->
            {{-- <x-dashboard.dashboard-card-07 /> --}}

            <!-- Line chart (Sales Over Time)  -->
            {{-- <x-dashboard.dashboard-card-08 /> --}}

            <!-- Stacked bar chart (Sales VS Refunds) -->
            {{-- <x-dashboard.dashboard-card-09 /> --}}

            <!-- Card (Customers)  -->
            {{-- <x-dashboard.dashboard-card-10 /> --}}

            <!-- Card (Reasons for Refunds)   -->
            {{-- <x-dashboard.dashboard-card-11 /> --}}

            <!-- Card (Recent Activity) -->
            {{-- <x-dashboard.dashboard-card-12 /> --}}

            <!-- Card (Income/Expenses) -->
            {{-- <x-dashboard.dashboard-card-13 /> --}}

        </div>

    </div>
</div>
