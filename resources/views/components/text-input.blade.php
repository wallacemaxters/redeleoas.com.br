@props(['label'])
<div>
    <label class="block text-xs font-bold uppercase mb-2 text-verde-oliva">{{ $label }}</label>
    <input {{ $attributes->merge(['type' => 'text']) }} class="w-full p-4 border border-verde-oliva/20 rounded-md bg-white/50 focus:outline-none focus:border-terracota transition">
</div>
