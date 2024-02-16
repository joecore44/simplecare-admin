<div
    x-data="{ open: false }"
    @open-slide-over.window="open = true"
    @keydown.escape.window="open = false"
>
    <!-- Trigger Button -->
    <button @click="open = true" class="px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
        Add New Client
    </button>

    <!-- Slide-Over Panel -->
    <div
        x-show="open"
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-0 z-50 overflow-hidden"
        aria-labelledby="slide-over-title"
        role="dialog"
        aria-modal="true"
    >
        <div class="absolute inset-0 overflow-hidden">
            <!-- Background overlay -->
            <div
                x-show="open"
                x-transition:enter="ease-in-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                @click="open = false"
            ></div>

            <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                <!-- Slide-over content -->
                <div class="w-screen max-w-md">
                    <div class="flex flex-col h-full overflow-y-scroll bg-white shadow-xl">
                        <div class="px-4 py-6 bg-indigo-700 sm:px-6">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                    Add New Client
                                </h2>
                                <div class="flex items-center ml-3 h-7">
                                    <button @click="open = false" class="text-indigo-200 bg-indigo-700 hover:text-white">
                                        <!-- Close button, add icon or text -->
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Form -->
                        <div class="relative flex-1 px-4 mt-6 sm:px-6">
                            <!-- Replace this part with your form -->
                            <form wire:submit.prevent="submit">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" wire:model="name" id="name" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div class="mt-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" wire:model="email" id="email" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <!-- Add more fields as necessary -->
                                <div class="mt-6">
                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save Client
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
