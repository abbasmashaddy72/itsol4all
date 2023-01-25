<x-guest-layout>
    <section
        class="relative table w-full py-36 pb-0 lg:py-44 lg:pb-0
            bg-indigo-600 bg-[url('assets/images/bg2.png')] bg-center
            bg-no-repeat">
        <div class="container">
            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1
                    items-center gap-[30px]">
                <div class="lg:col-span-7">
                    <div class="md:mr-6 md:mb-20">
                        <h4 class="mb-5 text-4xl font-semibold leading-normal text-white lg:leading-normal lg:text-5xl">
                            {{ get_static_option('tag_line') }}
                        </h4>
                        <p class="max-w-xl text-lg text-white/60">
                            {{ get_static_option('excerpt') }}
                        </p>
                    </div>
                </div>
                <!--end col-->

                <div class="mt-8 lg:col-span-5 md:mt-0">
                    <img src="{{ get_static_option('image') }}" alt="" />
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div
            class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0
                overflow-hidden z-1 text-gray-50 dark:text-slate-800">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720
                        0H0V48Z"
                    fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative py-16 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    {{ get_static_option('wwd') }}
                </h3>
                <p class="max-w-xl mx-auto text-slate-400">
                    {{ get_static_option('wwd_excerpt') }}
                </p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8
                    gap-[30px]">
                @foreach ($services as $item)
                    <div
                        class="relative p-6 overflow-hidden text-center transition-all duration-500 ease-in-out bg-white shadow group dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-xl dark:bg-slate-900">
                        <div class="relative -m-3 overflow-hidden text-transparent">
                            <i data-feather="hexagon"
                                class="w-24 h-24 mx-auto fill-indigo-600/5 group-hover:fill-white/10"></i>
                            <div
                                class="absolute left-0 right-0 flex items-center justify-center mx-auto text-3xl text-indigo-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 rounded-xl group-hover:text-white">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <p
                                class="text-lg font-medium transition-all duration-500 ease-in-out group-hover:text-white">
                                {{ $item->name }}</p>
                            <p
                                class="mt-3 transition-all duration-500 ease-in-out text-slate-400 group-hover:text-white/50">
                                {{ $item->excerpt }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section
        class="py-20 w-full table relative
            bg-[url('../../assets/images/team.jpg')] bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-4 text-2xl font-medium text-white md:text-3xl">
                    {{ get_static_option('video_title') }}
                </h3>

                <p class="max-w-xl mx-auto text-white/70">
                    {{ get_static_option('video_excerpt') }}
                </p>

                <a href="#!" data-type="youtube" data-id="{{ get_static_option('video_url') }}"
                    class="inline-flex items-center justify-center w-20 h-20 mx-auto mt-10 text-indigo-600 bg-white rounded-full shadow-lg dark:shadow-gray-800 dark:bg-slate-900">
                    <i class="inline-flex items-center justify-center text-2xl mdi mdi-play"></i>
                </a>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <section class="relative py-16 md:py-24">

        @livewire('frontend.pagination.project-pagination')

        @include('components.frontend.common_contact')
    </section>
</x-guest-layout>
