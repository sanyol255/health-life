<x-main-layout>
    <header>
        <h2 class="text-center text-2xl">{{ $user->firstname }} {{ $user->lastname }}</h2>
    </header>
    <aside class="ml-6 m-2 bg-">
        <nav>
            <ul>
                <li><a href="#">Personal information</a></li>
                <li><a href="#">Health data</a></li>
                <li><a href="#">Workout statistic</a></li>
            </ul>
        </nav>
    </aside>
</x-main-layout>
