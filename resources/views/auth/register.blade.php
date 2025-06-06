<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="sign-up-form">
        @csrf
        <h2 class="title">{{ __('Register') }}</h2>

        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                placeholder="{{ __('Name') }}" />
            <x-input-error :messages="$errors->get('name')" class="error-message" />
        </div>

        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" required autocomplete="new-password"
                placeholder="{{ __('Password') }}" />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_confirmation" required autocomplete="new-password"
                placeholder="{{ __('Confirm Password') }}" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
        </div>

        <button type="submit" class="btn">
            {{ __('Register') }}
        </button>

        <a href="{{ route('login') }}" class="text-sm" style="margin-top: 1rem;">
            {{ __('Already registered?') }}
        </a>
    </form>
</x-guest-layout>