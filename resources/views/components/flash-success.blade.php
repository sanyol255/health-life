@if(session()->has('success'))
    <div class="bg-green-500">
        <div class="">
            {{ session('success') }}
        </div>
    </div>
@endif
