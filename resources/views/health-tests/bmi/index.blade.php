<x-main-layout>
    <header>
        <h1 class="text-2xl text-center mb-3">Body mass index</h1>
    </header>
    <main>
        <section class="ml-6 mr-4">
            <article>
                <p class="indent-12">
                    <strong>Body mass index (BMI)</strong> is a value derived from the mass (weight) and height of a person.
                    The BMI is defined as the body mass divided by the square of the body height,
                    and is expressed in units of kg/m<sup>2</sup>, resulting from mass in kilograms and height in metres.
                </p>
                <p class="indent-12">The BMI is a convenient rule of thumb used to broadly categorize a person as underweight,
                    normal weight, overweight, or obese based on tissue mass (muscle, fat, and bone) and height.
                    Major adult BMI classifications are underweight (under 18.5 kg/m<sup>2</sup>), normal weight (18.5 to 24.9),
                    overweight (25 to 29.9), and obese (30 or more). When used to predict an individual's health,
                    rather than as a statistical measurement for groups, the BMI has limitations that can make it less
                    useful than some of the alternatives, especially when applied to individuals with abdominal obesity,
                    short stature, or unusually high muscle mass.
                </p>
            </article>
        </section>

        <section class="text-center">
            <h2>Enter your body weight and height:</h2>
            <form action="{{ route('bmi.store') }}" method="POST">
                @csrf
                <div class="mt-2">
                    <label for="weight">Weight(kg)</label><br>
                    <input type="number" id="weight" name="weight" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md" step="0.1" placeholder="Weight in kgs, f. ex. 65.5">
                </div>
                <div class="mt-2">
                    <label for="height">Height(m)</label><br>
                    <input type="number" id="height" name="height" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md" step="0.01" placeholder="Height in meters, f. ex. 1.75">
                </div>
                <div>
                    <input type="submit" value="Calculate BMI" class="bg-green-600 text-white w-60 h-8 mt-4 rounded-2xl hover:bg-green-900 hover:text-orange-300">
                </div>
            </form>
        </section>
    </main>
</x-main-layout>
