<div>
    <div class=" ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ឆ្នាំសិក្សា
            </p>
            <p class=" text-base text-blue-500  font-Notokhmer">បញ្ជីឈ្មោះឆ្នាំសិក្សា</p>
        </div>
        <div class="relative overflow-x-auto  sm:rounded-lg">
            <div class="py-2 flex justify-between ">
                <a href="{{ route('year_create') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 font-Notokhmer text-white  ">
                    បង្កើតឆ្នាំសិក្សាថ្មី
                </a>
            </div>
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full text-sm text-center border divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base border border-black">
                                        លេខរៀង
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base border border-black">
                                        ឆ្នាំសិក្សា
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base border border-black">
                                        ថ្ងៃខែឆ្នាំចាប់ផ្ដើម
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base border border-black">
                                        ថ្ងៃខែឆ្នាំបញ្ចប់
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base border border-black">
                                        ស្ថានភាព
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-Notokhmer text-base border border-black ">
                                        សកម្មភាព
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($academic_years as $year)
                                    <tr>
                                        <td scope="col" class="px-6 py-3  border border-black">
                                            {{ $year->id }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ $year->name_year }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ date('d-m-Y', strtotime($year->start_date)) }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 border border-black">
                                            {{ date('d-m-Y', strtotime($year->end_date)) }}
                                        </td>

                                        <td scope="col"
                                            class="px-6 py-3 font-Notokhmer text-base text-gray-700 border border-black">
                                            @if ($year->status == 1)
                                                កំពុងសិក្សា
                                            @elseif($year->status == 2)
                                                សិក្សារួច
                                            @else
                                                រង់ចាំ....
                                            @endif

                                        </td>

                                        <td scope="col"
                                            class="px-6 py-3 whitespace-nowrap text-sm font-medium border border-black">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('year_show', $year->id) }}">
                                                    <svg class="h-7 w-7 text-blue-500" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('year_edit', $year->id) }}">
                                                    <svg class="h-7 w-7 text-green-500" viewBox="0 0 24 24"
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
                                                <a wire:click="DeleteOnYear({{ $year->id }})">
                                                    <svg class="h-7 w-7 text-red-500" width="24" height="24"
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
                </div>
            </div>
        </div>
    </div>
</div>
