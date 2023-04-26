<x-main-layout :title="' - Articles'">
    <x-flash-success />
    <header>
        <h2 class="text-2xl text-center mb-4">Articles</h2>
    </header>
    <aside class="text-right mr-12">
        <a href="{{ route('articles.create') }}" class="bg-[#c30] text-white p-3 rounded-full hover:bg-[#802000] hover:text-orange-300 text-end">Add Article</a>
    </aside>
    <main class="mt-6 ml-8 mr-6">
        <section>
            @foreach($articles as $article)
                <article class="mb-4">
                    <h2 class="text-center text-xl mb-2">
                        <a href="#" class="hover:text-teal-600">{{ $article->title }}</a>
                    </h2>
                    <p class="indent-12">{{ $article->body}}</p>
                </article>

            @endforeach
        </section>
    </main>
</x-main-layout>
