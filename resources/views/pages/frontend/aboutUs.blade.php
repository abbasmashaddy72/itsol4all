<x-guest-layout>
    <section class="relative py-16 md:py-24">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center
                    gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="grid items-center grid-cols-12 gap-6">
                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="{{ get_static_option('image1') }}" class="rounded-md shadow" alt="">
                                <img src="{{ get_static_option('image2') }}" class="rounded-md shadow" alt="">
                            </div>
                        </div>

                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="{{ get_static_option('image3') }}" class="rounded-md shadow" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ml-5">
                        <div class="flex mb-4">
                            <span class="mb-0 text-2xl font-bold text-indigo-600"><span
                                    class="text-6xl font-bold counter-value"
                                    data-target="{{ get_static_option('yoe') }}">1</span>+</span>
                            <span class="self-end ml-2 font-medium">Years
                                <br> Experience</span>
                        </div>

                        <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                            {{ get_static_option('wwa') }}</h3>

                        <p class="max-w-xl whitespace-pre-line text-slate-400">{{ get_static_option('description') }}
                        </p>

                        <div class="mt-6">
                            <a href="{{ route('contactUs') }}"
                                class="mt-2 mr-2 text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700"><i
                                    class="uil uil-envelope"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section class="relative py-16 pb-0 mb-16 md:py-24 bg-gray-50 dark:bg-slate-800 md:pb-0">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    {{ get_static_option('opt') }}</h3>
                <p class="max-w-xl mx-auto text-slate-400">{{ get_static_option('opt_excerpt') }}</p>
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                @foreach ($teams as $item)
                    <div class="lg:col-span-3 md:col-span-6">
                        <div
                            class="p-6 bg-white border border-gray-100 rounded-md team dark:border-gray-700 group dark:bg-slate-900">
                            <img src="assets/images/client/01.jpg"
                                class="w-24 h-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                            <div class="mt-4 content">
                                <a href=""
                                    class="block text-lg font-medium hover:text-indigo-600">{{ $item->name }}</a>
                                <span class="block text-slate-400">C.E.O.</span>
                                <p class="mt-4 text-slate-400">If the
                                    distribution of letters and 'words' is
                                    random</p>

                                <ul class="mt-4 list-none">
                                    <li class="inline"><a href=""
                                            class="border border-gray-100 rounded-md btn btn-icon btn-sm dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                                data-feather="facebook" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="border border-gray-100 rounded-md btn btn-icon btn-sm dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                                data-feather="instagram" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="border border-gray-100 rounded-md btn btn-icon btn-sm dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                                data-feather="twitter" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="border border-gray-100 rounded-md btn btn-icon btn-sm dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                                data-feather="linkedin" class="w-4 h-4"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
</x-guest-layout>
