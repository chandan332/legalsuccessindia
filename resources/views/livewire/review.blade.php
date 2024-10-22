<section>
    @if (session()->has('message'))
        <div x-data="{ open: @entangle('open') }">
            <div x-show="open" x-transition>
                <div id="toast-success"
                    class="tw-flex tw-items-center tw-w-full tw-max-w-xs tw-p-4 mx-auto tw-mb-4 tw-text-gray-500 tw-bg-white tw-rounded-lg tw-shadow dark:tw-text-gray-400 dark:tw-bg-gray-800"
                    role="alert">
                    <div
                        class="tw-inline-flex tw-items-center tw-justify-center tw-flex-shrink-0 tw-w-8 h-8 tw-text-green-500 tw-bg-green-100 tw-rounded-lg dark:tw-bg-green-800 dark:tw-text-green-200">
                        <svg class="tw-w-5 tw-h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="tw-sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">

                        {{ session('message') }}

                    </div>
                    <button type="button" @click="open = !open; $wire.toggle()"
                        class="tw-ms-auto tw--mx-1.5 tw--my-1.5 tw-bg-white tw-text-gray-400 hover:tw-text-gray-900 tw-rounded-lg focus:tw-ring-2 focus:tw-ring-gray-300 tw-p-1.5 hover:tw-bg-gray-100 tw-inline-flex tw-items-center tw-justify-center tw-h-8 tw-w-8 dark:tw-text-gray-500 dark:hover:tw-text-white dark:tw-bg-gray-800 dark:hover:tw-bg-gray-700"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="tw-w-3 tw-h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="md:tw-w-2/3 m-auto">
        <div class="tw-mb-6">
            <label for="name"
                class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Full
                Name</label>
            <input type="text" id="name" wire:model.blur="name"
                class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Jhon Abram" required />
            <span class="tw-text-red-500">
                @error('name')
                    {{ $message }}
                @enderror
                </sapn>
        </div>
        <div class="tw-mb-6">
            <label for="stars"
                class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Review
                Stars</label>
            <input type="number" id="stars" wire:model.blur="stars" min="1" max="5" value="5"
                class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                required />
            <sapn class="tw-text-red-500">
                @error('stars')
                    {{ $message }}
                @enderror
            </sapn>
        </div>
        <div class="tw-mb-6">
            <label class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white"
                for="photo">Upload Image</label>
            <input
                class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                id="photo" wire:model.blur="photo" type="file" accept="image/png, image/jpg, image/jpeg"
                required>
            <sapn class="tw-text-red-500">
                @error('photo')
                    {{ $message }}
                @enderror
            </sapn>
        </div>
        <div class="tw-mb-6">
            <div wire:loading wire:target="photo">

                <div role="status">
                    <svg aria-hidden="true"
                        class="tw-w-8 tw-h-8 tw-text-gray-200 tw-animate-spin dark:tw-text-gray-600 tw-fill-blue-600"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>

            </div>
            @if ($photo)
                <img class="tw-w-24 tw-h-24" src="{{ $photo->temporaryUrl() }}">
            @endif
        </div>
        <div class="tw-mb-6">
            <label for="message"
                class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Your
                Message</label>
            <textarea id="message" wire:model.blur='message' rows="4"
                class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Write your thoughts here..." required></textarea>
            <sapn class="tw-text-red-500">
                @error('message')
                    {{ $message }}
                @enderror
            </sapn>
        </div>
        <button type="submit"
            class="tw-bg-blue-500 tw-text-white tw-py-2 tw-px-4 tw-rounded tw-font-bold tw-w-full">Submit</button>
    </form>
</section>
