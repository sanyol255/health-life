<x-main-layout :title="' - Workout Exercises'">
    <x-flash-success />
    <header>
        <h2 class="text-2xl text-center">Workout exercises</h2>
        <section class="flex flex-row justify-center mt-6 space-x-32">
            <span class="bg-[#0275d8] text-white p-3 rounded-md hover:bg-[#034680] hover:text-orange-300"><a href="{{ route('pushups.index') }}">Pushups</a></span>
            <span class="bg-[#5cb85c] text-white p-3 rounded-md hover:bg-[#0c570c] hover:text-orange-300"><a href="#">Pullups</a></span>
            <span class="bg-[#467fd0] text-white p-3 rounded-md hover:bg-[#034680] hover:text-orange-300"><a href="#">Squats</a></span>
            <span class="bg-[#c30] text-white p-3 rounded-md hover:bg-[#802000] hover:text-orange-300"><a href="{{ route('workout.statistic') }}">Statistics</a></span>
        </section>
    </header>
</x-main-layout>
