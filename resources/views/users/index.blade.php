@extends('layouts.app')
@section('content')
    <div>
        <div class="ml-60 px-2">
            <div class="block w-full p-3 border border-gray-200 rounded-lg shadow ">
                <p class=" text-sm font-semibold font-Notokhmer">
                    អ្នកប្រើ
                </p>
                <p class="text-base text-blue-500 font-Notokhmer">បញ្ជីឈ្មោះអ្នកប្រើ</p>
            </div>
            <div class="block mb-8 py-4">
                <a href="{{ route('users.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded">
                    បង្កើត
                </a>
            </div>
            <div class="flex flex-col ">
                <div class=" overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                        <div class="shadow-lg overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-center text-base font-Notokhmer text-black tracking-wider">
                                            លេខរៀង
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-center text-base font-Notokhmer text-black tracking-wider">
                                            ឈ្មោះអ្នកប្រើ
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-center text-base font-Notokhmer text-black tracking-wider">
                                            អ៊ីម៉ែល
                                        </th>
                                        {{-- <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Email Verified At
                                        </th> --}}
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-center text-base font-Notokhmer text-black tracking-wider">
                                            តួនាទីអ្នកប្រើ
                                        </th>
                                        <th class="px-6 py-3 bg-gray-50 text-center text-base font-Notokhmer text-black tracking-wider">
                                            សកម្មភាព
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-900">
                                                {{ $user->id }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
                                                {{ $user->name }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
                                                {{ $user->email }}
                                            </td>

                                            {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $user->email_verified_at }}
                                            </td> --}}

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">
                                                @foreach ($user->roles as $role)
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $role->title }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td scope="col" class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium">
                                                <a href="{{ route('users.show', $user->id) }}">
                                                show
                                                </a>
                                                <a href="{{ route('users.edit', $user->id) }}">
                                                    Edit
                                                </a>
                                                <form class="inline-block" action="{{ route('users.destroy', $user->id) }}"
                                                    method="POST" onsubmit="return confirm('Are you sure?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2"
                                                        value="Delete">
                                                </form>
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
    </div>
@endsection
