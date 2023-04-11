<x-main-layout :title="' - Registration'">
    <header class="mb-4 text-center">
        <h2 class="text-2xl">User registration</h2>
    </header>
    <form action="{{ route('auth.register') }}" method="POST" class="text-center">
        @csrf
        <div class="m-2">
            <label for="firstname">First name: </label><br>
            <input value="{{ old('firstname') }}" type="text" name="firstname" id="firstname" class="mt-2 border-solid border-2  border-green-600 rounded-md">
            <x-validation-error :field="'firstname'" />
        </div>
        <div class="m-2">
            <label for="lastname">Last name: </label><br>
            <input value="{{ old('lastname') }}" type="text" name="lastname" id="lastname" class="mt-2 border-solid border-2  border-green-600 rounded-md">
            <x-validation-error :field="'lastname'" />
        </div>
        <div class="m-2">
            <label for="email">Email: </label><br>
            <input value="{{ old('email') }}" type="email" name="email" id="email"  class=" mt-2 border-solid border-2  border-green-600 rounded-md">
            <x-validation-error :field="'email'" />
        </div>
        <div class="m-2">
            <label for="password">Password: </label><br>
            <input type="password" name="password" id="password"  class=" mt-2 border-solid border-2  border-green-600 rounded-md">
            <x-validation-error :field="'password'" />
        </div>
        <div class="m-2">
            <label for="password-confirmation">Password confirmation: </label><br>
            <input type="password" name="password_confirmation" id="password-confirmation"  class=" mt-2 border-solid border-2  border-green-600 rounded-md">
            <x-validation-error :field="'password_confirmation'" />
        </div>
        <div>
            <input type="submit" value="Register" class="bg-green-600 text-white w-60 h-8 mt-4 rounded-2xl hover:bg-green-900 hover:text-orange-300">
        </div>
    </form>
</x-main-layout>
