@if(session()->has('failure'))
    <div class="bg-rose-600 rounded w-full h-12 mt-2 mb-2">
        <div class="text-white text-center pt-3">
            {{ session('failure') }}
        </div>
    </div>
@endif
