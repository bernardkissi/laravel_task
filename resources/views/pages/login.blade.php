@extends('layouts.default')

@section('content')
    <section class="grid grid-cols-2 grid-flow-row gap-4">
        <div class="mt-24">
            <h1 class="font-semibold text-4xl w-[350px]">Welcome Back!</h1>
            <div class="mt-12">
                @if (Session::has('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <p class="font-bold">Error!</p>
                        <p>{{ Session::get('error') }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <div class="grid grid-cols-1 grid-flow-row gap-4">
                        <div>
                            <input type='text' name="username"
                                class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                                placeholder="Enter username">
                            @if ($errors->has('username'))
                                <span class="text-xs text-red-500">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div>
                            <input type='password' name="password"
                                class="w-full p-3 mt-2 bg-white border border-gray-200 rounded-lg"
                                placeholder="Enter password">
                            @if ($errors->has('password'))
                                <span class="text-xs text-red-500">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <button class="w-full mt-8 p-3 bg-green-400 rounded-lg text-white">Access account</button>

                </form>

                <p class="mt-2 text-gray-400">Dont have an account <a class="text-gray-700 hover:text-green-600"
                        href="{{ route('register') }}">Register</a></p>
                <p class="mb-8 mt-2 text-gray-400">Forgot Password <a class="text-gray-700 hover:text-green-600"
                        href="#">Reset Password</a></p>
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
