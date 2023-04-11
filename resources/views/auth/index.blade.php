<x-main-layout>
    <header class="mt-20 mb-4 text-center">
        <h2 class="text-2xl">User registration</h2>
    </header>
    <form action="" class="text-center">
        <div class="m-2">
            <label for="firstname">First name: </label><br>
            <input type="text" name="firstname" id="firstname" class="mt-2 border-solid border-2  border-green-600 rounded-md">
        </div>
        <div class="m-2">
            <label for="lastname">Last name: </label><br>
            <input type="text" name="lastname" id="lastname" class="mt-2 border-solid border-2  border-green-600 rounded-md">
        </div>
        <div class="m-2">
            <label for="email">Email: </label><br>
            <input type="email" name="email" id="email"  class=" mt-2 border-solid border-2  border-green-600 rounded-md">
        </div>
        <div>
            <input type="submit" value="Register" class="bg-green-600 text-white w-60 h-8 mt-4 rounded-2xl hover:bg-green-900 hover:text-orange-300">
        </div>
    </form>
</x-main-layout>
