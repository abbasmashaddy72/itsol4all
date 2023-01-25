<x-guest-layout>
    <section class="relative py-16 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2
                    gap-[30px]">
                <div class="px-6 mt-6 text-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-800">
                        <i class="uil uil-phone"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Phone</h5>
                        <p class="mt-3 text-slate-400">{{ get_static_option('phone_excerpt') }}</p>
                        <div class="mt-5">
                            <a href="tel:{{ get_static_option('phone') }}"
                                class="text-indigo-600 duration-500 ease-in-out btn btn-link hover:text-indigo-600 after:bg-indigo-600">{{ get_static_option('phone') }}</a>
                        </div>
                    </div>
                </div>

                <div class="px-6 mt-6 text-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-800">
                        <i class="uil uil-envelope"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Email</h5>
                        <p class="mt-3 text-slate-400">{{ get_static_option('email_excerpt') }}</p>
                        <div class="mt-5">
                            <a href="mailto:{{ get_static_option('email') }}"
                                class="text-indigo-600 duration-500 ease-in-out btn btn-link hover:text-indigo-600 after:bg-indigo-600">{{ get_static_option('email') }}</a>
                        </div>
                    </div>
                </div>

                <div class="px-6 mt-6 text-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-800">
                        <i class="uil uil-map-marker"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Location</h5>
                        <p class="mt-3 text-slate-400">{{ get_static_option('location_excerpt') }}</p>
                        <div class="mt-5">
                            <a href="{{ get_static_option('maps_link') }}" data-type="iframe"
                                class="text-indigo-600 duration-500 ease-in-out video-play-icon read-more lightbox btn btn-link hover:text-indigo-600 after:bg-indigo-600">{{ get_static_option('location') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container mt-16 md:mt-24">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center
                    gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="{{ get_static_option('contact_image') }}" alt="">
                </div>

                <div class="mt-8 lg:col-span-5 md:col-span-6 md:mt-0">
                    <div class="lg:ml-5">
                        <div class="p-6 bg-white rounded-md shadow dark:bg-slate-900 dark:shadow-gray-800">
                            <h3 class="mb-6 text-2xl font-medium leading-normal">Get
                                in touch !</h3>

                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="mb-5 lg:col-span-6">
                                        <div class="text-left">
                                            <label for="name" class="font-semibold">Your
                                                Name:</label>
                                            <div class="relative mt-2 form-icon">
                                                <i data-feather="user" class="absolute w-4 h-4 top-3 left-4"></i>
                                                <input name="name" id="name" type="text"
                                                    class="form-input pl-11" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5 lg:col-span-6">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Your
                                                Email:</label>
                                            <div class="relative mt-2 form-icon">
                                                <i data-feather="mail" class="absolute w-4 h-4 top-3 left-4"></i>
                                                <input name="email" id="email" type="email"
                                                    class="form-input pl-11" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-left">
                                            <label for="subject" class="font-semibold">Your
                                                Question:</label>
                                            <div class="relative mt-2 form-icon">
                                                <i data-feather="book" class="absolute w-4 h-4 top-3 left-4"></i>
                                                <input name="subject" id="subject" class="form-input pl-11"
                                                    placeholder="Subject :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="text-left">
                                            <label for="comments" class="font-semibold">Your
                                                Comment:</label>
                                            <div class="relative mt-2 form-icon">
                                                <i data-feather="message-circle"
                                                    class="absolute w-4 h-4 top-3 left-4"></i>
                                                <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send"
                                    class="flex items-center justify-center text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
</x-guest-layout>
