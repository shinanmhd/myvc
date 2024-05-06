<div class="w-full bg-white flex flex-col items-start justify-between gap-y-6 p-4 flex-grow">
    <div class="flex items-start justify-between mb-4 w-full">
        <div class="flex flex-col">
            <h1 class="text-xl font-bold text-zinc-600">{{ auth()->user()->name }}</h1>
            <h1 class="text-xl font-regular text-zinc-400">Welcome to MyVC Portal</h1>
        </div>

        <a href="{{ route('profile.edit') }}" wire:navigate class="flex items-center justify-center gap-x-2 px-2 py-1 rounded-md bg-zinc-100 hover:bg-zinc-600 transition-colors group">
            <svg class="text-zinc-700 group-hover:text-zinc-100 transition-colors" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12C10.5304 12 11.0391 11.7893 11.4142 11.4142C11.7893 11.0391 12 10.5304 12 10C12 9.46957 11.7893 8.96086 11.4142 8.58579C11.0391 8.21071 10.5304 8 10 8C9.46957 8 8.96086 8.21071 8.58579 8.58579C8.21071 8.96086 8 9.46957 8 10C8 10.5304 8.21071 11.0391 8.58579 11.4142C8.96086 11.7893 9.46957 12 10 12Z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.458 10C1.732 5.943 5.522 3 10 3C14.478 3 18.268 5.943 19.542 10C18.268 14.057 14.478 17 10 17C5.522 17 1.732 14.057 0.458 10ZM14 10C14 11.0609 13.5786 12.0783 12.8284 12.8284C12.0783 13.5786 11.0609 14 10 14C8.93913 14 7.92172 13.5786 7.17157 12.8284C6.42143 12.0783 6 11.0609 6 10C6 8.93913 6.42143 7.92172 7.17157 7.17157C7.92172 6.42143 8.93913 6 10 6C11.0609 6 12.0783 6.42143 12.8284 7.17157C13.5786 7.92172 14 8.93913 14 10Z" fill="currentColor"/>
            </svg>
            <p class="text-sm font-medium text-zinc-700 group-hover:text-zinc-100">View full profile</p>
        </a>
    </div>

    <div class="flex flex-col w-full gap-y-8">
        <div class="flex gap-x-4 items-start justify-start">
            <div class="w-1/2 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">My Program</h6>
                <h3 class="font-semibold text-base text-zinc-400">MSc in Information Technology</h3>
            </div>
            <div class="w-1/2 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">Student Email</h6>
                <h3 class="font-semibold text-base text-zinc-400">s2302209@students.villacollege.edu.mv</h3>
            </div>
        </div>

        <div class="flex gap-x-4 items-start justify-start">
            <div class="flex-1 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">VC Student ID</h6>
                <h3 class="font-semibold text-base text-zinc-400">S2302209</h3>
            </div>
            <div class="flex-1 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">UWE ID</h6>
                <h3 class="font-semibold text-base text-zinc-400">S2302209</h3>
            </div>
            <div class="flex-1 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">Mobile No.</h6>
                <h3 class="font-semibold text-base text-zinc-400">9968028</h3>
            </div>
            <div class="flex-1 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">NID No.</h6>
                <h3 class="font-semibold text-base text-zinc-400">A056565</h3>
            </div>
            <div class="flex-1 flex flex-col">
                <h6 class="text-xs font-medium text-zinc-300">Date of Birth</h6>
                <h3 class="font-semibold text-base text-zinc-400">1871-10-12</h3>
            </div>
        </div>
    </div>
</div>
