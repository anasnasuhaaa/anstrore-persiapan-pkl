<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form enctype="multipart/form-data" class="mx-auto" method="POST"
                        action="{{ route('admin.category.store') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Kategori</label>
                            <input type="text" name="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                        </div>
                        @error('category')
                            <div class="alert text-red-500 alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Gambar</label>
                            <input type="file" name="image"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                        </div>
                        @error('category')
                            <div class="alert text-red-500 alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
