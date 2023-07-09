<div>
    <div class=" ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                សម្រង់អវត្តមាន
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីសម្រង់អវត្តមាន</p>
        </div>
        <div class=" py-7 flex justify-between">
            <div class="flex gap-5">
                <div class="mt-2">
                    <a href="{{ route('class_index') }}"
                        class="px-8 py-3 border rounded-md text-white font-Notokhmer bg-blue-600 text-base hover:bg-blue-500">
                        ថយក្រោយ
                    </a>
                </div>
                <div>
                    <label for="" class="text-xl font-Notokhmer">ស្វែងរកតាមថ្ងៃ</label>
                    <input class="pl-2" type="date" wire:model="date" class=" rounded-lg">
                </div>
                @if ($date)
                    <div class="mt-2">
                        <a wire:click="resetDate"
                            class="px-8 py-3 border rounded-md text-white font-Notokhmer bg-blue-600 text-base hover:bg-blue-500">
                            មើលទាំងអស់
                        </a>
                    </div>
                @endif
            </div>
            <div>
                <a href="{{ route('attendent_create', $academic_class->id) }}"
                    class="px-8 py-3 border rounded-md bg-green-600 font-Notokhmer text-base text-white hover:bg-green-500">
                    ស្រង់អវត្តមាន
                </a>
            </div>

        </div>
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                <div class="shadow-lg  overflow-hidden border border-black  sm:rounded-md">
                    <table class="w-full text-sm text-center font-moul border divide-y divide-gray-200">
                        <thead class=" text-base font-Notokhmer">
                            <tr>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    លេខរៀង
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    នាម និងគោត្តនាម
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ភេទ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    កាលបរិច្ឆេទ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ប្រភេទ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    សកម្មភាព
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($attendent as $att)
                                <tr>
                                    <td scope="col" class="px-6 py-3  border border-black">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black ">
                                        {{ $att->first_name }} {{ $att->last_name }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        @if ($att->gender == 1)
                                            ប
                                        @else
                                            ស
                                        @endif
                                    </td>
                                    <td scope="col" class="px-6 py-3 border border-black">
                                        {{ date('m-d-Y', strtotime($att->date)) }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        @if ($att->type == 1)
                                            ច្បាប់
                                        @else
                                            អត់ច្បាប់
                                        @endif
                                    </td>
                                    <td scope="col" class="px-6 py-3 border border-black">
                                        <div class=" flex px-6 py-3 justify-center">
                                            <a wire:click="DestroyAtt ({{ $academic_class->id }})">
                                                <svg class="h-5 w-5 text-red-500" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <line x1="4" y1="7" x2="20" y2="7" />
                                                    <line x1="10" y1="11" x2="10" y2="17" />
                                                    <line x1="14" y1="11" x2="14" y2="17" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td scope="col" colspan="6"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black ">
                                        គ្មានសិស្សអវត្តមាន
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class=" grid grid-cols-6 gap-4 sm:py-1 ">
            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-Notokhmer text-5xl rounded-xl px-10 py-8 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                មករា
            </button>

            <button
                class="py-8 px-10 mr-2 mb-2 text-5xl font-Notokhmer text-white focus:outline-none bg-blue-700 rounded-xl border  hover:bg-blue-800 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-700 dark:bg-blue-600  dark:border-blue-600 dark:hover:text-white dark:hover:bg-blue-700">
                កុម្ភៈ
            </button>

            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-Notokhmer rounded-xl text-5xl mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-700 dark:border-blue-700">
                មីនា
            </button>
            <button
                class="text-white bg-white border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-200 font-Notokhmer rounded-xl text-5xl mr-2 mb-2 dark:bg-blue-600 dark:text-white dark:border-blue-600 dark:hover:bg-blue-700 dark:hover:border-blue-600 dark:focus:ring-blue-700">
                មេសា
            </button>
            <button
                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-Notokhmer rounded-xl text-5xl px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                ឧសភា
            </button>
            <button
                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-Notokhmer rounded-xl text-5xl px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                មិថុនា
            </button>
            <button
                class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-Notokhmer rounded-xl text-5xl px-10 py-8 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
                កក្កដា
            </button>
            <button
                class="text-white bg-cyan-700 hover:bg-cyan-800 focus:outline-none focus:ring-4 focus:ring-cyan-300 font-Notokhmer rounded-xl text-5xl text-center mb-2 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-900">
                សីហា
            </button>
            <button
                class="text-white bg-slate-950 hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-300 font-Notokhmer rounded-xl text-5xl text-center mb-2 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-900">
                កញ្ញា
            </button>
            <button
                class="text-white bg-orange-700 hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 font-Notokhmer rounded-xl text-5xl text-center mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-900">
                តុលា
            </button>
            <button
                class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-Notokhmer rounded-xl text-5xl px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                វិច្ឆិកា
            </button>
            <button
                class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-Notokhmer rounded-xl text-5xl px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                ធ្នូ
            </button>


        </div> --}}
    </div>
</div>
