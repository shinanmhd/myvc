<x-slot name="page_heading">
    <ul class="flex items-center justify-start gap-x-6">
        <li class="">
            <a href="{{ route('profile.edit') }}"
               class="cursor-pointer {{ \Request::route()->getName() === 'profile.edit' ? 'text-blue-700 hover:underline' : 'text-zinc-400 hover:text-zinc-700' }}">
                Personal Details
            </a>
        </li>
        <li class="">
            <a href="{{ route('profile.edit.academic') }}"
               class="cursor-pointer {{ \Request::route()->getName() === 'profile.edit.academic' ? 'text-blue-700 hover:underline' : 'text-zinc-400 hover:text-zinc-700' }}">
                Academic Qualifications
            </a>
        </li>
        <li class="">
            <a href="{{ route('profile.edit.documents') }}"
               class="cursor-pointer  {{ \Request::route()->getName() === 'profile.edit.documents' ? 'text-blue-700 hover:underline' : 'text-zinc-400 hover:text-zinc-700' }}">
                Documents
            </a>
        </li>
    </ul>
</x-slot>
