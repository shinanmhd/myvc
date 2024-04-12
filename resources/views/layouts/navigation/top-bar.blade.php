<div class="sticky top-0 z-40 flex h-28 shrink-0 items-center gap-x-4 bg-white shadow-[rgba(0,_0,_0,_0.05)_0px_25px_50px_-12px] sm:gap-x-6 px-4 sm:px-6 lg:px-0">
    <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" x-on:click="sidebar = true">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

    <!-- Separator -->
    <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

    <div class="flex flex-col flex-1 self-stretch divide-y">
        <div class="flex flex-1 gap-x-4 py-2 self-stretch lg:gap-x-6 px-4 sm:px-6 lg:px-8">

            <div class="relative flex flex-1 items-center justify-end">
                asd
                <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200 ml-0 lg:ml-6" aria-hidden="true"></div>
            </div>

            <div class="flex items-center gap-x-4 lg:gap-x-6">
                <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>

                <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">View messages</span>
                    <svg class="h-5 w-5" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.25 14.5C21.25 15.0967 21.0129 15.669 20.591 16.091C20.169 16.5129 19.5967 16.75 19 16.75H5.5L1 21.25V3.25C1 2.65326 1.23705 2.08097 1.65901 1.65901C2.08097 1.23705 2.65326 1 3.25 1H19C19.5967 1 20.169 1.23705 20.591 1.65901C21.0129 2.08097 21.25 2.65326 21.25 3.25V14.5Z" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <!-- Separator -->
                <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

                <!-- Profile dropdown -->
                <div class="relative"
                     x-data="{ userMenu: false }" x-on:click.away="userMenu = false"
                >
                    <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                            @click="userMenu = !userMenu"
                    >
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <span class="hidden lg:flex lg:items-center">
                        <div class="flex flex-col gap-y-0 items-start">
                            <span class="ml-4 text-sm font-semibold text-gray-900" aria-hidden="true">{{ auth()->user()->name }}</span>
                            <span class="ml-4 text-xs font-semibold text-gray-600" aria-hidden="true">S2302029</span>
                        </div>
                        <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    </button>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div class="absolute left-0 z-10 mt-2.5 w-full origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                         x-cloak x-show="userMenu"
                    >
                        <!-- Active: "bg-gray-50", Not Active: "" -->
                        <a href="{{ route('profile.edit') }}" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Your profile</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-1">
                                Sign out
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-1 items-center gap-x-4 self-stretch lg:gap-x-6 px-4 sm:px-6 lg:px-8">
            {{ isset($page_heading) ? $page_heading : 'MyVC' }}
        </div>
    </div>
</div>
