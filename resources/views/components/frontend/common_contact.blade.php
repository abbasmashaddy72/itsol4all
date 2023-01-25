<div class="container mt-16 md:mt-24">
    <div class="grid grid-cols-1 text-center">
        <h6 class="mb-2 text-sm font-bold text-indigo-600">{{ get_static_option('contact_title1') }}</h6>
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
            {{ get_static_option('contact_title2') }}</h3>

        <p class="max-w-xl mx-auto text-slate-400">{{ get_static_option('contact_excerpt') }}</p>

        <div class="mt-6">
            <a href="{{ route('contactUs') }}"
                class="mt-2 mr-2 text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700"><i
                    class="uil uil-phone"></i> Contact Us</a>
        </div>
    </div>
</div>
