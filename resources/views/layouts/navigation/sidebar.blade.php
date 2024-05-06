<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div class="relative z-50" role="dialog" aria-modal="true" :class="sidebar ? 'block lg:hidden' : 'hidden lg:hidden'" x-cloak>
    <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-900/80"></div>

    <div class="fixed inset-0 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative mr-16 flex w-full max-w-xs flex-1">
            <!--
              Close button, show/hide based on off-canvas menu state.

              Entering: "ease-in-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "ease-in-out duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                <button type="button" class="-m-2.5 p-2.5" x-on:click="sidebar = false">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center mt-6">
                    <img class="h-12 w-auto" src="{{ asset('images/layout/logo.png') }}" alt="MyVC">
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <!-- Current: "bg-gray-50 text-blue-600", Default: "text-gray-700 hover:text-blue-600 hover:bg-gray-50" -->
                                    <a href="#" class="bg-gray-50 text-blue-600 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                        </svg>
                                        Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                        </svg>
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                                        </svg>
                                        Documents
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                        </svg>
                                        Reports
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                            <ul role="list" class="-mx-2 mt-2 space-y-1">
                                <li>
                                    <!-- Current: "bg-gray-50 text-blue-600", Default: "text-gray-700 hover:text-blue-600 hover:bg-gray-50" -->
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border text-[0.625rem] font-medium bg-white text-gray-400 border-gray-200 group-hover:border-blue-600 group-hover:text-blue-600">H</span>
                                        <span class="truncate">Heroicons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border text-[0.625rem] font-medium bg-white text-gray-400 border-gray-200 group-hover:border-blue-600 group-hover:text-blue-600">T</span>
                                        <span class="truncate">Tailwind Labs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border text-[0.625rem] font-medium bg-white text-gray-400 border-gray-200 group-hover:border-blue-600 group-hover:text-blue-600">W</span>
                                        <span class="truncate">Workcation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="mt-auto">
                            <a href="#" class="group -mx-2 flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-blue-600">
                                <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Settings
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
        <a href="{{ route('dashboard') }}" wire:navigate class="flex h-16 shrink-0 items-center mt-4">
            <img class="h-12 w-auto" src="{{ asset('images/layout/logo.png') }}" alt="Your Company">
        </a>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <ul role="list" class="-ml-6 mr-4 space-y-1">
                        <li>
                            <!-- Current: "bg-gray-50 text-blue-600", Default: "text-gray-700 hover:text-blue-600 hover:bg-gray-50" -->
                            <a href="{{ route('dashboard') }}" wire:navigate
                               class="pl-6 group flex items-center gap-x-3 rounded-r-full p-2 text-sm leading-6 font-semibold cursor-pointer {{ \Request::route()->getName() === 'dashboard' ? 'bg-slate-100 text-blue-600' : 'text-gray-400 hover:text-blue-600 hover:bg-gray-50' }}">
                                <svg class="w-5 h-5" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 4.625C2 3.92881 2.27656 3.26113 2.76884 2.76884C3.26113 2.27656 3.92881 2 4.625 2H7.25C7.94619 2 8.61387 2.27656 9.10615 2.76884C9.59844 3.26113 9.875 3.92881 9.875 4.625V7.25C9.875 7.94619 9.59844 8.61387 9.10615 9.10615C8.61387 9.59844 7.94619 9.875 7.25 9.875H4.625C3.92881 9.875 3.26113 9.59844 2.76884 9.10615C2.27656 8.61387 2 7.94619 2 7.25V4.625ZM15.125 4.625C15.125 3.92881 15.4016 3.26113 15.8938 2.76884C16.3861 2.27656 17.0538 2 17.75 2H20.375C21.0712 2 21.7389 2.27656 22.2312 2.76884C22.7234 3.26113 23 3.92881 23 4.625V7.25C23 7.94619 22.7234 8.61387 22.2312 9.10615C21.7389 9.59844 21.0712 9.875 20.375 9.875H17.75C17.0538 9.875 16.3861 9.59844 15.8938 9.10615C15.4016 8.61387 15.125 7.94619 15.125 7.25V4.625ZM2 17.75C2 17.0538 2.27656 16.3861 2.76884 15.8938C3.26113 15.4016 3.92881 15.125 4.625 15.125H7.25C7.94619 15.125 8.61387 15.4016 9.10615 15.8938C9.59844 16.3861 9.875 17.0538 9.875 17.75V20.375C9.875 21.0712 9.59844 21.7389 9.10615 22.2312C8.61387 22.7234 7.94619 23 7.25 23H4.625C3.92881 23 3.26113 22.7234 2.76884 22.2312C2.27656 21.7389 2 21.0712 2 20.375V17.75ZM15.125 17.75C15.125 17.0538 15.4016 16.3861 15.8938 15.8938C16.3861 15.4016 17.0538 15.125 17.75 15.125H20.375C21.0712 15.125 21.7389 15.4016 22.2312 15.8938C22.7234 16.3861 23 17.0538 23 17.75V20.375C23 21.0712 22.7234 21.7389 22.2312 22.2312C21.7389 22.7234 21.0712 23 20.375 23H17.75C17.0538 23 16.3861 22.7234 15.8938 22.2312C15.4016 21.7389 15.125 21.0712 15.125 20.375V17.75Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" wire:navigate
                               class="pl-6 group flex items-center gap-x-3 rounded-r-full p-2 text-sm leading-6 font-semibold cursor-pointer {{ \Request::route()->getName() === 'profile.edit' ? 'bg-slate-100 text-blue-600' : 'text-gray-400 hover:text-blue-600 hover:bg-gray-50' }}">
                                <svg class="h-5 w-5 shrink-0 group-hover:text-blue-600" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10C20 12.6522 18.9464 15.1957 17.0711 17.0711C15.1957 18.9464 12.6522 20 10 20C7.34784 20 4.8043 18.9464 2.92893 17.0711C1.05357 15.1957 0 12.6522 0 10C0 7.34784 1.05357 4.8043 2.92893 2.92893C4.8043 1.05357 7.34784 0 10 0C12.6522 0 15.1957 1.05357 17.0711 2.92893C18.9464 4.8043 20 7.34784 20 10ZM12.5 6.25C12.5 6.91304 12.2366 7.54893 11.7678 8.01777C11.2989 8.48661 10.663 8.75 10 8.75C9.33696 8.75 8.70107 8.48661 8.23223 8.01777C7.76339 7.54893 7.5 6.91304 7.5 6.25C7.5 5.58696 7.76339 4.95107 8.23223 4.48223C8.70107 4.01339 9.33696 3.75 10 3.75C10.663 3.75 11.2989 4.01339 11.7678 4.48223C12.2366 4.95107 12.5 5.58696 12.5 6.25ZM10 11.25C8.80325 11.2498 7.6316 11.5931 6.62427 12.2393C5.61694 12.8854 4.8163 13.8072 4.3175 14.895C5.02085 15.7133 5.89284 16.3697 6.87368 16.8193C7.85452 17.269 8.92101 17.5012 10 17.5C11.079 17.5012 12.1455 17.269 13.1263 16.8193C14.1072 16.3697 14.9792 15.7133 15.6825 14.895C15.1837 13.8072 14.3831 12.8854 13.3757 12.2393C12.3684 11.5931 11.1967 11.2498 10 11.25Z" fill="currentColor"/>
                                </svg>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('timetable') }}"
                               class="pl-6 group flex items-center gap-x-3 rounded-r-full p-2 text-sm leading-6 font-semibold cursor-pointer {{ \Request::route()->getName() === 'timetable' ? 'bg-slate-100 text-blue-600' : 'text-gray-400 hover:text-blue-600 hover:bg-gray-50' }}">
                                <svg class="h-5 w-5 shrink-0 group-hover:text-blue-600" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 0C4.66848 0 4.35054 0.138281 4.11612 0.384422C3.8817 0.630564 3.75 0.964403 3.75 1.3125V2.625H2.5C1.83696 2.625 1.20107 2.90156 0.732233 3.39384C0.263392 3.88613 0 4.55381 0 5.25V18.375C0 19.0712 0.263392 19.7389 0.732233 20.2312C1.20107 20.7234 1.83696 21 2.5 21H17.5C18.163 21 18.7989 20.7234 19.2678 20.2312C19.7366 19.7389 20 19.0712 20 18.375V5.25C20 4.55381 19.7366 3.88613 19.2678 3.39384C18.7989 2.90156 18.163 2.625 17.5 2.625H16.25V1.3125C16.25 0.964403 16.1183 0.630564 15.8839 0.384422C15.6495 0.138281 15.3315 0 15 0C14.6685 0 14.3505 0.138281 14.1161 0.384422C13.8817 0.630564 13.75 0.964403 13.75 1.3125V2.625H6.25V1.3125C6.25 0.964403 6.1183 0.630564 5.88388 0.384422C5.64946 0.138281 5.33152 0 5 0ZM5 6.5625C4.66848 6.5625 4.35054 6.70078 4.11612 6.94692C3.8817 7.19306 3.75 7.5269 3.75 7.875C3.75 8.2231 3.8817 8.55694 4.11612 8.80308C4.35054 9.04922 4.66848 9.1875 5 9.1875H15C15.3315 9.1875 15.6495 9.04922 15.8839 8.80308C16.1183 8.55694 16.25 8.2231 16.25 7.875C16.25 7.5269 16.1183 7.19306 15.8839 6.94692C15.6495 6.70078 15.3315 6.5625 15 6.5625H5Z" fill="currentColor"/>
                                </svg>
                                Timetable
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('marks') }}" wire:navigate
                               class="pl-6 group flex items-center gap-x-3 rounded-r-full p-2 text-sm leading-6 font-semibold cursor-pointer {{ \Request::route()->getName() === 'marks' ? 'bg-slate-100 text-blue-600' : 'text-gray-400 hover:text-blue-600 hover:bg-gray-50' }}">
                                <svg class="h-6 w-6 shrink-0 group-hover:text-blue-600" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.46046 2.837C7.32886 2.7651 8.15324 2.41089 8.81621 1.82481C9.565 1.16343 10.5164 0.800201 11.5 0.800201C12.4836 0.800201 13.435 1.16343 14.1838 1.82481C14.8468 2.41089 15.6712 2.7651 16.5396 2.837C17.5202 2.91828 18.4409 3.35915 19.1366 4.08058C19.8323 4.802 20.2574 5.7568 20.3358 6.77381C20.4046 7.67401 20.7462 8.52941 21.3118 9.21681C21.9496 9.99333 22.2998 10.98 22.2998 12C22.2998 13.02 21.9496 14.0067 21.3118 14.7832C20.7467 15.4707 20.4051 16.3256 20.3358 17.2262C20.2574 18.2432 19.8323 19.198 19.1366 19.9194C18.4409 20.6409 17.5202 21.0817 16.5396 21.163C15.6712 21.2349 14.8468 21.5891 14.1838 22.1752C13.435 22.8366 12.4836 23.1998 11.5 23.1998C10.5164 23.1998 9.565 22.8366 8.81621 22.1752C8.15324 21.5891 7.32886 21.2349 6.46046 21.163C5.47977 21.0817 4.55907 20.6409 3.86341 19.9194C3.16776 19.198 2.74263 18.2432 2.66426 17.2262C2.59492 16.3256 2.25336 15.4707 1.68821 14.7832C1.05045 14.0067 0.700195 13.02 0.700195 12C0.700195 10.98 1.05045 9.99333 1.68821 9.21681C2.25336 8.52928 2.59492 7.67437 2.66426 6.77381C2.74263 5.7568 3.16776 4.802 3.86341 4.08058C4.55907 3.35915 5.47977 2.91828 6.46046 2.837ZM16.5045 10.1898C16.7504 9.92576 16.8864 9.57212 16.8834 9.20504C16.8803 8.83797 16.7383 8.48683 16.488 8.22726C16.2377 7.96769 15.8991 7.82045 15.5451 7.81726C15.1912 7.81407 14.8502 7.95518 14.5956 8.21021L10.15 12.8204L8.40446 11.0102C8.14984 10.7552 7.80883 10.6141 7.45486 10.6173C7.1009 10.6205 6.7623 10.7677 6.512 11.0273C6.2617 11.2868 6.11972 11.638 6.11665 12.005C6.11357 12.3721 6.24964 12.7258 6.49556 12.9898L9.19556 15.7898C9.44872 16.0523 9.79203 16.1997 10.15 16.1997C10.508 16.1997 10.8513 16.0523 11.1045 15.7898L16.5045 10.1898Z" fill="currentColor"/>
                                </svg>
                                Marks
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" wire:navigate
                               class="pl-6 group flex items-center gap-x-3 rounded-r-full p-2 text-sm leading-6 font-semibold cursor-pointer text-gray-400 hover:text-blue-600 hover:bg-gray-50">
                                <svg class="h-6 w-6 shrink-0 group-hover:text-blue-600" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29999 6.00001C2.29999 5.36349 2.54231 4.75304 2.97364 4.30295C3.40498 3.85286 3.98999 3.60001 4.59999 3.60001H13.8C14.41 3.60001 14.995 3.85286 15.4263 4.30295C15.8577 4.75304 16.1 5.36349 16.1 6.00001V18C16.1 18.6365 16.3423 19.247 16.7736 19.6971C17.205 20.1472 17.79 20.4 18.4 20.4H4.59999C3.98999 20.4 3.40498 20.1472 2.97364 19.6971C2.54231 19.247 2.29999 18.6365 2.29999 18V6.00001ZM5.74999 7.20001H12.65V12H5.74999V7.20001ZM12.65 14.4H5.74999V16.8H12.65V14.4Z" fill="currentColor"/>
                                    <path d="M17.25 8.39999H18.4C19.01 8.39999 19.595 8.65285 20.0263 9.10294C20.4577 9.55302 20.7 10.1635 20.7 10.8V17.4C20.7 17.8774 20.5183 18.3352 20.1948 18.6728C19.8713 19.0104 19.4325 19.2 18.975 19.2C18.5175 19.2 18.0787 19.0104 17.7552 18.6728C17.4317 18.3352 17.25 17.8774 17.25 17.4V8.39999Z" fill="currentColor"/>
                                </svg>
                                Learning Support
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" wire:navigate
                               class="pl-6 group flex items-center gap-x-3 rounded-r-full p-2 text-sm leading-6 font-semibold cursor-pointer text-gray-400 hover:text-blue-600 hover:bg-gray-50">
                                <svg class="h-6 w-6 shrink-0 group-hover:text-blue-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.20002 7.19999V5.99999C7.20002 5.04521 7.57931 4.12954 8.25444 3.45441C8.92957 2.77928 9.84525 2.39999 10.8 2.39999H13.2C14.1548 2.39999 15.0705 2.77928 15.7456 3.45441C16.4207 4.12954 16.8 5.04521 16.8 5.99999V7.19999H19.2C19.8365 7.19999 20.447 7.45285 20.8971 7.90294C21.3472 8.35302 21.6 8.96347 21.6 9.59999V13.884C18.5276 15.0225 15.2766 15.6036 12 15.6C8.72342 15.6036 5.47246 15.0225 2.40002 13.884V9.59999C2.40002 8.96347 2.65288 8.35302 3.10297 7.90294C3.55306 7.45285 4.1635 7.19999 4.80002 7.19999H7.20002ZM9.60002 5.99999C9.60002 5.68173 9.72645 5.37651 9.9515 5.15147C10.1765 4.92642 10.4818 4.79999 10.8 4.79999H13.2C13.5183 4.79999 13.8235 4.92642 14.0486 5.15147C14.2736 5.37651 14.4 5.68173 14.4 5.99999V7.19999H9.60002V5.99999ZM10.8 12C10.8 11.6817 10.9265 11.3765 11.1515 11.1515C11.3765 10.9264 11.6818 10.8 12 10.8H12.012C12.3303 10.8 12.6355 10.9264 12.8606 11.1515C13.0856 11.3765 13.212 11.6817 13.212 12C13.212 12.3183 13.0856 12.6235 12.8606 12.8485C12.6355 13.0736 12.3303 13.2 12.012 13.2H12C11.6818 13.2 11.3765 13.0736 11.1515 12.8485C10.9265 12.6235 10.8 12.3183 10.8 12Z" fill="currentColor"/>
                                    <path d="M2.40002 16.4304V19.2C2.40002 19.8365 2.65288 20.447 3.10297 20.8971C3.55306 21.3471 4.1635 21.6 4.80002 21.6H19.2C19.8365 21.6 20.447 21.3471 20.8971 20.8971C21.3472 20.447 21.6 19.8365 21.6 19.2V16.4304C18.5069 17.4729 15.2641 18.0031 12 18C8.64482 18 5.41562 17.448 2.40002 16.4304Z" fill="currentColor"/>
                                </svg>
                                Job Portal
                            </a>
                        </li>

                    </ul>
                </li>
                {{--<li>
                    <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li>
                            <!-- Current: "bg-gray-50 text-blue-600", Default: "text-gray-700 hover:text-blue-600 hover:bg-gray-50" -->
                            <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border text-[0.625rem] font-medium bg-white text-gray-400 border-gray-200 group-hover:border-blue-600 group-hover:text-blue-600">H</span>
                                <span class="truncate">Heroicons</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border text-[0.625rem] font-medium bg-white text-gray-400 border-gray-200 group-hover:border-blue-600 group-hover:text-blue-600">T</span>
                                <span class="truncate">Tailwind Labs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-700 hover:text-blue-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold">
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border text-[0.625rem] font-medium bg-white text-gray-400 border-gray-200 group-hover:border-blue-600 group-hover:text-blue-600">W</span>
                                <span class="truncate">Workcation</span>
                            </a>
                        </li>
                    </ul>
                </li>--}}
                <li class="mt-auto">
                    <div class="w-full rounded-md bg-[#EBF4FF] p-4 flex flex-col gap-y-2">
                        <h1 class="text-sm font-semibold">Welcome to MyVC Portal</h1>
                        <p class="text-xs font-light leading-4">
                            MyVC is your one-stop portal for everything related to your academic journey at Villa College. Designed with you in mind, MyVC offers a user-friendly interface and a wealth of features to help you.
                        </p>
                        <div class="mt-4 w-full flex">
                            <a href="" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold w-full py-2 text-center rounded">
                                Take Tour
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
