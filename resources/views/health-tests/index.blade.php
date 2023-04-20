<x-main-layout :title="' - Health Tests'">
    <x-flash-success />
    <header>
        <h1 class="text-2xl text-center">Health tests</h1>
        <section class="flex flex-row justify-center mt-6 space-x-32">
            <span class="bg-[#0275d8] text-white p-3 rounded-md hover:bg-[#034680] hover:text-orange-300"><a href="{{ route('bmi.index') }}">Body Mass Index</a></span>
            <span class="bg-[#5cb85c] text-white p-3 rounded-md hover:bg-[#0c570c] hover:text-orange-300"><a href="#">Test Ruffier</a></span>
            <span class="bg-[#467fd0] text-white p-3 rounded-md hover:bg-[#034680] hover:text-orange-300"><a href="#">Hypoxia Test</a></span>
        </section>
    </header>
</x-main-layout>
