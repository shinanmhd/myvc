<x-app-layout>
    <x-slot name="page_heading">
        Dashboard
    </x-slot>

    <div class="w-full mx-auto p-4">
        <div class="grid grid-cols-12 gap-4">

            <div class="flex flex-col col-span-6 gap-y-4">
                {{-- dashboard profile card --}}
                <x-dashboard.profile />

                {{-- my classmates --}}
                <x-dashboard.classmates />
            </div>

            {{-- performace card --}}
            <x-dashboard.performance />

            {{-- right sidebar --}}
            <div class="col-span-3 row-span-3 flex flex-col gap-y-4">

                {{--calendar--}}
                <x-dashboard.calendar />

                {{--news, events & announcements--}}
                <x-dashboard.news-events />

            </div>

            {{--modules--}}
            <div class="col-span-9 flex flex-col gap-y-2">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold text-zinc-500">
                        My Course Modules
                    </h2>
                    <div class=""><></div>
                </div>

                {{--courses--}}
                <div class="grid grid-cols-3 gap-4">
                    @for($i = 0; $i < 3; $i++)
                        <x-dashboard.course-card />
                    @endfor
                </div>
            </div>

            {{-- other cards (payment, jobs, help) --}}
            <div class="col-span-9 grid grid-cols-3 gap-4">

                {{-- Payment --}}
                <x-dashboard.payments />

                {{--latest jobs--}}
                <x-dashboard.jobs />

                {{--Help Guides--}}
                <x-dashboard.help />
            </div>

        </div>
    </div>

</x-app-layout>
