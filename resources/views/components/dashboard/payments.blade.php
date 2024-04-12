<div class="bg-white flex flex-col items-start justify-between gap-y-4">
    <div class="p-4 flex flex-col gap-y-4 w-full">
        {{--header--}}
        <x-shared.card-header :title="'Payment'" :more_link="route('dashboard')">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5412 9.2725C10.735 9.14375 10.9737 9.0275 11.25 8.93875V11.0613C10.9997 10.9828 10.7612 10.8705 10.5412 10.7275C10.0875 10.425 10 10.1425 10 10C10 9.8575 10.0875 9.575 10.5412 9.2725ZM13.75 16.0613V13.9388C14.025 14.0275 14.265 14.1438 14.4588 14.2725C14.9138 14.5763 15 14.8575 15 15C15 15.1425 14.9125 15.425 14.4588 15.7275C14.2388 15.8705 14.0003 15.9828 13.75 16.0613Z" fill="#717475"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 22.5C15.1522 22.5 17.6957 21.4464 19.5711 19.5711C21.4464 17.6957 22.5 15.1522 22.5 12.5C22.5 9.84784 21.4464 7.3043 19.5711 5.42893C17.6957 3.55357 15.1522 2.5 12.5 2.5C9.84784 2.5 7.3043 3.55357 5.42893 5.42893C3.55357 7.3043 2.5 9.84784 2.5 12.5C2.5 15.1522 3.55357 17.6957 5.42893 19.5711C7.3043 21.4464 9.84784 22.5 12.5 22.5ZM13.75 6.25C13.75 5.91848 13.6183 5.60054 13.3839 5.36612C13.1495 5.1317 12.8315 5 12.5 5C12.1685 5 11.8505 5.1317 11.6161 5.36612C11.3817 5.60054 11.25 5.91848 11.25 6.25V6.365C10.5033 6.49792 9.79095 6.7793 9.155 7.1925C8.2525 7.7925 7.5 8.76125 7.5 10C7.5 11.2375 8.2525 12.2063 9.155 12.8075C9.755 13.2075 10.4725 13.4888 11.25 13.635V16.0612C10.7612 15.9025 10.4 15.665 10.1962 15.4313C10.0905 15.3015 9.95977 15.1943 9.81181 15.116C9.66384 15.0377 9.50166 14.99 9.33489 14.9755C9.16812 14.9611 9.00015 14.9804 8.84095 15.0321C8.68175 15.0838 8.53456 15.167 8.40811 15.2767C8.28167 15.3864 8.17855 15.5204 8.10486 15.6707C8.03118 15.821 7.98844 15.9846 7.97917 16.1517C7.9699 16.3188 7.9943 16.4861 8.05091 16.6437C8.10753 16.8012 8.19521 16.9457 8.30875 17.0687C9.01125 17.88 10.075 18.4137 11.25 18.635V18.75C11.25 19.0815 11.3817 19.3995 11.6161 19.6339C11.8505 19.8683 12.1685 20 12.5 20C12.8315 20 13.1495 19.8683 13.3839 19.6339C13.6183 19.3995 13.75 19.0815 13.75 18.75V18.635C14.4967 18.5021 15.2091 18.2207 15.845 17.8075C16.7475 17.2075 17.5 16.2388 17.5 15C17.5 13.7625 16.7475 12.7937 15.845 12.1925C15.2091 11.7793 14.4967 11.4979 13.75 11.365V8.93875C14.2388 9.0975 14.6 9.335 14.8038 9.56875C14.9105 9.69539 15.0413 9.79956 15.1887 9.8752C15.336 9.95084 15.4969 9.99645 15.662 10.0094C15.8271 10.0223 15.9932 10.0023 16.1505 9.95048C16.3078 9.89868 16.4532 9.81614 16.5784 9.70765C16.7035 9.59916 16.8059 9.46688 16.8794 9.3185C16.953 9.17012 16.9964 9.0086 17.007 8.84332C17.0176 8.67804 16.9953 8.5123 16.9413 8.35572C16.8873 8.19915 16.8027 8.05486 16.6925 7.93125C15.9888 7.12 14.9263 6.58625 13.75 6.365V6.25Z" fill="#717475"/>
            </svg>
        </x-shared.card-header>

        <div class="flex flex-col gap-y-2">
            <div class="flex items-center justify-between p-2 even:bg-zinc-50">
                <div class="w-9/12 flex flex-col">
                    <h4 class="font-semibold text-zinc-600 text-xs">VC/INV/2023/093525</h4>
                    <h4 class="font-normal text-zinc-400 text-xs">
                        5th Installment Fee - 5999.00 <br>
                        Registration Fee -May 2024 - 200 <br>
                        VCSA Fee -May 2024 - 50 <br>
                    </h4>
                </div>
                <div class="w-3/12 flex items-center justify-end">
                    <h4 class="font-semibold text-zinc-600 text-xs">6,249.00</h4>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 even:bg-zinc-50">
                <div class="w-9/12 flex flex-col">
                    <h4 class="font-semibold text-zinc-600 text-xs">VC/INV/2023/093525</h4>
                    <h4 class="font-normal text-zinc-400 text-xs">
                        6th Installment Fee - 5999.00 <br>
                    </h4>
                </div>
                <div class="w-3/12 flex items-center justify-end">
                    <h4 class="font-semibold text-zinc-600 text-xs">5,999.00</h4>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 even:bg-zinc-50">
                <div class="w-9/12 flex flex-col">
                    <h4 class="font-semibold text-zinc-600 text-xs">VC/INV/2023/093525</h4>
                    <h4 class="font-normal text-zinc-400 text-xs">
                        7th Installment Fee - 5999.00 <br>
                    </h4>
                </div>
                <div class="w-3/12 flex items-center justify-end">
                    <h4 class="font-semibold text-zinc-600 text-xs">5,999.00</h4>
                </div>
            </div>
            <div class="flex items-center justify-between p-2 even:bg-zinc-50">
                <div class="w-9/12 flex flex-col">
                    <h4 class="font-semibold text-zinc-600 text-xs">VC/INV/2023/093525</h4>
                    <h4 class="font-normal text-zinc-400 text-xs">
                        8th Installment Fee - 5999.00 <br>
                    </h4>
                </div>
                <div class="w-3/12 flex items-center justify-end">
                    <h4 class="font-semibold text-zinc-600 text-xs">5,999.00</h4>
                </div>
            </div>
        </div>
    </div>

    {{--progress--}}
    <div class="flex flex-col gap-y-1 bg-zinc-50/50 p-4 w-full">
        <div class="w-full flex items-center justify-between">
            <p class="text-xs font-normal text-zinc-400">Payment Progress</p>
            <p class="text-xs font-normal text-zinc-400">10%</p>
        </div>
        <div class="h-4 bg-zinc-100 w-full relative">
            <div class="absolute left-0 top-0 h-4 bg-[#0453F4]" style="width: 10%;"></div>
        </div>
        <div class="w-full flex items-center justify-between">
            <p class="text-xs font-normal text-zinc-400">Paid: MVR 10,000</p>
            <p class="text-xs font-normal text-zinc-400">Remaining: MVR 90,000</p>
        </div>
    </div>
</div>
