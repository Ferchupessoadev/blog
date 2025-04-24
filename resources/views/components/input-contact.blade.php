@props(['type' => 'text', 'name', 'placeholder', 'value' => ''])

<input
    class="p-2 w-full bg-slate-800 rounded-md focus:outline-none focus:border-slate-400 border-2 border-transparent"
    type="{{ $type }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ $value }}"
>
