<x-guest-layout>
    <form class="sign-in-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <h2 class="title">{{ __('Forgot Password') }}</h2>

        <div style="
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.1);
            color: #00838f;
            text-align: center;
            line-height: 1.6;">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.') }}
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" :value="old('email')" required autofocus placeholder="{{ __('Email') }}" />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <button type="submit" class="btn">
            <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>
            {{ __('Send Reset Link') }}
        </button>

        <a href="{{ route('login') }}" class="text-sm" style="margin-top: 1rem;">
            {{ __('Back to Login') }}
        </a>
    </form>
</x-guest-layout>