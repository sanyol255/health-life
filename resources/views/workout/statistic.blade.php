<x-main-layout :title="' - Workout Statistic '">
    <header>
        <h2 class="text-2xl text-center">Workout Statistic</h2>
    </header>
    <main>
        <table class="table-auto m-auto mt-4 border-solid border-amber-800 border-2">
            <thead>
                <tr>
                    <th class="text-center" colspan="4">Pushups</th>
                </tr>
                <tr>
                    <th class="border-solid border-amber-800 border-2 p-2 text-center">Regular</th>
                    <th class="border-solid border-amber-800 border-2 p-2 text-center">Wide</th>
                    <th class="border-solid border-amber-800 border-2 p-2 text-center">Date and time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pushups as $record)
                <tr>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $record->regular }}</td>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $record->wide }}</td>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $record->created_at->format('M d, Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</x-main-layout>
