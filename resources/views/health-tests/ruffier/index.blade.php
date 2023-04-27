<x-main-layout :title="' - Ruffier Test'">
    <header>
        <h2 class="text-2xl text-center">Ruffier Test</h2>
    </header>
    <main>
        <section class="ml-6 mr-4">
            <article class="container tests-info">
                <p class="indent-12"><strong>Ruffier test</strong> is a simple and universal method for checking your heart condition, developed by the french doctor
                    James Ruffier(1875 - 1964), and is often used in sport medicine or in physical rehabilitation for checking person's
                    conditions.</p>
            </article>
        </section>

        <section>
            <form action="{{ route('ruffier.index') }}" method="POST">
                @csrf
                <h3 class="text-xl text-center mt-2 mb-2">Steps for the test</h3>
                <ol class="ml-12 list-decimal">
                    <li>Lie down on the back, and rest for 5 minutes</li>
                    <li>Check your pulse for 15 seconds and enter the value to form field:
                        <div>
                            <label for="pulse_1">Pulse 1: </label>
                            <input type="number" name="pulse_1" id="pulse_1" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">
                        </div>
                    </li>
                    <li>Now make 30 squates in 30 seconds</li>
                    <li>Lie down, check pulse for 15 second and enter in the form field:
                        <div>
                            <label for="pulse_2">Pulse 2: </label>
                            <input type="number" name="pulse_2" id="pulse_2" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">
                        </div>
                    </li>
                    <li>Wait for 30 seconds</li>
                    <li>Check pulse again and enter in the form field:
                        <div>
                            <label for="pulse_3">Pulse 3: </label>
                            <input type="number" name="pulse_3" id="pulse_3" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">
                        </div>
                    </li>
                </ol>
                <div>
                    <input type="submit" value="Calculate Ruffier index" class="cursor-pointer ml-8 bg-green-600 text-white w-60 h-8 mt-4 rounded-2xl hover:bg-green-900 hover:text-orange-300">
                </div>
            </form>
        </section>
    </main>
</x-main-layout>
