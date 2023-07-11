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
    </div>
</div>
