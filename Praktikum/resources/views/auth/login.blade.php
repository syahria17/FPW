<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-pink-400 via-pink-300 to-green-300">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">
            
            <!-- Logo + Welcome Text -->
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo1.jpg') }}" alt="Logo" class="mx-auto w-20 h-20 mb-3">
                <h1 class="text-2xl font-bold text-gray-800">
                    Selamat Datang di {{ config('app.name') }}
                </h1>
                <p class="text-sm text-gray-500">Silakan login untuk melanjutkan</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-pink-500 focus:ring focus:ring-pink-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-pink-500 shadow-sm focus:ring-green-400" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-green-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <x-primary-button class="w-full justify-center py-2 text-lg rounded-lg bg-pink-500 hover:bg-green-500 transition-colors duration-300">
                    {{ __('Login') }}
                </x-primary-button>
            </form>

            <!-- Register Link -->
            <p class="mt-6 text-center text-sm text-gray-600">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-pink-600 hover:text-green-600 font-semibold">Daftar sekarang</a>
            </p>
        </div>
    </div>
</x-guest-layout>