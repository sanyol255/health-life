<x-main-layout :title="' - Health Tests Results'">
    <header>
        <h2 class="text-2xl text-center mb-4">Health tests results</h2>
    </header>
    <main>
        <table class="table-auto m-auto border-solid border-amber-800 border-2">
            <thead>
                <tr>
                    <th class="border-solid border-amber-800 border-2 p-2 text-center">Test name</th>
                    <th class="border-solid border-amber-800 border-2 p-2 text-center">Test result value</th>
                    <th class="border-solid border-amber-800 border-2 p-2 text-center">Test result description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">Body mass index</td>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $bmi->value ?? '' }}</td>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $bmi->description ?? '' }}</td>
                </tr>
                <tr>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">Ruffier index</td>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $ruffierIndex->value ?? '' }}</td>
                    <td class="border-solid border-amber-800 border-2 p-2 text-center">{{ $ruffierIndex->description ?? '' }}</td>
                </tr>
            </tbody>
        </table>
    </main>
</x-main-layout>
