<x-app-layout>

    @push('styles')
    @endpush

    <x-slot name="page_heading">
        Messages
    </x-slot>

    <div class="w-full mx-auto flex-grow min-h-screen grid grid-cols-12">

        <div class="col-span-3 flex flex-col border-r divide-y">
            <div class="bg-gray-100 flex items-center justify-start gap-4 p-4">
                <div class="w-12 h-12 aspect-square rounded-full bg-gray-200">&nbsp;</div>
                <div class="flex flex-col items-start justify-start flex-wrap">
                    <h1 class="font-semibold text-sm">Professionalism & Governance in IT</h1>
                    <div class="flex gap-x-4">
                        <h1 class="text-sm font-medium">New Messages</h1>
                        <h1 class="text-sm font-light">34m ago</h1>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 flex items-center justify-start gap-4 p-4">
                <div class="w-12 h-12 aspect-square rounded-full bg-gray-200">&nbsp;</div>
                <div class="flex flex-col items-start justify-start flex-wrap">
                    <h1 class="font-semibold text-sm">Digital Design</h1>
                    <div class="flex gap-x-4">
                        <h1 class="text-sm font-medium">New Messages</h1>
                        <h1 class="text-sm font-light">34m ago</h1>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 flex items-center justify-start gap-4 p-4">
                <div class="w-12 h-12 aspect-square rounded-full bg-gray-200">&nbsp;</div>
                <div class="flex flex-col items-start justify-start flex-wrap">
                    <h1 class="font-semibold text-sm">Project Management</h1>
                    <div class="flex gap-x-4">
                        <h1 class="text-sm font-medium">New Messages</h1>
                        <h1 class="text-sm font-light">34m ago</h1>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 flex items-center justify-start gap-4 p-4">
                <div class="w-12 h-12 aspect-square rounded-full bg-gray-200">&nbsp;</div>
                <div class="flex flex-col items-start justify-start flex-wrap">
                    <h1 class="font-semibold text-sm">Information Security</h1>
                    <div class="flex gap-x-4">
                        <h1 class="text-sm font-medium">New Messages</h1>
                        <h1 class="text-sm font-light">34m ago</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-9 flex items-end justify-end">
            <div class="flex flex-col items-end justify-center w-2/3 mx-auto pb-36">
                <div class="flex flex-col mb-12 w-full gap-y-6">
                    <div class="flex items-center justify-start gap-x-4">
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-green-300 rounded-full aspect-square">A</div>
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            Hey everyone, jumping into the Governance AIN IT module today. David, can you give us a quick rundown on the technical aspect?
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-4">
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            Sure, Sarah. The module integrates seamlessly with our existing security framework. It uses role-based access control (RBAC) to ensure users only have access to the information they need. We've also implemented strong encryption for sensitive data.
                        </div>
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-blue-300 rounded-full aspect-square">S</div>
                    </div>
                    <div class="flex items-center justify-start gap-x-4">
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-yellow-300 rounded-full aspect-square">C</div>
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            That's great, David. From a business perspective, this module allows us to clearly define data ownership and usage for all stakeholders. We can track access logs and ensure compliance with relevant regulations.
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-x-4">
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-red-300 rounded-full aspect-square">D</div>
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            Absolutely, Michael. These features are crucial for meeting governance and compliance requirements.  Have you considered including data retention policies within the module, Michael?
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-x-4">
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-cyan-300 rounded-full aspect-square">E</div>
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            Excellent point, Nadia. I was planning to suggest that during the design phase. We need a way to define retention periods for different data types based on regulations and our internal policies.
                        </div>
                    </div>
                    <div class="flex items-center justify-start gap-x-4">
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-indigo-300 rounded-full aspect-square">F</div>
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            Hey everyone, jumping on the design bandwagon!  Retention policies are definitely important. Visually, we can use clear icons or color coding to differentiate data types and retention periods within the interface.
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-4">
                        <div class="rounded-full bg-white border border-gray-100 p-4 px-6 text-sm flex-wrap">
                            Sounds good, Emily.  On the technical side, we can implement a notification system to alert users when data is approaching its retention deadline.
                        </div>
                        <div class="w-12 h-12 flex items-center justify-center font-bold text-lg bg-blue-300 rounded-full aspect-square">S</div>
                    </div>
                </div>

                <div class="w-full bottom-16 flex items-center gap-x-2">
                    <input type="text"
                           class="flex-grow border rounded-full w-full focus:outline-none text-sm h-12 px-6 flex items-center" placeholder="Type your message....">
                    <a class="rounded-full aspect-square h-8 flex items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
