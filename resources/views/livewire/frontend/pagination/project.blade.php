<div class="container mt-16 md:mt-24">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($data as $item)
            <div class="p-4 rounded-md picture-item">
                <div class="">
                    <div class="relative">
                        <div
                            class="p-5 pb-0 rounded-md shadow dark:shadow-gray-800 bg-indigo-600/5 dark:bg-indigo-600/30">
                            <img src="{{ asset('storage/' . $item->getFirstMediaUrl()) }}" class="shadow rounded-t-md"
                                alt="">
                        </div>
                    </div>

                    <div class="px-3 pt-4">
                        <h5 class="mb-1 text-lg font-semibold">
                            <a href="{{ route('projectSingle') }}" target="_blank"
                                class="transition-all duration-500 ease-in-out hover:text-indigo-600">{{ $item->title }}</a>
                        </h5>
                        <span class="text-slate-400">{{ $item->excerpt }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($data->hasPages())
        <div class="grid grid-cols-1 mt-8 md:grid-cols-12">
            <div class="text-center md:col-span-12">
                {{ $data->links() }}
            </div>
        </div>
    @endif
</div>
