<div>
    <div class="ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ពិន្ទុ
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីពិន្ទុតាមថ្នាក់សិក្សា</p>
        </div>

        <div class=" py-7 flex justify-between">
            <a href="{{ route('class_index') }}"
                class="px-8 py-3 border rounded-md text-white font-Notokhmer bg-blue-600 text-base hover:bg-blue-500">
                ថយក្រោយ
            </a>
            <a href="{{ route('score_create', $academic_class->id) }}"
                class="px-8 py-3 border rounded-md bg-green-600 font-Notokhmer text-base text-white hover:bg-green-500">
                បញ្ចូលពិន្ទុ
            </a>
        </div>
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                <div class="shadow-lg overflow-hidden border sm:rounded-md">
                    <table class="w-full text-sm text-center font-moul border divide-y divide-gray-200">
                        <thead class="text-base font-Notokhmer">
                            <tr>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ល.រ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    នាម និងគោត្តនាម
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ភេទ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ឆមាស
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ខែ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    ភាសាខ្មែរ
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    គណិតវិទ្យា
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    វិទ្យាសាស្រ្ត
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    សិក្សាសង្គម
                                </th>
                                <td scope="col" class="px-6 py-3 border border-black  ">
                                    មធ្យមភាគ
                                </td>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    និទេ្ទស
                                </th>
                                <th scope="col" class="px-6 py-3 border border-black">
                                    សកម្មភាព
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($score as $scor)
                                <tr>
                                    <td scope="col" class="px-6 py-3  border border-black">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black ">
                                        {{ $scor->first_name }} {{ $scor->last_name }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        @if ($scor->gender == 1)
                                            ប
                                        @else
                                            ស
                                        @endif
                                    </td>
                                    <td scope="col" class="px-6 py-3 border border-black">
                                        @if ($scor->semester == 1)
                                            ឆមាស ១
                                        @else
                                            ឆមាស ២
                                        @endif
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        @if ($scor->type == 1)
                                            មករា
                                        @elseif($scor->type == 2)
                                            កុម្ភៈ
                                        @elseif($scor->type == 3)
                                            មីនា
                                        @elseif($scor->type == 4)
                                            មេសា
                                        @elseif($scor->type == 5)
                                            ឧសភា
                                        @elseif($scor->type == 6)
                                            មិថុនា
                                        @elseif($scor->type == 7)
                                            កក្កដា
                                        @elseif($scor->type == 8)
                                            សីហា
                                        @elseif($scor->type == 9)
                                            កញ្ញា
                                        @elseif($scor->type == 10)
                                            តុលា
                                        @elseif($scor->type == 11)
                                            វិច្ឆិកា
                                        @else
                                            ធ្នូ
                                        @endif
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        {{ $scor->khmer }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        {{ $scor->math }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        {{ $scor->science }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">
                                        {{ $scor->socail }}
                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">

                                    </td>
                                    <td scope="col"
                                        class="px-6 py-3 font-Notokhmer text-base text-gray-900 border border-black">

                                    </td>
                                    <td scope="col" class="px-6 py-3 border border-black">
                                        <div class=" flex px-6 py-3 justify-center">
                                            <a href="{{ route('score_show', $academic_class->id) }}">
                                                <svg class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('score_edit', $academic_class->id) }}">
                                                <svg class="h-5 w-5 text-green-500" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                    <line x1="16" y1="5" x2="19" y2="8" />
                                                </svg>
                                            </a>
                                            <a wire:click="DestroyAtt ({{ $academic_class->id }})">
                                                <svg class="h-5 w-5 text-red-500" width="24" height="24"
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
                </div>
            </div>
        </div>
    </div>
</div>
