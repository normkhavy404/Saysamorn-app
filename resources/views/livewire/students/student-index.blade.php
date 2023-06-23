<div>
    <div class=" ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow ">
            <p class=" text-sm font-semibold font-Notokhmer">
                សិស្ស
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីឈ្មោះសិស្ស</p>
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg">
            <div class=" flex justify-between float-right">
                <div class=" text-blue-600 float-right">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="py-2 flex justify-between">
                <a href="{{ route('student_create') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 text-base font-Notokhmer text-white  ">
                    បង្កើត
                </a>
            </div>
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block sm:px-6 lg:px-1">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full text-sm text-center border divide-y divide-gray-200">
                            <thead class="text-base font-Notokhmer bg-gray-100 text-gray-600">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        លេខរៀង
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        អត្តលេខ
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        គោត្តនាម និង នាម
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        ភេទ
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        ថ្ងៃខែឆ្នាំកំណើត
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                       ឈ្មោះឪពុក
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        ឈ្មោះម្ដាយ
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        សកម្មភាព
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($students as $stu)
                                    <tr>
                                        <td scope="col" class="px-6 py-3  ">
                                            {{ $stu->id }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $stu->code }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 font-mono text-lg">
                                            {{ $stu->first_name }} {{ $stu->last_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 font-mono text-lg">
                                            @if ($stu->gender == 1)
                                                ស្រី
                                            @else
                                                ប្រុស
                                            @endif
                                        </td>
                                        <td scope="col" class="px-6 py-3 normal-nums">
                                            {{ $stu->dob }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 font-mono text-lg">
                                            {{ $stu->fa_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 font-mono text-lg">
                                            {{ $stu->mo_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 whitespace-nowrap text-sm font-medium ">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('student_show', $stu->id) }}">
                                                    <svg class="h-7 w-7 text-blue-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('student_edit', $stu->id) }}">
                                                    <svg class="h-7 w-7 text-green-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"/>
                                                        <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                                        <line x1="16" y1="5" x2="19" y2="8" />
                                                    </svg>
                                                </a>
                                                <a wire:click="DeleteOnStudent({{ $stu->id }})">
                                                    <svg class="h-7 w-7 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />
                                                        <line x1="14" y1="11" x2="14" y2="17" />
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
