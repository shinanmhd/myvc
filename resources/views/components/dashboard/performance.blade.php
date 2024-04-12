<div class="col-span-3 bg-white flex flex-col gap-y-6">

    <div class="px-4 pt-4 flex flex-col gap-y-6">
        {{--header--}}
        <x-shared.card-header :title="'Performance'">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25001 4.35001C6.48088 4.35001 5.74325 4.65554 5.1994 5.1994C4.65554 5.74325 4.35001 6.48088 4.35001 7.25001V21.75C4.35001 22.5191 4.65554 23.2568 5.1994 23.8006C5.74325 24.3445 6.48088 24.65 7.25001 24.65H21.75C22.5191 24.65 23.2568 24.3445 23.8006 23.8006C24.3445 23.2568 24.65 22.5191 24.65 21.75V7.25001C24.65 6.48088 24.3445 5.74325 23.8006 5.1994C23.2568 4.65554 22.5191 4.35001 21.75 4.35001H7.25001ZM20.3 10.15C20.3 9.76544 20.1472 9.39663 19.8753 9.1247C19.6034 8.85277 19.2346 8.70001 18.85 8.70001C18.4654 8.70001 18.0966 8.85277 17.8247 9.1247C17.5528 9.39663 17.4 9.76544 17.4 10.15V18.85C17.4 19.2346 17.5528 19.6034 17.8247 19.8753C18.0966 20.1472 18.4654 20.3 18.85 20.3C19.2346 20.3 19.6034 20.1472 19.8753 19.8753C20.1472 19.6034 20.3 19.2346 20.3 18.85V10.15ZM15.95 13.05C15.95 12.6654 15.7972 12.2966 15.5253 12.0247C15.2534 11.7528 14.8846 11.6 14.5 11.6C14.1154 11.6 13.7466 11.7528 13.4747 12.0247C13.2028 12.2966 13.05 12.6654 13.05 13.05V18.85C13.05 19.2346 13.2028 19.6034 13.4747 19.8753C13.7466 20.1472 14.1154 20.3 14.5 20.3C14.8846 20.3 15.2534 20.1472 15.5253 19.8753C15.7972 19.6034 15.95 19.2346 15.95 18.85V13.05ZM11.6 17.4C11.6 17.0154 11.4472 16.6466 11.1753 16.3747C10.9034 16.1028 10.5346 15.95 10.15 15.95C9.76544 15.95 9.39663 16.1028 9.1247 16.3747C8.85277 16.6466 8.70001 17.0154 8.70001 17.4V18.85C8.70001 19.2346 8.85277 19.6034 9.1247 19.8753C9.39663 20.1472 9.76544 20.3 10.15 20.3C10.5346 20.3 10.9034 20.1472 11.1753 19.8753C11.4472 19.6034 11.6 19.2346 11.6 18.85V17.4Z" fill="#717475"/>
            </svg>
        </x-shared.card-header>
    </div>

    <div class="">
        <canvas id="chart-by-week"></canvas>
    </div>

    {{--progress--}}
    <div class="flex flex-col gap-y-1 bg-zinc-50/50 p-4">
        <div class="w-full flex items-center justify-between">
            <p class="text-xs font-normal text-zinc-400">Progress</p>
            <p class="text-xs font-normal text-zinc-400">50%</p>
        </div>
        <div class="h-4 bg-zinc-100 w-full relative">
            <div class="absolute left-0 top-0 h-4 bg-[#0453F4]" style="width: 50%;"></div>
        </div>
        <div class="w-full flex items-center justify-between">
            <p class="text-xs font-normal text-zinc-400">Completed: 0 Semesters</p>
            <p class="text-xs font-normal text-zinc-400">Remaining: 3 Semesters</p>
        </div>
    </div>

    <script type="application/javascript">
        document.addEventListener("DOMContentLoaded", () => {
        const labels = ['Credits Achieved', 'Remaining Credits'];
        const data = {
            labels: labels,
            datasets: [
                {
                    data: [40,60],
                    backgroundColor: [
                        'rgb(4, 83, 224)',
                        'rgb(245, 245, 245)',
                    ],
                    hoverOffset: 4
                }
            ]
        };

        const dataBar = {
            type: 'doughnut',
            data: data,
            options: {
                cutout: 80,
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 12,
                            padding: 20
                        }
                    },
                    title: {
                        display: false,
                        text: 'Application conversion by Level'
                    }
                },
                x: {
                    display: false,
                    title: {
                        display: true
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Semester'
                    }
                },
                y: {
                    display: false,
                    title: {
                        display: true,
                        text: 'Value'
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Semester'
                    },
                    suggestedMin: 0,
                    /*suggestedMax: 200*/
                },
                interaction: {
                    intersect: true,
                },
                scales: false
            },
        };

        new window.Chart(document.getElementById('chart-by-week'), dataBar);
        });
    </script>
</div>
