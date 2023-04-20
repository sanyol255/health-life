<x-main-layout :title="' - Health Tests Results'">
    <header>
        <h2 class="text-2xl text-center">Health tests results</h2>
        <br>
        <h3 class="ml-3 text-xl"><b>Body mass index:</b> {{ $bmi->value }}. {{ $bmi->description }}</b></h3>
    </header>
</x-main-layout>
