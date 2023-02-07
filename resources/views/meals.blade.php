<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meals as $meal)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $meal->title }}
                                </th>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p class="truncate max-w-sm">{{ $meal->description }}</p>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $meal->created_at }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $meal->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                        {{-- <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
