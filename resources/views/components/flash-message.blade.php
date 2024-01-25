@if (session()->has('message'))
    <div x-show='show' x-data='{ show: true }' x-init="setTimeout(() => show = false, 3000)"
        class="fixed top-0 px-48 py-3 text-white transform -translate-x-1/2 shadow shadow-black/40 left-1/2 bg-laravel z-[10000]">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
