<x-app-layout>
    <div class="">
        @include('profile.navigation')

        <div class="w-full mx-auto p-4 bg-white min-h-screen flex flex-col divide-y divide-zinc-200">

            <div class="grid grid-cols-12 py-6 relative">

                <div class="col-span-3 flex gap-4">
                    <div class="aspect-[9/10] bg-gray-100 rounded-lg"
                         style="background-image: url('https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80'); background-size: cover; background-position: center"
                    >&nbsp;</div>
                    <div class="flex flex-col flex-grow h-full justify-between items-start">
                        <div class="flex flex-col">
                            <h1 class="text-md text-zinc-600">{{ auth()->user()->name }}</h1>
                            <h1 class="text-md text-zinc-400 font-light">S2302029</h1>
                        </div>
                        <div class="flex flex-col gap-y-1">
                            <button class="flex items-center justify-center gap-x-2 px-2 py-1 text-xs bg-zinc-100 hover:bg-blue-600 text-zinc-600 hover:text-white rounded">
                                <p class="text-xs font-semibold">Change Picture</p>
                            </button>
                            <a href="" class="px-2 py-1 text-xs bg-zinc-100 hover:bg-blue-600 text-zinc-600 hover:text-white rounded font-semibold">Change Password</a>
                        </div>
                    </div>
                </div>
                <div class="col-span-9 grid grid-cols-12 divide-y divide-zinc-100 relative">
                    <div class="col-span-12 flex flex-col py-4">
                        <h1 class="text-xs text-zinc-400 font-normal">Student Email</h1>
                        <h1 class="text-base text-zinc-700 font-normal">{{ auth()->user()->email }}</h1>
                    </div>
                    <div class="col-span-2 flex flex-col py-4">
                        <h1 class="text-xs text-zinc-400 font-normal">VC Student ID</h1>
                        <h1 class="text-base text-zinc-700 font-normal">S2302029</h1>
                    </div>
                    <div class="col-span-2 flex flex-col py-4">
                        <h1 class="text-xs text-zinc-400 font-normal">UWE Student ID</h1>
                        <h1 class="text-base text-zinc-700 font-normal">S2302029</h1>
                    </div>
                    <div class="col-span-2 flex flex-col py-4">
                        <h1 class="text-xs text-zinc-400 font-normal">Mobile No.</h1>
                        <h1 class="text-base text-zinc-700 font-normal">9968028</h1>
                    </div>
                    <div class="col-span-2 flex flex-col py-4">
                        <h1 class="text-xs text-zinc-400 font-normal">NID No.</h1>
                        <h1 class="text-base text-zinc-700 font-normal">A056565</h1>
                    </div>
                    <div class="col-span-2 flex flex-col py-4">
                        <h1 class="text-xs text-zinc-400 font-normal">Date of Birth</h1>
                        <h1 class="text-base text-zinc-700 font-normal">1871-10-12</h1>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 py-6 gap-x-6 relative">

                <a href="" class="absolute top-6 right-4 px-2 py-1.5 text-xs bg-zinc-100 hover:bg-blue-600 text-zinc-600 hover:text-white rounded font-semibold flex items-center gap-x-1">
                    <svg class="w-3 h-3" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_32_509)">
                            <path d="M6.875 2.5H2.5C2.16848 2.5 1.85054 2.6317 1.61612 2.86612C1.3817 3.10054 1.25 3.41848 1.25 3.75V12.5C1.25 12.8315 1.3817 13.1495 1.61612 13.3839C1.85054 13.6183 2.16848 13.75 2.5 13.75H11.25C11.5815 13.75 11.8995 13.6183 12.1339 13.3839C12.3683 13.1495 12.5 12.8315 12.5 12.5V8.125" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5625 1.5625C11.8111 1.31386 12.1484 1.17418 12.5 1.17418C12.8516 1.17418 13.1889 1.31386 13.4375 1.5625C13.6861 1.81114 13.8258 2.14837 13.8258 2.5C13.8258 2.85163 13.6861 3.18886 13.4375 3.4375L7.5 9.375L5 10L5.625 7.5L11.5625 1.5625Z" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    <p class="">Edit</p>
                </a>

                <div class="col-span-3 flex flex-col">
                    <h2 class="text-md font-medium text-gray-900 dark:text-gray-100">
                        Personal Details
                    </h2>

                    <p class="text-xs text-gray-400 dark:text-gray-400">
                        {{ __("Update your account's profile information and email address.") }}
                    </p>
                </div>

                <div class="col-span-9 flex flex-col divide-y divide-zinc-100">
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">First Name</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Shinan</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Middle Name</h1>
                            <h1 class="text-base text-zinc-700 font-normal">-</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Last Name</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Mohamed</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Gender</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Male</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Personal Email</h1>
                            <h1 class="text-base text-zinc-700 font-normal">shinaan@360.mv</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Phone</h1>
                            <h1 class="text-base text-zinc-700 font-normal">9968028</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Home Phone</h1>
                            <h1 class="text-base text-zinc-700 font-normal">-</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Martial Status</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Single</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Nationality/Citizenship</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Maldivian</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Current Atoll</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Kaafu</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Current Island</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Male</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 py-6 gap-x-6 relative">
                <a href="" class="absolute top-6 right-4 px-2 py-1.5 text-xs bg-zinc-100 hover:bg-blue-600 text-zinc-600 hover:text-white rounded font-semibold flex items-center gap-x-1">
                    <svg class="w-3 h-3" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_32_509)">
                            <path d="M6.875 2.5H2.5C2.16848 2.5 1.85054 2.6317 1.61612 2.86612C1.3817 3.10054 1.25 3.41848 1.25 3.75V12.5C1.25 12.8315 1.3817 13.1495 1.61612 13.3839C1.85054 13.6183 2.16848 13.75 2.5 13.75H11.25C11.5815 13.75 11.8995 13.6183 12.1339 13.3839C12.3683 13.1495 12.5 12.8315 12.5 12.5V8.125" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5625 1.5625C11.8111 1.31386 12.1484 1.17418 12.5 1.17418C12.8516 1.17418 13.1889 1.31386 13.4375 1.5625C13.6861 1.81114 13.8258 2.14837 13.8258 2.5C13.8258 2.85163 13.6861 3.18886 13.4375 3.4375L7.5 9.375L5 10L5.625 7.5L11.5625 1.5625Z" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    <p class="">Edit</p>
                </a>
                <div class="col-span-3 flex flex-col">
                    <h2 class="text-md font-medium text-gray-900 dark:text-gray-100">
                        Permanent Address
                    </h2>

                    <p class="text-xs text-gray-400 dark:text-gray-400">
                        {{ __("Update your account's profile information and email address.") }}
                    </p>
                </div>

                <div class="col-span-9 flex flex-col divide-y divide-zinc-100">
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Address</h1>
                            <h1 class="text-base text-zinc-700 font-normal">H.Shanghai</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Country</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Maldives</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Atoll</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Kaafu</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Island</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Male</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">District</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Henveiru</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Postcode</h1>
                            <h1 class="text-base text-zinc-700 font-normal">20023</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 py-6 gap-x-6 relative">
                <a href="" class="absolute top-6 right-4 px-2 py-1.5 text-xs bg-zinc-100 hover:bg-blue-600 text-zinc-600 hover:text-white rounded font-semibold flex items-center gap-x-1">
                    <svg class="w-3 h-3" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_32_509)">
                            <path d="M6.875 2.5H2.5C2.16848 2.5 1.85054 2.6317 1.61612 2.86612C1.3817 3.10054 1.25 3.41848 1.25 3.75V12.5C1.25 12.8315 1.3817 13.1495 1.61612 13.3839C1.85054 13.6183 2.16848 13.75 2.5 13.75H11.25C11.5815 13.75 11.8995 13.6183 12.1339 13.3839C12.3683 13.1495 12.5 12.8315 12.5 12.5V8.125" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.5625 1.5625C11.8111 1.31386 12.1484 1.17418 12.5 1.17418C12.8516 1.17418 13.1889 1.31386 13.4375 1.5625C13.6861 1.81114 13.8258 2.14837 13.8258 2.5C13.8258 2.85163 13.6861 3.18886 13.4375 3.4375L7.5 9.375L5 10L5.625 7.5L11.5625 1.5625Z" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    <p class="">Edit</p>
                </a>
                <div class="col-span-3 flex flex-col">
                    <h2 class="text-md font-medium text-gray-900 dark:text-gray-100">
                        Current Address
                    </h2>

                    <p class="text-xs text-gray-400 dark:text-gray-400">
                        {{ __("Update your account's profile information and email address.") }}
                    </p>
                </div>

                <div class="col-span-9 flex flex-col divide-y divide-zinc-100">
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Address</h1>
                            <h1 class="text-base text-zinc-700 font-normal">H.Shanghai</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Country</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Maldives</h1>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-y-6 gap-x-4 py-4">
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Atoll</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Kaafu</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Island</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Male</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">District</h1>
                            <h1 class="text-base text-zinc-700 font-normal">Henveiru</h1>
                        </div>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="text-xs text-zinc-400 font-normal">Postcode</h1>
                            <h1 class="text-base text-zinc-700 font-normal">20023</h1>
                        </div>
                    </div>
                </div>
            </div>



            {{--<div class="p-4 sm:p-8 bg-white dark:bg-gray-800">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>--}}
        </div>
    </div>
</x-app-layout>
