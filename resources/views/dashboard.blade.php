<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
                            {{ $users }}
                        </h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Users</p>
                    </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
                            {{ $meals }}
                        </h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Meals</p>
                    </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
                            {{ $admins ?? 0 }}
                        </h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Admins</p>
                    </div>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                    <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
                        <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">
                            {{ $categories ?? 0 }}
                        </h2>
                        <p class="leading-relaxed text-gray-100 font-bold">Categories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
