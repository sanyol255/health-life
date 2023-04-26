<x-main-layout :title="' - Articles'">
    <header>
        <h2 class="text-2xl text-center">Articles</h2>
    </header>
    <aside class="text-right mr-12">
        <a href="{{ route('articles.create') }}" class="bg-[#c30] text-white p-3 rounded-full hover:bg-[#802000] hover:text-orange-300 text-end">Add Article</a>
    </aside>
</x-main-layout>
