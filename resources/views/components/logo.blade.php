<a href="{{ route('admin.dashboard') }}" {{ $attributes->merge(['class' => 'flex ']) }}>
    <img alt="{{ config('app.name', 'Laravel') }} Logo" class="w-6"
        src="{{ asset('storage/' . get_static_option('logo')) }}">
    {{ $slot }}
</a>
