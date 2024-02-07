<div class="{{ $col }}">
    <select wire:model='{{ $wireModel }}' id="select" class="form-select" aria-label="Default select example" name="{{ $name }}">
        <option value="null" disabled> {{ $defaultOption }}</option>
        @if ($options !== null)
        @foreach ($options as $option)
        <option {{ $wireModel ? 'selected' : '' }} value="{{ $option->id }}">{{ $option->$colName }}</option>
        @endforeach
        @endif
    </select>
    @error( $name ) <span class="error fw-light text-danger">{{ $message }}</span> @enderror
</div>