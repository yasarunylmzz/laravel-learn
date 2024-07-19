@props(['name'])

@error($name)
<p {{ $attributes -> merge(['class'=>'text-xs text-red-500 font-semibold mt-2']) }}>{{ $message }}</p>
@enderror
