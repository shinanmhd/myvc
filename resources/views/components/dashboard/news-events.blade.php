<div class="w-full flex flex-col gap-y-6 bg-white" x-data="{ activeTab: 2 }">

    <div class="flex flex-col w-full p-4">
        {{--header--}}
        <x-shared.card-header :title="'News, Events & Announcements'">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1.75C19.9999 1.53702 19.9454 1.32759 19.8416 1.14159C19.7378 0.9556 19.5882 0.799209 19.407 0.687261C19.2258 0.575313 19.019 0.511521 18.8062 0.501937C18.5935 0.492354 18.3818 0.537298 18.1912 0.632504L8.45375 5.5H3.75C2.75544 5.5 1.80161 5.89509 1.09835 6.59835C0.395088 7.30162 0 8.25544 0 9.25C0 10.2446 0.395088 11.1984 1.09835 11.9017C1.80161 12.6049 2.75544 13 3.75 13H4.1L6.31375 19.645C6.39669 19.894 6.5559 20.1106 6.76881 20.2641C6.98173 20.4175 7.23754 20.5001 7.5 20.5H8.75C9.08152 20.5 9.39946 20.3683 9.63388 20.1339C9.8683 19.8995 10 19.5815 10 19.25V13.7725L18.1912 17.8675C18.3818 17.9627 18.5935 18.0077 18.8062 17.9981C19.019 17.9885 19.2258 17.9247 19.407 17.8127C19.5882 17.7008 19.7378 17.5444 19.8416 17.3584C19.9454 17.1724 19.9999 16.963 20 16.75V1.75Z" fill="#717475"/>
            </svg>
        </x-shared.card-header>
    </div>

    <div class="flex flex-col w-full">
        {{--tab navigation--}}
        <div class="flex items-center justify-start">
            <ul class="flex items-center justify-start border-b-2 border-zinc-100 w-full text-sm">
                <li class="px-2 pb-2" :class="activeTab == 1 ? 'text-zinc-700 border-b-2 border-zinc-500' : 'text-zinc-400'">
                    <a x-on:click="activeTab = 1" class="hover:text-zinc-500 cursor-pointer">News</a>
                </li>
                <li class="px-2 pb-2" :class="activeTab == 2 ? 'text-zinc-700 border-b-2 border-zinc-500' : 'text-zinc-400'">
                    <a x-on:click="activeTab = 2" class="cursor-pointer">Events</a>
                </li>
                <li class="px-2 pb-2" :class="activeTab == 3 ? 'text-zinc-700 border-b-2 border-zinc-500' : 'text-zinc-400'">
                    <a x-on:click="activeTab = 3" class="hover:text-zinc-500 cursor-pointer">Announcements</a>
                </li>
            </ul>
        </div>

        {{--tab data--}}
        {{--news tab--}}
        <div class="flex flex-col w-full px-4 divide-y divide-zinc-100" x-cloak x-show="activeTab == 1">
            <div class="flex flex-col flex-grow text-sm py-3">
                <a href="#" class="font-semibold text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Moday 12th May 2024</h3>
            </div>
            <div class="flex flex-col flex-grow text-sm py-3">
                <a href="#" class="font-semibold text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Moday 12th May 2024</h3>
            </div>
            <div class="flex flex-col flex-grow text-sm py-3">
                <a href="#" class="font-semibold text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Moday 12th May 2024</h3>
            </div>
            <div class="flex flex-col flex-grow text-sm py-3">
                <a href="#" class="font-semibold text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Moday 12th May 2024</h3>
            </div>
        </div>

        {{--events tab--}}
        <div class="flex flex-col w-full px-4 divide-y divide-zinc-100" x-cloak x-show="activeTab == 2">
            <div class="py-4 flex items-center justify-start gap-x-4">
                <div class="flex flex-col items-center justify-center font-bold text-gray-600 text-sm">
                    <h3 class="">May</h3>
                    <h3 class="">12</h3>
                </div>
                <div class="flex flex-col flex-grow text-sm">
                    <h3 class="font-semibold text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                    <h3 class="font-light text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                </div>
            </div>
            <div class="py-4 flex items-center justify-start gap-x-4">
                <div class="flex flex-col items-center justify-center font-bold text-gray-600 text-sm">
                    <h3 class="">May</h3>
                    <h3 class="">12</h3>
                </div>
                <div class="flex flex-col flex-grow text-sm">
                    <h3 class="font-semibold text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                    <h3 class="font-light text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                </div>
            </div>
            <div class="py-4 flex items-center justify-start gap-x-4">
                <div class="flex flex-col items-center justify-center font-bold text-gray-600 text-sm">
                    <h3 class="">May</h3>
                    <h3 class="">12</h3>
                </div>
                <div class="flex flex-col flex-grow text-sm">
                    <h3 class="font-semibold text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                    <h3 class="font-light text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                </div>
            </div>
            <div class="py-4 flex items-center justify-start gap-x-4">
                <div class="flex flex-col items-center justify-center font-bold text-gray-600 text-sm">
                    <h3 class="">May</h3>
                    <h3 class="">12</h3>
                </div>
                <div class="flex flex-col flex-grow text-sm">
                    <h3 class="font-semibold text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                    <h3 class="font-light text-zinc-500">Guest Lecture: Dr.Moosa Mohamed</h3>
                </div>
            </div>
        </div>

        {{--announcements tab--}}
        <div class="flex flex-col w-full px-4 divide-y divide-zinc-100" x-cloak x-show="activeTab == 3">
            <div class="flex flex-col flex-grow text-sm py-3 gap-y-1">
                <a href="#" class="font-normal text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Moday 12th May 2024</h3>
            </div>
            <div class="flex flex-col flex-grow text-sm py-3 gap-y-1">
                <a href="#" class="font-normal text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Wednesday 14th May 2024</h3>
            </div>
            <div class="flex flex-col flex-grow text-sm py-3 gap-y-1">
                <a href="#" class="font-normal text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Sunday 18th May 2024</h3>
            </div>
            <div class="flex flex-col flex-grow text-sm py-3 gap-y-1">
                <a href="#" class="font-normal text-zinc-500 hover:underline">Villa College and Pulse Hotels Maldives have officially inked a Memorandum of Understanding</a>
                <h3 class="font-normal text-xs text-zinc-400">Moday 12th May 2024</h3>
            </div>
        </div>
    </div>

</div>
