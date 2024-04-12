<div class="w-full flex flex-col gap-y-6 p-4 bg-white">
    {{--header--}}
    <x-shared.card-header :title="'Calendar'">
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 0C4.9019 0 4.56806 0.138281 4.32192 0.384422C4.07578 0.630564 3.9375 0.964403 3.9375 1.3125V2.625H2.625C1.92881 2.625 1.26113 2.90156 0.768845 3.39384C0.276562 3.88613 0 4.55381 0 5.25V18.375C0 19.0712 0.276562 19.7389 0.768845 20.2312C1.26113 20.7234 1.92881 21 2.625 21H18.375C19.0712 21 19.7389 20.7234 20.2312 20.2312C20.7234 19.7389 21 19.0712 21 18.375V5.25C21 4.55381 20.7234 3.88613 20.2312 3.39384C19.7389 2.90156 19.0712 2.625 18.375 2.625H17.0625V1.3125C17.0625 0.964403 16.9242 0.630564 16.6781 0.384422C16.4319 0.138281 16.0981 0 15.75 0C15.4019 0 15.0681 0.138281 14.8219 0.384422C14.5758 0.630564 14.4375 0.964403 14.4375 1.3125V2.625H6.5625V1.3125C6.5625 0.964403 6.42422 0.630564 6.17808 0.384422C5.93194 0.138281 5.5981 0 5.25 0ZM5.25 6.5625C4.9019 6.5625 4.56806 6.70078 4.32192 6.94692C4.07578 7.19306 3.9375 7.5269 3.9375 7.875C3.9375 8.2231 4.07578 8.55694 4.32192 8.80308C4.56806 9.04922 4.9019 9.1875 5.25 9.1875H15.75C16.0981 9.1875 16.4319 9.04922 16.6781 8.80308C16.9242 8.55694 17.0625 8.2231 17.0625 7.875C17.0625 7.5269 16.9242 7.19306 16.6781 6.94692C16.4319 6.70078 16.0981 6.5625 15.75 6.5625H5.25Z" fill="#717475"/>
        </svg>
    </x-shared.card-header>

    <div class="flex items-center">
        <button type="button" class="-my-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
            <span class="sr-only">Previous month</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
        </button>

        <h2 class="flex-grow flex items-center justify-center text-sm font-semibold text-gray-900">January 2024</h2>

        <button type="button" class="-my-1.5 -mr-1.5 ml-2 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
            <span class="sr-only">Next month</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    <div class="mt-10 grid grid-cols-7 text-center text-xs leading-6 text-gray-500">
        <div>M</div>
        <div>T</div>
        <div>W</div>
        <div>T</div>
        <div>F</div>
        <div>S</div>
        <div>S</div>
    </div>
    <div class="mt-2 grid grid-cols-7 text-sm">
        <div class="py-2">
            <!--
              Always include: "mx-auto flex h-8 w-8 items-center justify-center rounded-full"
              Is selected, include: "text-white"
              Is not selected and is today, include: "text-indigo-600"
              Is not selected and is not today and is current month, include: "text-gray-900"
              Is not selected and is not today and is not current month, include: "text-gray-400"
              Is selected and is today, include: "bg-indigo-600"
              Is selected and is not today, include: "bg-gray-900"
              Is not selected, include: "hover:bg-gray-200"
              Is selected or is today, include: "font-semibold"
            -->
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2021-12-27">27</time>
            </button>
        </div>
        <div class="py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2021-12-28">28</time>
            </button>
        </div>
        <div class="py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2021-12-29">29</time>
            </button>
        </div>
        <div class="py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2021-12-30">30</time>
            </button>
        </div>
        <div class="py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2021-12-31">31</time>
            </button>
        </div>
        <div class="py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-01">1</time>
            </button>
        </div>
        <div class="py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-02">2</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-03">3</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-04">4</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-05">5</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-06">6</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-07">7</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-08">8</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-09">9</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-10">10</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-11">11</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full font-semibold text-indigo-600 hover:bg-gray-200">
                <time datetime="2022-01-12">12</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-13">13</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-14">14</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-15">15</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-16">16</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-17">17</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-18">18</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-19">19</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-20">20</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 font-semibold text-white">
                <time datetime="2022-01-21">21</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-22">22</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-23">23</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-24">24</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-25">25</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-26">26</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-27">27</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-28">28</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-29">29</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-30">30</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-900 hover:bg-gray-200">
                <time datetime="2022-01-31">31</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2022-02-01">1</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2022-02-02">2</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2022-02-03">3</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2022-02-04">4</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2022-02-05">5</time>
            </button>
        </div>
        <div class="border-t border-gray-200 py-2">
            <button type="button" class="mx-auto flex h-8 w-8 items-center justify-center rounded-full text-gray-400 hover:bg-gray-200">
                <time datetime="2022-02-06">6</time>
            </button>
        </div>
    </div>

    <section class="mt-6 w-full">
        <h2 class="text-base font-semibold leading-6 text-gray-900">Upcoming Events</h2>
        <ol class="mt-4 space-y-1 text-sm leading-6 text-gray-500">
            <li class="group flex items-center space-x-4 rounded-xl py-2">
                <div class="h-12 w-12 aspect-square flex items-center justify-center bg-zinc-100 text-xl font-bold rounded-full">
                    21
                </div>
                <div class="flex-grow">
                    <p class="text-gray-900">Final Coursework Deadline</p>
                    <div class="flex items-center justify-between">
                        <p class="text-gray-500">Professionalisn and Gove ...</p>
                        <p class="mt-0.5"><time datetime="2022-01-21T13:00">1:00 PM</time></p>
                    </div>
                </div>
            </li>
        </ol>
    </section>
</div>
