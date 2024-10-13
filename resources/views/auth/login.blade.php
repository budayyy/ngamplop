<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-2xl font-black text-black py-4 text-center">
        <h3>Masuk Akun Dulu</h3>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="my-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-base mb-2" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" placeholder="name@email.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="my-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-base mb-2" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="********" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between my-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-blue-500 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('ingat saya') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-blue-500 hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    href="{{ route('password.request') }}">
                    {{ __('Lupa kata sandi?') }}
                </a>
            @endif
        </div>

        <div class="my-4 w-full text-center">
            <button type="submit"
                class="py-2 bg-blue-500 rounded-md w-full text-white hover:bg-blue-600">Masuk</button>
        </div>
    </form>

    {{-- <div class="w-full my-4 flex justify-center items-center">
        <span class="w-full border border-gray-100"></span>
        <span class="px-4 text-sm">atau</span>
        <span class="w-full border border-gray-100"></span>
    </div> --}}

    {{-- <div class="my-4 w-full">
        <a href="{{ route('google.redirect') }}"
            class="w-full p-3 rounded-md bg-white border flex justify-center gap-2 hover:bg-gray-50">
            <img src="{{ asset('img/google-icon.png') }}" alt="google" class="w-6">
            Masuk dengan google
        </a>
    </div> --}}

    <div class="my-4 w-full text-center text-sm font-normal">
        <p>belum punya akun? <a href="{{ route('register') }}"
                class="text-blue-500 hover:text-blue-800 hover:underline">Buat Akun</a></p>
    </div>


</x-guest-layout>
