<x-main-layout :title="' - Article Details'">
    <header>
        <h2 class="text-2xl text-center mb-4">Article details</h2>
    </header>
    <section>
        <article class="general-advice">
            <h2 class="flex justify-center space-x-4 mb-4 text-xl">
                {{ $article->title }}
                <a href="{{ route('articles.edit', $article->id) }}" class="mt-2 ml-6 hover:text-teal-600">
                    <x-icon-edit />
                </a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="mt-1 ml-6 hover:text-teal-600">
                    @csrf
                    @method('delete')
                    <button class="delete-btn"><x-icon-delete /></button>
                </form>
            </h2>
            <p class="ml-6 mr-4 indent-12">{{ $article->body }}</p>

        </article>
    </section>
</x-main-layout>
