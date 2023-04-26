<x-main-layout :title="' - Pullups'">
    <header>
        <h2 class="text-2xl text-center">Pullups</h2>
    </header>
    <main>
        <section>
            <form action="{{ route('pullups.store') }}" method="POST">
                @csrf
                <div class="text-center mt-4">
                    <label for="amount">Amount of pullups: </label><br>
                    <input type="number" name="amount" id="amount" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">
                    <x-validation-error />
                </div>
                <div class="text-center mt-4">
                    <input type="submit" value="Save result" class="cursor-pointer bg-green-600 text-white w-60 h-8 mt-4 rounded-2xl hover:bg-green-900 hover:text-orange-300">
                </div>
            </form>
        </section>
    </main>
</x-main-layout>
