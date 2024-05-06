<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.css" />
        <style>
            .tui-calendar-event-title {
                white-space: pre-wrap !important; /* Prevent initial text wrapping */
                overflow: hidden !important; /* Hide overflowing content */
                text-overflow: ellipsis !important; /* Add ellipsis (...) for overflowing text */
                max-width: 90% !important; /* Set a maximum width for the title */
            }
        </style>
    @endpush

    <x-slot name="page_heading">
        Timetable
    </x-slot>

    <div class="w-full mx-auto flex-grow min-h-screen grid grid-cols-12">
        <div id="calendar" class="col-span-9 border-r" style="min-height: 900px; height: 100% !important"></div>

        <div class="col-span-3 flex flex-col gap-y-6 p-6">
            {{--header--}}
            <x-shared.card-header :title="'Today\'s Classes'">
                <svg class="h-5 w-auto" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 0C4.9019 0 4.56806 0.138281 4.32192 0.384422C4.07578 0.630564 3.9375 0.964403 3.9375 1.3125V2.625H2.625C1.92881 2.625 1.26113 2.90156 0.768845 3.39384C0.276562 3.88613 0 4.55381 0 5.25V18.375C0 19.0712 0.276562 19.7389 0.768845 20.2312C1.26113 20.7234 1.92881 21 2.625 21H18.375C19.0712 21 19.7389 20.7234 20.2312 20.2312C20.7234 19.7389 21 19.0712 21 18.375V5.25C21 4.55381 20.7234 3.88613 20.2312 3.39384C19.7389 2.90156 19.0712 2.625 18.375 2.625H17.0625V1.3125C17.0625 0.964403 16.9242 0.630564 16.6781 0.384422C16.4319 0.138281 16.0981 0 15.75 0C15.4019 0 15.0681 0.138281 14.8219 0.384422C14.5758 0.630564 14.4375 0.964403 14.4375 1.3125V2.625H6.5625V1.3125C6.5625 0.964403 6.42422 0.630564 6.17808 0.384422C5.93194 0.138281 5.5981 0 5.25 0ZM5.25 6.5625C4.9019 6.5625 4.56806 6.70078 4.32192 6.94692C4.07578 7.19306 3.9375 7.5269 3.9375 7.875C3.9375 8.2231 4.07578 8.55694 4.32192 8.80308C4.56806 9.04922 4.9019 9.1875 5.25 9.1875H15.75C16.0981 9.1875 16.4319 9.04922 16.6781 8.80308C16.9242 8.55694 17.0625 8.2231 17.0625 7.875C17.0625 7.5269 16.9242 7.19306 16.6781 6.94692C16.4319 6.70078 16.0981 6.5625 15.75 6.5625H5.25Z" fill="#717475"/>
                </svg>
            </x-shared.card-header>

            <div class="flex flex-col w-full divide-y divide-zinc-100">
                <div class="py-4 flex items-center justify-start gap-x-4">
                    <div class="flex flex-col flex-grow text-sm">
                        <h3 class="font-semibold text-zinc-500">Professionalism and Governance in IT</h3>
                        <h3 class="font-semibold text-zinc-500">(UFCFNJ-15-M)</h3>

                        <div class="flex items-center justify-start gap-x-1 mt-2">
                            <svg class="w-4 h-4 mt-0.5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_44_377)">
                                    <path d="M8.00016 14.6667C11.6821 14.6667 14.6668 11.6819 14.6668 8.00001C14.6668 4.31811 11.6821 1.33334 8.00016 1.33334C4.31826 1.33334 1.3335 4.31811 1.3335 8.00001C1.3335 11.6819 4.31826 14.6667 8.00016 14.6667Z" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 4V8L10.6667 9.33333" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            <h3 class="font-normal text-zinc-400">10:00 PM - 12:00 PM</h3>
                        </div>
                    </div>
                </div>
                <div class="py-4 flex items-center justify-start gap-x-4">
                    <div class="flex flex-col flex-grow text-sm">
                        <h3 class="font-semibold text-zinc-500">Information Security</h3>
                        <h3 class="font-semibold text-zinc-500">(UFCFNJ-15-M)</h3>

                        <div class="flex items-center justify-start gap-x-1 mt-2">
                            <svg class="w-4 h-4 mt-0.5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_44_377)">
                                    <path d="M8.00016 14.6667C11.6821 14.6667 14.6668 11.6819 14.6668 8.00001C14.6668 4.31811 11.6821 1.33334 8.00016 1.33334C4.31826 1.33334 1.3335 4.31811 1.3335 8.00001C1.3335 11.6819 4.31826 14.6667 8.00016 14.6667Z" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 4V8L10.6667 9.33333" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            <h3 class="font-normal text-zinc-400">13:00 PM - 15:00 PM</h3>
                        </div>
                    </div>
                </div>
                <div class="py-4 flex items-center justify-start gap-x-4">
                    <div class="flex flex-col flex-grow text-sm">
                        <h3 class="font-semibold text-zinc-500">Project Management</h3>
                        <h3 class="font-semibold text-zinc-500">(UFCFNJ-15-M)</h3>

                        <div class="flex items-center justify-start gap-x-1 mt-2">
                            <svg class="w-4 h-4 mt-0.5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_44_377)">
                                    <path d="M8.00016 14.6667C11.6821 14.6667 14.6668 11.6819 14.6668 8.00001C14.6668 4.31811 11.6821 1.33334 8.00016 1.33334C4.31826 1.33334 1.3335 4.31811 1.3335 8.00001C1.3335 11.6819 4.31826 14.6667 8.00016 14.6667Z" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 4V8L10.6667 9.33333" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            <h3 class="font-normal text-zinc-400">16:00 PM - 18:00 PM</h3>
                        </div>
                    </div>
                </div>
                <div class="py-4 flex items-center justify-start gap-x-4">
                    <div class="flex flex-col flex-grow text-sm">
                        <h3 class="font-semibold text-zinc-500">Digital Design and Development</h3>
                        <h3 class="font-semibold text-zinc-500">(UFCFNJ-15-M)</h3>

                        <div class="flex items-center justify-start gap-x-1 mt-2">
                            <svg class="w-4 h-4 mt-0.5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_44_377)">
                                    <path d="M8.00016 14.6667C11.6821 14.6667 14.6668 11.6819 14.6668 8.00001C14.6668 4.31811 11.6821 1.33334 8.00016 1.33334C4.31826 1.33334 1.3335 4.31811 1.3335 8.00001C1.3335 11.6819 4.31826 14.6667 8.00016 14.6667Z" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 4V8L10.6667 9.33333" stroke="#B5B5BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            <h3 class="font-normal text-zinc-400">19:00 PM - 21:00 PM</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="application/javascript">
                document.addEventListener("DOMContentLoaded", () => {

                    const container = document.getElementById('calendar');
                    const options = {
                        usageStatistics: false,
                        defaultView: 'week',
                        week: {
                            eventView: ['time'],
                            taskView: false,
                        },
                        startTime: 6,
                        template: {
                            time(event) {
                                const { start, end, title } = event;
                                return `<div class="tui-calendar-event-title flex flex-col gap-y-1 p-2" style="color: #ffffff;">
                                    <b class="text-lg font-normal">${formatTime(start)} - ${formatTime(end)}</b>
                                    <p class="flex flex-wrap font-light leading-tight">${title}</p>
                                </div>`;
                            },
                        },
                        timezone: {
                            zones: [
                                {
                                    timezoneName: 'Asia/Karachi',
                                    displayLabel: 'Maldives',
                                },
                            ],
                        },
                        calendars: [
                            {
                                id: 'cal1',
                                name: 'Classes',
                                backgroundColor: 'rgb(4,83,224)',
                                dragBackgroundColor: 'rgba(4,83,224, 0.9)',
                                borderColor: 'rgba(4,83,224, 0.9)',
                                textColor: '#FFFFFF'
                            }
                        ],
                    };

                    const calendar = new window.Calendar(container, options);


                    calendar.createEvents([
                        {
                            id: 'event1',
                            calendarId: 'cal1',
                            title: 'Professionalism and Governance In IT',
                            subtitle: 'this',
                            start: '2024-04-13T10:00:00',
                            end: '2024-04-13T12:00:00',
                        },
                        {
                            id: 'event2',
                            calendarId: 'cal1',
                            title: 'Information Security',
                            start: '2024-04-13T13:00:00',
                            end: '2024-04-13T15:00:00',
                        },
                        {
                            id: 'event3',
                            calendarId: 'cal1',
                            title: 'Project Management',
                            start: '2024-04-13T16:00:00',
                            end: '2024-04-13T18:00:00',
                        },
                        {
                            id: 'event4',
                            calendarId: 'cal1',
                            title: 'Digital Design and Development',
                            start: '2024-04-13T19:00:00',
                            end: '2024-04-13T21:00:00',
                        },
                    ]);


                    calendar.setTheme({
                        common: {
                            gridSelection: {
                                backgroundColor: 'rgba(81, 230, 92, 0.05)',
                                border: '1px dotted #515ce6',
                            },
                        },
                    });

                    function formatTime(time) {
                        const hours = `${time.getHours()}`.padStart(2, '0');
                        const minutes = `${time.getMinutes()}`.padStart(2, '0');

                        return `${hours}:${minutes}`;
                    }
                });
        </script>
    @endpush


</x-app-layout>
