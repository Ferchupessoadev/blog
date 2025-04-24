<div class="flex justify-center">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="text-red-400 text-sm">{{ $error }}</p>
        @endforeach
    @endif
</div>
