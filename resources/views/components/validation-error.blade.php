@props(['field'])
@error($field ?? null)
<p class="mt-1 text-red-700">{{ $message }}</p>
@enderror
