<x-app-layout>

    <x-slot name="page_heading">
        Marks
    </x-slot>

    <div class="w-full mx-auto flex-grow grid grid-cols-12 p-4 gap-4">
        <div class="col-span-8 bg-white flow-root border border-zinc-200/50">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-zinc-200/50">
                        <thead>
                        <tr class="divide-x divide-zinc-200/50">
                            <th scope="col" class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-4 w-8/12">Module</th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Grade</th>
                            <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Grade Point</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-zinc-200/50 bg-white">
                        @for($i=0; $i<7;$i++)
                            <tr class="divide-x divide-zinc-200/50">
                                <td class="py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-4 flex flex-col relative">
                                    <a href="" class="absolute top-4 right-4 px-2 py-1.5 text-xs bg-blue-600 text-white rounded font-semibold flex items-center gap-x-1">
                                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C10.1217 16 12.1566 15.1571 13.6569 13.6569C15.1571 12.1566 16 10.1217 16 8C16 5.87827 15.1571 3.84344 13.6569 2.34315C12.1566 0.842855 10.1217 0 8 0C5.87827 0 3.84344 0.842855 2.34315 2.34315C0.842855 3.84344 0 5.87827 0 8C0 10.1217 0.842855 12.1566 2.34315 13.6569C3.84344 15.1571 5.87827 16 8 16ZM11.707 6.707C11.8892 6.5184 11.99 6.2658 11.9877 6.0036C11.9854 5.7414 11.8802 5.49059 11.6948 5.30518C11.5094 5.11977 11.2586 5.0146 10.9964 5.01233C10.7342 5.01005 10.4816 5.11084 10.293 5.293L7 8.586L5.707 7.293C5.5184 7.11084 5.2658 7.01005 5.0036 7.01233C4.7414 7.0146 4.49059 7.11977 4.30518 7.30518C4.11977 7.49059 4.0146 7.7414 4.01233 8.0036C4.01005 8.2658 4.11084 8.5184 4.293 8.707L6.293 10.707C6.48053 10.8945 6.73484 10.9998 7 10.9998C7.26516 10.9998 7.51947 10.8945 7.707 10.707L11.707 6.707Z" fill="currentColor"/>
                                        </svg>
                                        <p class="">Registered</p>
                                    </a>

                                    <h3 class="font-semibold text-zinc-500 text-sm">Professionalism and Governance in IT</h3>
                                    <h3 class="font-semibold text-zinc-500 text-sm">(UFCFNJ-15-M)</h3>

                                    <div class="flex flex-col mt-4 w-full md:w-2/4">
                                        <div class="flex items-center justify-start py-1.5">
                                            <div class="w-2/3 text-xs text-zinc-400 px-2">Course Type:</div>
                                            <div class="w-1/3 text-xs font-medium">Major / Core</div>
                                        </div>
                                        <div class="flex items-center justify-start bg-zinc-50 py-1.5">
                                            <div class="w-2/3 text-xs text-zinc-400 px-2">Credit Hour:</div>
                                            <div class="w-1/3 text-xs font-medium">15</div>
                                        </div>
                                        <div class="flex items-center justify-start py-1.5">
                                            <div class="w-2/3 text-xs text-zinc-400 px-2">Semester:</div>
                                            <div class="w-1/3 text-xs font-medium">1</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 text-sm text-gray-500">
                                    <div class="flex items-center justify-center text-center italic text-xs text-zinc-300">Not Published</div>
                                </td>
                                <td class="p-4 text-sm text-gray-500">
                                    <div class="flex items-center justify-center text-center italic text-xs text-zinc-300">Not Published</div>
                                </td>
                            </tr>
                        @endfor
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="col-span-4 flex flex-col gap-y-4">
            <div class="p-4 bg-white">
                {{--header--}}
                <x-shared.card-header :title="'Awards'">
                    <svg class="h-5 w-auto" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99984 12.5C13.2215 12.5 15.8332 9.88834 15.8332 6.66668C15.8332 3.44502 13.2215 0.833344 9.99984 0.833344C6.77818 0.833344 4.1665 3.44502 4.1665 6.66668C4.1665 9.88834 6.77818 12.5 9.99984 12.5Z" fill="#717475"/>
                        <path d="M6.84183 11.575L5.8335 19.1667L10.0002 16.6667L14.1668 19.1667L13.1585 11.5667" fill="#717475"/>
                    </svg>
                </x-shared.card-header>
                <div class="mt-4 flex flex-col gap-y-4">
                    <p class="text-xs text-zinc-400">When results have been published, you will be able to view the module credits you have achieved and your award eligibility to date.
                        <a href="" class="text-blue-600 hover:underline">View publication dates</a></p>
                    <p class="text-xs text-zinc-400">Find out more about <a href="" class="text-blue-600 hover:underline">how degree classifications and differential levels of award are calculated</a></p>
                    <a href="" class="text-xs text-blue-600 hover:underline">Access your awards record</a>
                </div>
            </div>

            <div class="p-4 bg-white">
                {{--header--}}
                <x-shared.card-header :title="'Help on Marks & Awards'">
                    <svg class="h-5 w-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5999 12C21.5999 14.5461 20.5885 16.9879 18.7881 18.7882C16.9878 20.5886 14.546 21.6 11.9999 21.6C9.45382 21.6 7.01203 20.5886 5.21168 18.7882C3.41133 16.9879 2.3999 14.5461 2.3999 12C2.3999 9.45392 3.41133 7.01212 5.21168 5.21177C7.01203 3.41142 9.45382 2.39999 11.9999 2.39999C14.546 2.39999 16.9878 3.41142 18.7881 5.21177C20.5885 7.01212 21.5999 9.45392 21.5999 12ZM19.1999 12C19.1999 13.1916 18.9107 14.3148 18.3983 15.3048L16.5695 13.4748C16.8433 12.6272 16.8757 11.7201 16.6631 10.8552L18.5375 8.98079C18.9623 9.89879 19.1999 10.92 19.1999 12ZM13.0019 16.6956L14.8979 18.5916C13.9847 18.9937 12.9977 19.2009 11.9999 19.2C10.9573 19.2013 9.92699 18.9752 8.9807 18.5376L10.8551 16.6632C11.5591 16.8357 12.293 16.8468 13.0019 16.6956ZM7.3895 13.3404C7.15335 12.5273 7.13638 11.6662 7.3403 10.8444L7.2443 10.9404L5.4083 9.10079C5.00607 10.0144 4.79885 11.0018 4.7999 12C4.7999 13.1448 5.0675 14.2272 5.5427 15.1884L7.3895 13.3404ZM8.6951 5.60039C9.71657 5.07242 10.8501 4.79789 11.9999 4.79999C13.1447 4.79999 14.2271 5.06759 15.1883 5.54279L13.3403 7.39079C12.419 7.12244 11.4385 7.13624 10.5251 7.43039L8.6951 5.60159V5.60039ZM14.3999 12C14.3999 12.6365 14.147 13.247 13.697 13.6971C13.2469 14.1471 12.6364 14.4 11.9999 14.4C11.3634 14.4 10.7529 14.1471 10.3028 13.6971C9.85276 13.247 9.5999 12.6365 9.5999 12C9.5999 11.3635 9.85276 10.753 10.3028 10.3029C10.7529 9.85285 11.3634 9.59999 11.9999 9.59999C12.6364 9.59999 13.2469 9.85285 13.697 10.3029C14.147 10.753 14.3999 11.3635 14.3999 12Z" fill="#717475"/>
                    </svg>
                </x-shared.card-header>
                <div class="mt-4 flex flex-col gap-y-4">
                    <p class="text-xs text-zinc-400">The MyVC Marks and Awards page provides a central location to view your academic progress and achievements. Here's a quick guide to navigate this section:</p>

                    <p class="text-xs text-zinc-400 font-semibold">Viewing Your Grades:</p>
                    <ul class="list-disc pl-4">
                        <li class="text-xs text-gray-400">Course List: A list of all your enrolled courses will be displayed.</li>
                        <li class="text-xs text-gray-400">Click on a Course: Clicking a course name reveals detailed information, including:</li>
                        <li class="text-xs text-gray-400">Assignment grades and weightings.</li>
                        <li class="text-xs text-gray-400">Midterm and final exam grades (if applicable).</li>
                        <li class="text-xs text-gray-400">Overall course grade (letter grade or percentage).</li>
                        <li class="text-xs text-gray-400">Grading System: A legend explaining the grading scale used by Villa College is available for reference.</li>
                    </ul>

                    <p class="text-xs text-zinc-400 font-semibold">Understanding Awards and Recognition:</p>
                    <ul class="list-disc pl-4">
                        <li class="text-xs text-gray-400">Awards Section: This section showcases any academic awards or recognition you've received, such as Dean's List or scholarships.</li>
                        <li class="text-xs text-gray-400">Award Details: Clicking on an award displays further information, including the criteria and semester it was awarded.</li>
                    </ul>

                    <p class="text-xs text-zinc-400 font-semibold">Didn't Find What You Were Looking For?:</p>
                    <ul class="list-disc pl-4">
                        <li class="text-xs text-gray-400">Contact Your Advisor: If you have questions about specific grades, missing information, or require clarification, reach out to your academic advisor directly.</li>
                        <li class="text-xs text-gray-400">Help Center: The MyVC Help Center offers additional resources and FAQs related to grades and awards. You can search for specific topics or browse relevant articles.</li>
                    </ul>

                    <p class="text-xs text-zinc-400 font-semibold">Additional Tips:</p>
                    <ul class="list-disc pl-4">
                        <li class="text-xs text-gray-400">Regularly check your grades throughout the semester to stay on top of your academic performance.</li>
                        <li class="text-xs text-gray-400">Familiarize yourself with the grading system and course evaluation methods used by your professors.</li>
                        <li class="text-xs text-gray-400">Don't hesitate to reach out to your professors or advisors if you have any concerns about your grades.</li>
                        <li class="text-xs text-gray-400">We hope this helps! By effectively utilizing the MyVC Marks and Awards page, you can stay informed about your academic standing and celebrate your achievements.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
