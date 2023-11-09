<x-guest-layout>
    <div class="text-2xl font-black text-black py-4 text-center">
        <h3>Buat Akun Dulu</h3>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" class="font-semibold text-base mb-2" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-base mb-2" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold text-base mb-2" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold text-base mb-2" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="my-4 w-full text-center">
            <button type="submit" class="py-2 bg-blue-500 rounded-md w-full text-white hover:bg-blue-600">Buat
                Akun</button>
        </div>

        <div class="w-full my-4 flex justify-center items-center">
            <span class="w-full border border-gray-100"></span>
            <span class="px-4 text-sm">atau</span>
            <span class="w-full border border-gray-100"></span>
        </div>

        <div class="my-4 w-full">
            <a href="{{ route('google.redirect') }}"
                class="w-full p-3 rounded-md bg-white border flex justify-center gap-2 hover:bg-gray-50">
                <img src="{{ asset('img/google-icon.png') }}" alt="google" class="w-6">
                Masuk dengan google
            </a>
        </div>

        <div class="my-4 w-full text-center text-sm font-normal">
            <p>Sudah punya akun? <a href="{{ route('login') }}"
                    class="text-blue-500 hover:text-blue-800 hover:underline">Login atuh</a></p>
        </div>

    </form>
</x-guest-layout>
