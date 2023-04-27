<x-main-layout :title="'Edit Article'">
    <header>
        <h2 class="text-2xl text-center">Edit article</h2>
    </header>
    <section>
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="text-center mt-4">
            <label for="title">Title: </label><br>
            <input type="text" name="title" value="{{ $article->title }}" id="title" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">
            <x-validation-error :field="'title'" />
        </div>
        <div class="text-center mt-4">
            <textarea name="body" id="body" cols="40" rows="10" class="pl-1 mt-2 border-solid border-2  border-green-600 rounded-md">{{ $article->body }}</textarea>
            <x-validation-error :field="'body'" />
        </div>
        <div class="text-center mt-4">
            <input type="submit" value="Update article" class="cursor-pointer bg-[#0275d8] text-white w-60 h-8 mt-4 rounded-2xl hover:bg-[#034680] hover:text-orange-300">
        </div>
        </form>
    </section>
</x-main-layout>
