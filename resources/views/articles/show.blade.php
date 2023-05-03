<x-main-layout :title="' - Article Details'">
    <header>
        <h2 class="flex justify-center space-x-4 mb-4 text-xl">
            {{ $article->title }}
            @can('update', $article)
                <a href="{{ route('articles.edit', $article->id) }}" class="mt-2 ml-4 hover:text-teal-600">
                    <x-icon-edit />
                </a>
            @endcan
            @can('destroy', $article)
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="mt-1 hover:text-teal-600">
                    @csrf
                    @method('delete')
                    <button class="delete-btn"><x-icon-delete /></button>
                </form>
            @endcan
        </h2>
    </header>
    <section>
        <article class="ml-6 mr-4">
            <p class="indent-12 mb-1">{{ $article->body }}</p>
            <span class="float-left">Author: {{ $article->author->firstname }} {{ $article->author->lastname }}</span><span class="float-right">Date: {{ $article->created_at->format('M d, Y H:i') }}</span>
        </article>
    </section>
</x-main-layout>
