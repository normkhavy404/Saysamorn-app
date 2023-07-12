<div>
    <div style="margin-left: 16vw; margin-right: 20px">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow ">
            <p class=" text-sm font-semibold font-Notokhmer">
                គ្រូបង្រៀន
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីឈ្មោះគ្រូបង្រៀន</p>
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg py-2">
            <div class="py-1 flex justify-between">
                <a href="{{ route('create') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 font-Notokhmer text-base text-white hover:bg-blue-500">
                    បញ្ចូលគ្រូថ្មី
                </a>
                <div class="flex justify-end">
                    <button class="text-black px-6 py-3 border border-black rounded-md font-Notokhmer"
                        onclick="printDiv('printMe')">
                        បោះពុម្ភ
                    </button>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                    <div class="shadow overflow-hidden border border-gray-200 sm:rounded-lg">
                        <table class="w-full text-sm text-center border divide-y divide-gray-200">
                            <thead>
                                <tr class="border">
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        លេខរៀង
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border-black border">
                                        អត្តលេខ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        គោត្តនាម និង នាម
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        ភេទ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black">
                                        លេខទូរស័ព្ទ
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border-black border">
                                        អ៊ីម៉ែល
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-base font-Notokhmer text-black border border-black ">
                                        សមក្មភាព
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-black">
                                @foreach ($teachers as $tea)
                                    <tr>
                                        <td scope="col" class="px-6 py-3 text-base text-center border border-black">
                                            {{ $tea->id }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 text-base border-black border">
                                            {{ $tea->code }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-700 border border-black">
                                            {{ $tea->first_name }} {{ $tea->last_name }}
                                        </td>
                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-700 border border-black">
                                            @if ($tea->gender == 1)
                                                ប
                                            @else
                                                ស
                                            @endif
                                        </td>
                                        <td scope="col" class="px-6 py-3  text-center border border-black">
                                            {{ $tea->telephone }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 text-base border border-black">
                                            {{ $tea->email }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 whitespace-nowrap border border-black ">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('show', $tea->id) }}">
                                                    <svg class="h-6 w-6 text-blue-500" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('edit', $tea->id) }}">
                                                    <svg class="h-6 w-6 text-green-500" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <path
                                                            d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                        <line x1="16" y1="5" x2="19"
                                                            y2="8" />
                                                    </svg>
                                                </a>
                                                <a wire:click="destroy({{ $tea->id }})">
                                                    <svg class="h-6 w-6 text-red-500" width="24" height="24"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <line x1="4" y1="7" x2="20"
                                                            y2="7" />
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17" />
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $teachers->links() }} --}}
                    </div>
                    <div class="py-3 px-3">
                        <div class="text-black text-base font-Notokhmer">
                            <p>
                                គ្រូបង្រៀនសរុប​ {{ count($teachers) }} នាក់
                                ស្រី {{ $total_teacher }} នាក់
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
