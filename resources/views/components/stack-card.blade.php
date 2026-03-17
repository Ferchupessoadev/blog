<div class="group bg-[#0b1220] border border-cyan-500/10 rounded-xl p-5 
    fade-up opacity-0 translate-y-4 
    transition-opacity transition-transform duration-700 
    hover:transition-transform hover:duration-200 
    hover:border-cyan-400/40 hover:shadow-lg hover:shadow-cyan-500/10">

    <!-- filename -->
    <div class="text-xs text-gray-500 mb-2">
        {{ $title }}.sh
    </div>

    <!-- command -->
    <div class="text-green-400 text-sm mb-3">
        $ stack --{{ $title }}<span class="animate-pulse">_</span>
    </div>

    <!-- items -->
    <ul class="space-y-1 text-gray-300 text-sm">
        @foreach ($items as $item)
            <li>> {{ $item }}</li>
        @endforeach
    </ul>
</div>