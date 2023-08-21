<div class="w-full">
    {{-- <label for="{{ $name }}" class="text-sm capitalize m-0 p-0">{{ $label }}</label> --}}
    <input
        {{ $attributes->merge(['class' => 'w-full border-0 bg-gray-100 shadow-sm placeholder-gray-500 text-dark rounded-lg py-3 focus:border-1 focus:border-primary focus:outline-none placeholder-font-normal focus:bg-primary-light tt focus:ring-0 focus:border-secondary', 'type' => $type, 'name' => $name, 'id' => $name, 'placeholder'=> $label]) }} />
    @error($name)
    <span class="mb-2 text-red-600 text-sm pt-2">{{ $message }}</span>
    @enderror
</div>