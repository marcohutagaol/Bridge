<x-guest-layout>
    <form class="sign-in-form" method="POST" action="{{ route('password.store') }}">
        @csrf
        <h2 class="title">{{ __('Reset Password') }}</h2>

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" :value="old('email', $request->email)" required autofocus
                autocomplete="username" placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" required autocomplete="new-password"
                placeholder="{{ __('New Password') }}" />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_confirmation" required autocomplete="new-password"
                placeholder="{{ __('Confirm Password') }}" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
        </div>

        <button type="submit" class="btn">
            <i class="fas fa-key" style="margin-right: 8px;"></i>
            {{ __('Reset Password') }}
        </button>

        <a href="{{ route('login') }}" class="text-sm" style="margin-top: 1rem;">
            {{ __('Back to Login') }}
        </a>
    </form>
</x-guest-layout>