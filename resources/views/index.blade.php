<x-main-layout :title="' - Main Page'">
    <x-flash-success />
    <header>
        <h1 class="text-3xl text-center">Welcome to Health Life, {{ auth()->user()->firstname ?? 'our dear guest'}}!</h1>
        <p class="text-center text-xl mt-4">
            @if(isset(auth()->user()->id))
                Glad to see you back!
            @else
                Join us, and become healthier!
            @endif
        </p>
    </header>
</x-main-layout>

