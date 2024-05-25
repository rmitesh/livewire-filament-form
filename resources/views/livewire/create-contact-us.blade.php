<div class="mt-6 w-full max-w-xl">

    <h4 class="text-4xl font-bold mb-4 text-center text-black">Filament Contact us</h4>

    <form wire:submit="create" autocomplete="off">
        {{ $this->form }}

        {{-- <button type="submit">
            Submit
        </button> --}}
        <div class="mt-3 flex gap-3">
            {{ $this->saveFormActions }}

            <a href="{{ route('welcome') }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Back</a>
        </div>
    </form>

    <x-filament-actions::modals />
</div>
