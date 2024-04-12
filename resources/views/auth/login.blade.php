<x-guest-layout>
    <!-- Session Status -->
    {{--<x-auth-session-status class="mb-4" :status="session('status')" />--}}

    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 backdrop-blur-[100px] bg-gradient-to-tr from-blue-200/0 to-blue-100 bg-opacity-60 z-50 relative"
         style="background: linear-gradient(90deg, rgba(255,255,255,0.1) 2px, transparent 1%) center, linear-gradient(rgba(255,255,255,0.1) 2px, transparent 1%) center, transparent; background-size: 15px 15px;">
        <div class="max-w-md w-full space-y-8 bg-white md:bg-white/40 backdrop-blur-3xl p-12 rounded-lg shadow-[rgba(37,99,235,_0.2)_0px_60px_140px_-7px]">
            <div>
                <div class="flex">
                    <img class="mx-auto h-auto w-10/12" src="{{ asset('images/layout/logo.png') }}" alt="Workflow">
                </div>

                <h2 class="pt-12 text-center text-3xl font-black text-gray-900">
                    Sign in to MyVC Portal
                </h2>
            </div>


            @if (\Session::has('error'))
                <div class="border border-amber-200 bg-amber-100 rounded text-sm text-center p-4 flex items-start justify-center gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>
                    <h1 class="text-left">{!! \Session::get('error') !!}</h1>
                </div>
            @endif


            <form method="post" action="{{ route('login.user') }}" class="flex flex-col mt-6 gap-y-2">
                @csrf
                <div class="w-full flex items-center justify-center">
                    <div class="w-full">
                        <x-input label="Email" placeholder="your name" name="email" id="email" hint="The college provided email" />
                    </div>
                </div>

                <div class="w-full flex items-center justify-center">
                    <div class="w-full">
                        <x-input type="password" label="Password" name="password" id="password" required autocomplete="current-password" />
                    </div>
                </div>

                <div class="w-full flex items-center justify-center mt-4">
                    <button type="submit" class="group relative w-full flex justify-between py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-tr from-lime-700 hover:from-lime-800 to-green-500 hover:to-green-700 transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </form>

        </div>
    </div>

    <img src="{{ asset('images/layout/login_bg.svg') }}" class="scale-[2000%] absolute left-64 bottom-0 z-10" alt="">

    {{--<form method="POST" action="{{ route('login.user') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input label="Email" name="email" id="email" value="{{old('email')}}" placeholder="your email" required autofocus autocomplete="username" />
            --}}{{--<x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}{{--
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-inputs.password id="password" name="password" label="Password" required autocomplete="current-password"  />
            --}}{{--<x-input-label for="password" :value="__('Password')" />


            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}{{--
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button type="submit" primary label="Log in" />
            --}}{{--<x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>--}}{{--
        </div>
    </form>--}}
</x-guest-layout>
