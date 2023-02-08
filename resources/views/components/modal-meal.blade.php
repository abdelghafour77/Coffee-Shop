<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="bg-gray-900 bg-opacity-50 h-full fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 md:h-full">
    <div class=" relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Meal</h3>
                <form class="space-y-6" action="">

                    <div class="relative">
                        <input type="text" name="menuName" id="menuName"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                            placeholder=" " />
                        <label for="menuName"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Menu name
                        </label>
                    </div>
                    <div class="relative">
                        <input type="number" name="price" id="price"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"
                            placeholder=" " />
                        <label for="price"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Price
                        </label>
                    </div>

                    <div class="relative">
                        <Textarea name="description" id="description" rows="4"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-600 rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 peer"></Textarea>

                        <label for="description"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300   top-2 z-10 origin-[0] bg-gray-50 dark:bg-gray-600 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                            Description
                        </label>
                    </div>



                    <div x-data="fileUpload" :class="imageUrl && 'border-blue-600 dark:border-blue-500'"
                        class="flex justify-center items-center border-2 border-gray-300 hover:border-blue-500 hover:bg-gray-300 dark:hover:bg-gray-800 hover:bg-opacity-25 dark:border-dark-line border-dashed rounded-md h-48 overflow-y-hidden">
                        <template x-if="!imageUrl">
                            <label class="space-y-1 cursor-pointer text-center px-6 pt-5 pb-6 w-full" for="post_image">
                                <svg aria-hidden="true" class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 48 48">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </svg>
                                <div class="text-sm text-gray-600 dark:text-gray-400">
                                    <label class="relative bg-transparent rounded-md font-medium text-blue-600 dark:text-blue-500">
                                        <p class="text-gray-500 dark:text-white space-y-1">
                                            <span class="text-blue-600 dark:text-blue-500">Upload a file</span> or drag and drop
                                            <span class="block text-xs text-gray-500">PNG, JPG up to *MB</span>
                                        </p>
                                        {{-- File input moved outside of template so to not be overwritten by the x-if --}}
                                    </label>
                                </div>
                            </label>
                        </template>

                        <template x-if="imageUrl">
                            <div class="object-contain group relative">
                                <div class="hidden group-hover:flex absolute justify-center items-center m-auto text-white tracking-wider uppercase bg-transparent h-full w-full hover:bg-black/75 hover:cursor-pointer" x-on:click="imageUrl = ''">
                                    Remove
                                </div>
                                <img :src="imageUrl" alt="" x-bind:class="{ 'hidden': !imageUrl }">
                            </div>
                        </template>

                        <input class="sr-only" id="post_image" name="post_image" type="file" x-on:change="selectFile">
                        <input value="" id="post_header_delete" name="post_header_delete" type="hidden" />
                    </div>

                    <script>
                        document.addEventListener('alpine:init', () => {
                            Alpine.data('fileUpload', () => ({
                                imageUrl: '',
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
                    <button type="submit"class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Add Meal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
