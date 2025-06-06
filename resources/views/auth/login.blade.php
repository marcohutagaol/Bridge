<x-guest-layout>
    <form method="POST" action="{{ route('login') }}" class="sign-in-form">
        @csrf
        <h2 class="title">{{ __('Login') }}</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" required autocomplete="current-password"
                placeholder="{{ __('Password') }}" />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <div class="remember-me">
            <input id="remember_me" type="checkbox" name="remember">
            <span>{{ __('Remember me') }}</span>
        </div>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <button type="submit" class="btn">
            {{ __('Log in') }}
        </button>

        <a href="{{ route('register') }}" class="text-sm" style="margin-top: 1rem;">
            {{ __("Don't have an account?") }}
        </a>
    </form>
</x-guest-layout>