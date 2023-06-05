<div>
    <div class=" ml-60 mx-2">
        <div class="relative overflow-x-auto  sm:rounded-lg">
            <div class=" flex justify-between float-right">
                <div class=" text-blue-600 float-right">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="py-1 flex justify-between ">
                <a href="{{ route('student_create') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8  font-semibold text-white  ">
                    ការបង្កើត
                </a>
            </div>
            <div class="flex flex-col">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full text-sm text-center border divide-y divide-gray-200">
                            <thead class=" text-sm ">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Code
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Full Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        gender
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Date Of birth
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Father
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Mother
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Action
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
                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $stu->first_name }} {{ $stu->last_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 ">
                                            @if ($stu->gender == 1)
                                                ស្រី
                                            @else
                                                ប្រុស
                                            @endif
                                        </td>
                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $stu->dob }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $stu->fa_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $stu->mo_name }}
                                        </td>
                                        <td scope="col" class="px-6 py-3 whitespace-nowrap text-sm font-medium ">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('student_show', $stu->id) }}"
                                                    class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                                    View
                                                </a>
                                                <a href="{{ route('student_edit', $stu->id) }}"
                                                    class="text-green-600 hover:text-green-900 mb-2 mr-2">
                                                    edit
                                                </a>
                                                <a wire:click="DeleteOnStudent({{ $stu->id }})"
                                                    class="text-red-600 hover:text-red-900">
                                                    Delete
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
