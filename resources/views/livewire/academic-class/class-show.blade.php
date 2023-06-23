<div>
    <div class=" ml-60 mx-2">
        <div class="block w-full p-3 border border-gray-200 rounded-lg shadow ">
            <p class=" text-sm font-semibold font-Notokhmer">
                ថ្នាក់សិក្សា
            </p>
            <p class=" text-base text-blue-500 font-Notokhmer">បញ្ជីឈ្មោះសិស្សក្នុងថ្នាក់សិក្សា</p>
        </div>
        <div>
            <div class="py-2 flex justify-between">
                <a href="{{ route('class_index') }}"
                    class="hover:shadow-form rounded-md bg-blue-600 py-3 px-8 text-base font-Notokhmer text-white  ">
                    ថយក្រោយ
                </a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-full text-sm text-center font-moul border divide-y divide-gray-200">
                        <thead class=" text-base font-Notokhmer ">
                            <tr>
                                <th scope="col" class="px-6 py-3 ">
                                    លេខរៀង
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    កូដ
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    ឈ្មោះសិស្ស
                                </th>
                                <th scope="col" class="px-6 py-3 ">
                                    ភេទ
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-base font-Notokhmer">
                            @foreach ($students as $class)
                                <tr>
                                    <td scope="col" class="px-6 py-3  ">
                                        {{ $loop->index + 1 }}
                                    </td>

                                    <td scope="col" class="px-6 py-3 ">
                                        {{ $class->code }}
                                    </td>

                                    <td scope="col" class="px-6 py-3 ">
                                        {{ $class->first_name }} {{ $class->last_name }}
                                    </td>

                                    <td scope="col" class="px-6 py-3 ">
                                        {{ $class->gender == 1 ? 'ប្រុស' : 'ស្រី' }}
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
