<x-main-layout>
    <header>
        <h2 class="text-2xl text-center">Create article</h2>
    </header>
    <main>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="text-center mt-4">
                <label for="title">Title: </label><br>
                <input type="text" name="title" value="{{ old('title') }}" id="title" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">
                <x-validation-error :field="'title'" />
            </div>
            <div class="text-center mt-4">
                <label for="body">Article text: </label><br>
                <textarea name="body" id="body" cols="40" rows="10" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">{{ old('body') }}</textarea>
                <x-validation-error :field="'body'" />
            </div>
            <div class="text-center mt-4">
                <input type="submit" value="Add article" class="cursor-pointer bg-[#0275d8] text-white w-60 h-8 mt-4 rounded-2xl hover:bg-[#034680] hover:text-orange-300">
            </div>
        </form>
    </main>
</x-main-layout>
