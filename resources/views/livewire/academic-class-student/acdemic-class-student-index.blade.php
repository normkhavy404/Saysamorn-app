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
                <a href="{{ route('class_student_create') }}"
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
                                        Student Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Academic_class Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($academic_class_student as $class_student)
                                    <tr>
                                        <td scope="col" class="px-6 py-3  ">
                                            {{ $class_student->id }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $class_student->first_name }} {{ $class_student->last_name }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 ">
                                            {{ $class_student->name_class }}
                                        </td>

                                        <td scope="col" class="px-6 py-3 ">
                                            @if ($class_student->status == 1)
                                                កំពុងសិក្សា
                                            @else
                                                ឈប់សិក្សា
                                            @endif
                                        </td>

                                        <td scope="col" class="px-6 py-3 whitespace-nowrap text-sm font-medium ">
                                            <div class=" flex px-6 py-3 justify-center">
                                                <a href="{{ route('class_show', $class_student->id) }}"
                                                    class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                                    View
                                                </a>
                                                <a href="{{ route('class_student_edit', $class_student->id) }}"
                                                    class="text-green-600 hover:text-green-900 mb-2 mr-2">
                                                    edit
                                                </a>
                                                <a wire:click="({{ $class_student->id }})"
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
