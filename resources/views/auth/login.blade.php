<x-main-layout :title="' - Log In'">
    <header class="mb-4 text-center">
        <h2 class="text-2xl">User log in</h2>
    </header>
    <form action="{{ route('auth.login') }}" method="POST" class="text-center">
        @csrf
        <div class="m-2">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" class="mt-2 border-solid border-2  border-green-600 rounded-md">
        </div>
        <div class="m-2">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" class="mt-2 border-solid border-2  border-green-600 rounded-md">
        </div>
        <div>
            <input type="submit" value="Log in" class="bg-green-600 text-white w-60 h-8 mt-4 rounded-2xl hover:bg-green-900 hover:text-orange-300">
        </div>
    </form>
</x-main-layout>
