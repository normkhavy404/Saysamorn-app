<div>
    <div style="margin-left: 16vw; margin-right: 20px">
        <div class="block w-full p-3 border border-gray-200 rounded shadow">
            <p class=" text-base font-semibold font-Notokhmer">
                ថ្នាក់សិក្សាសិស្ស
            </p>
            <p class="text-base text-blue-500 font-Notokhmer">បញ្ជីឈ្មោះថ្នាក់សិក្សាសិស្ស</p>
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg">
            <div class="flex justify-between float-right">
                <div class=" text-blue-600 float-right">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="flex justify-start">
                <select wire:model="month">
                    <option value="0">ប្រចាំឆ្នាំ</option>
                    <option value="1">មករា</option>
                    <option value="2">កុម្ភៈ</option>
                    <option value="3">មិនា</option>
                    <option value="4">មេសា</option>
                    <option value="5">ឧសភា</option>
                    <option value="6">មិថុនា</option>
                    <option value="7">កក្កដា</option>
                    <option value="8">សីហា</option>
                    <option value="9">កញ្ញា</option>
                    <option value="10">តុលា</option>
                    <option value="11">វិច្ឆកា</option>
                    <option value="12">ធ្នូ</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button class="text-black px-6 py-3 border border-black rounded-md font-Notokhmer"
                    onclick="printDiv('printMe')">
                    បោះពុម្ភ
                </button>
            </div>
            <div class=" mx-5" id="printMe">
                <div class=" text-center text-base font-Notokhmer font-bold">
                    <p>
                        ព្រះជារាណាចក្រកម្ពុជា
                    </p>
                    <p>
                        ជាតិ សាសនា ព្រះមហាក្សត្រ
                    </p>
                </div>
                <div class="ml-10 text-base font-Notokhmer font-bold">
                    <p>
                        កម្រងសាលារោងគោ
                    </p>
                    <p>
                        សាលាបឋមសិក្សា សាយសាម៉ន
                    </p>
                </div>
                <div>
                    <div class="text-center text-base font-Notokhmer font-bold">
                        <p>របាយការណ៍អវត្តមានសិស្សសរុបប្រចាំ{{ $month ? 'ខែ' . filterMonth($month) : 'ឆ្នាំ'}} នៃថ្នាក់ទី​ <td>{{ $academic_class->name_class }}</td>
                        </p>
                        <p>ឆ្នាំសិក្សា​ <td>{{ $academic_class->academicYear->name_year }}</td>
                        </p>
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
                                        ឈ្មោះសិស្ស
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        ភេទ
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        ច្បាប់
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        អត់ច្បាប់
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        សរុប
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-base font-Notokhmer">
                                @foreach ($data as $item)
                                    <tr>
                                        <td scope="col" class="px-6 py-3  ">
                                            {{ $loop->index + 1 }}
                                        </td>

                                        @foreach ($item as $ret)
                                            <td>{{ $ret }}</td>
                                        @endforeach
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
</div>

@push('scripts')
    <script>
        function printDiv(divName) {
            let printContents = document.getElementById(divName).innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
        window.onafterprint = function() {
            window.location.reload(true);
        };
    </script>
@endpush
