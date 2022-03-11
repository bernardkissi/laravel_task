@extends('layouts.default')

@section('content')
    <section class="grid grid-cols-2 grid-flow-row gap-4">
        <div>
            <h1 class="font-semibold text-4xl w-[350px]">Become a part of the Luxe Tribes!</h1>
            <div class="mt-12">
                <div class="flex items-start space-x-3">
                    <svg class="w-24 h-24 fill-color text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <form>
                        <div class="flex flex-col">
                            <span class="mt-4 text-xl font-base">Add your photo <span
                                    class="text-gray-400">(optional)</span></span>
                            <p class="mt-2 text-sm font-normal text-gray-400">Supported format: jpg, jpeg, png</p>
                            <div>
                                <label
                                    class="flex items-center space-x-4 mt-2 mx-auto pl-3 py-1 bg-white rounded-full bg-gray-100">
                                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                    </svg>
                                    <span class="text-base leading-normal">Upload a photo</span>
                                    <input type='file' class="hidden" />
                                </label>
                            </div>
                        </div>
                </div>
                <hr class="border border-gray-100 mt-6 mb-4">
                <div class="grid grid-cols-2 grid-flow-row gap-4">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter fullname">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter username">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter date of birth">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter email address">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter nationality">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter mobile number">
                    <input type='text' class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                        placeholder="Enter password">
                </div>
                <div class="mt-8">
                    <textarea class="w-full p-3 border border-200 rounded-lg" rows="6" cols="10"
                        placeholder="Tell us about you(optional)"></textarea>
                </div>
                <button class="w-full mt-8 p-3 bg-green-400 rounded-lg text-white">Create my account</button>

                </form>

                <p class="mb-8 mt-2 text-gray-400">Already have an account <a class="text-gray-700 hover:text-green-600"
                        href="#">log
                        in your account</a></p>
            </div>
        </div>
        <div class="relative">
            <div class="absolute w-full inset-y-0 -right-[135px] h-[751px] bg-gray-100 rounded-xl -z-1">
            </div>
            <div class="absolute top-32 -right-[10px] flex items-center space-x-12 z-10">
                <div>
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1536731578915-ab4e400a6395?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8Y2l0eSxuaWdodHx8fHx8fDE2NDcwMDY0NzA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080"
                        alt="" width="300" height="250">
                </div>
                <div class="flex flex-col space-y-12">
                    <div>
                        <img class="rounded-lg"
                            src="https://images.unsplash.com/photo-1536731578915-ab4e400a6395?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8Y2l0eSxuaWdodHx8fHx8fDE2NDcwMDY0NzA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080"
                            alt="" width="150" height="100">
                    </div>
                    <div>
                        <img class="rounded-lg"
                            src="https://images.unsplash.com/photo-1536731578915-ab4e400a6395?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8Y2l0eSxuaWdodHx8fHx8fDE2NDcwMDY0NzA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080"
                            alt="" width="150" height="100">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
