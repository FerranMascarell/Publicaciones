    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Formulario
                    <x-input-error class="mb-4" :messages="$errors->get('body')"/>
                    <x-session-status class="mb-4" :status="session('status')" />
                    <form action="{{route('posts.store') }}"method="POST">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="body" :value="__('Body')" />
                            <x-textarea class="block mt-1 w-full"  name="body"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">           
                            <x-primary-button>
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
