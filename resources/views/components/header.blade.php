<header class="bg-gray- shadow">

    {{-- @if (Auth::check())
    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">hallo, {{ Auth::user()->name }}!</h1>
    </div>
    @endif --}}
    <div class="mx-auto max-w-12xl px-4 py-4 sm:px-6 lg:px-8">
        @if (Auth::check())
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">Hallo {{ Auth::user()->username }}, Selamat Datang Di ELIX BOOK</h1>
        @endif
    </div>

</header>
{{-- {{ Auth::user()->name }} --}}
