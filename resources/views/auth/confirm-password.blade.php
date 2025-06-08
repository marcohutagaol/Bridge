<x-guest-layout>
    <form class="sign-in-form" method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <h2 class="title">{{ __('Confirm Password') }}</h2>

        <div style="
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.1);
            color: #00838f;
            text-align: center;
            line-height: 1.6;">
            {{ __('This is a secure area. Please confirm your password before continuing.') }}
        </div>

        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <button type="submit" class="btn">
            <i class="fas fa-check" style="margin-right: 8px;"></i>
            {{ __('Confirm') }}
        </button>
    </form>
</x-guest-layout>