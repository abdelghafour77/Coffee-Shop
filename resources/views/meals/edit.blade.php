<x-app-layout>
    <x-slot name="title">{{ $meal->title }}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meals') }}
        </h2>
    </x-slot>
    {{-- pass title to layout --}}
    @section('title', 'Meals')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Meal</h3>
                <form class="space-y-6" action="{{ route('meals.update', $meal->id) }}" method="POST"
                    enctype="multipart/form-data" x-data="{ title: '{{ $meal->title }}' }">
                    @csrf
                    @method('PUT')
                    <div class="relative">
                        <div class="relative">
                            <input type="text" name="title" id="title" x-model="title"
                                class=" @error('title') border-red-500 dark:border-red-500 @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                                placeholder=" " value="{{ old('title', $meal->title) }}" />
                            <label for="title"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Menu name
                            </label>

                        </div>
                        @error('title')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative">
                        <div class="relative">
                            <input type="text" name="slug" id="slug"
                                class=" @error('slug') border-red-500 dark:border-red-500 @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-800 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-gray-300 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                                placeholder=" " x-slug="title" disabled />
                            <label for="slug"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Slug
                            </label>

                        </div>
                        @error('slug')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <div class="relative">
                            <input type="number" name="price" id="price"
                                class=" @error('price') border-red-500 dark:border-red-500 @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                                placeholder=" " value="{{ old('price', $meal->price) }}" />
                            <label for="price"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Price
                            </label>
                        </div>
                        @error('price')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="relative">
                        <div class="relative">
                            <Textarea name="description" id="description" rows="3"
                                class="@error('description') border-red-500 dark:border-red-500  @enderror block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer">{{ old('dexcription', $meal->description) }}</Textarea>

                            <label for="description"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300   top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                                Description
                            </label>
                        </div>
                        @error('description')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="relative">
                        <div x-data="fileUpload" :class="imageUrl && 'border-blue-600 dark:border-blue-500'"
                            class="@error('image') border-red-500 hover:border-red-600 @enderror flex justify-center items-center border-2 border-gray-300 hover:border-blue-500 hover:bg-gray-300 dark:hover:bg-gray-800 hover:bg-opacity-25 dark:border-dark-line border-dashed rounded-md h-48 overflow-y-hidden">
                            <template x-if="!imageUrl">
                                <label class="space-y-1 cursor-pointer text-center px-6 pt-5 pb-6 w-full"
                                    for="image">
                                    <svg aria-hidden="true" class="mx-auto h-12 w-12 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 48 48">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">
                                        <label
                                            class="relative bg-transparent rounded-md font-medium text-blue-600 dark:text-blue-500">
                                            <p class="text-gray-500 dark:text-white space-y-1">
                                                <span class="text-blue-600 dark:text-blue-500">
                                                    Upload a Image</span> or drag and drop <span
                                                    class="block text-xs text-gray-500">PNG, JPG up to 5MB</span>
                                            </p>
                                        </label>
                                    </div>
                                </label>

                            </template>

                            <template x-if="imageUrl">
                                <div class="object-contain group relative">
                                    <div class="hidden group-hover:flex absolute justify-center items-center m-auto text-white tracking-wider uppercase bg-transparent h-full w-full hover:bg-black/75 hover:cursor-pointer"
                                        x-on:click="imageUrl = ''">
                                        Remove
                                    </div>
                                    <img src="" :src="imageUrl" alt=""
                                        x-bind:class="{ 'hidden': !imageUrl }">
                                </div>
                            </template>

                            <input class="sr-only" id="image" name="image" type="file"
                                x-on:change="selectFile">
                            <input value="" id="post_header_delete" name="post_header_delete" type="hidden" />
                        </div>
                        @error('image')
                            <div class="text-sm mt-0 text-red-600 dark:text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <script>
                        document.addEventListener('alpine:init', () => {
                            Alpine.data('fileUpload', () => ({
                                imageUrl: "{{ old('image', asset('storage/' . $meal->image)) }}",
                                selectFile(event) {
                                    const file = event.target.files[0]
                                    const reader = new FileReader()
                                    if (event.target.files.length < 1) {
                                        return
                                    }
                                    reader.readAsDataURL(file)
                                    reader.onload = () => (this.imageUrl = reader.result)
                                },
                            }))
                        })
                    </script>
                    <button
                        type="submit"class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
