@extends('layouts.app')
@section('content')
    <div>
        <div class="ml-60 px-2">
            <div class="block w-full p-3 border border-gray-200 rounded-lg shadow ">
                <p class=" text-sm font-semibold font-Notokhmer">
                    អ្នកប្រើ
                </p>
                <p class="text-base text-blue-500 font-Notokhmer">កែប្រែព័ត៌មានអ្នកប្រើប្រាស់</p>
            </div>
            <div class="max-w-4xl mx-auto sm:px-6 py-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="post" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 sm:p-4">
                                <label for="name" class="block font-Notokhmer text-base text-gray-700">ឈ្មោះ</label>
                                <input type="text" name="name" id="name"
                                    class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('name', $user->name) }}" />
                                @error('name')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 sm:p-4">
                                <label for="email" class="block font-Notokhmer text-base text-black">អ៊ីម៉ែល</label>
                                <input type="email" name="email" id="email"
                                    class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('email', $user->email) }}" />
                                @error('email')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 sm:p-4">
                                <label for="password"
                                    class="block font-Notokhmer text-base text-black">ពាក្យសម្ងាត់</label>
                                <input type="password" name="password" id="password"
                                    class="form-input rounded-md shadow-sm mt-1 block w-full" />
                                @error('password')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 sm:p-4">
                                <label for="roles" class="block font-Notokhmer text-base text-black">តួនាទី</label>
                                <select name="roles[]" id="roles"
                                    class="form-multiselect block rounded-md shadow-sm mt-1 w-full" multiple="multiple">
                                    @foreach ($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ in_array($id, old('roles', $user->roles->pluck('id')->toArray())) ? ' selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div
                                class="flex items-center justify-end px-4 py-3 text-right font-Notokhmer text-base sm:px-6">
                                <a href="{{ route('users.index') }}"
                                    class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:shadow-outline-red disabled:opacity-25 transition ease-in-out duration-150">
                                    ថយក្រោយ
                                </a>
                                |
                                <button
                                    class="inline-flex items-center px-6 py-2 bg-blue-800 border border-transparent rounded-md text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    រក្សាទុក
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
