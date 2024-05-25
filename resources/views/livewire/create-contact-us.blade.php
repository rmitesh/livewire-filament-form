<div class="mt-6 w-full max-w-xl">

    <h4 class="text-4xl font-bold mb-4 text-center text-black">Filament Contact us</h4>

    <form wire:submit="create" autocomplete="off">
        {{ $this->form }}

        {{-- <button type="submit">
            Submit
        </button> --}}
        <div class="mt-3">
            {{ $this->saveFormActions }}
        </div>
    </form>

    <x-filament-actions::modals />
</div>
