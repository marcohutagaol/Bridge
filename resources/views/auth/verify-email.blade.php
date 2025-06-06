<x-guest-layout>
    <div class="sign-in-form" style="max-width: 500px;">
        <h2 class="title">{{ __('Verify Your Email') }}</h2>

        <div style="
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.1);
            color: #00838f;
            line-height: 1.6;">
            <p style="margin-bottom: 0;">
                {{ __('Thanks for signing up! Please verify your email address by clicking on the link we just emailed to you.') }}
            </p>
            <p style="margin-top: 1rem; margin-bottom: 0;">
                {{ __('If you didn\'t receive the email, click below to request another one.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div style="
                background: rgba(0, 150, 136, 0.1);
                border-radius: 10px;
                padding: 1rem;
                margin-bottom: 1.5rem;
                color: #009688;
                font-weight: 500;
                text-align: center;
                animation: fadeIn 0.5s ease-in-out;">
                {{ __('A new verification link has been sent to your email address.') }}
            </div>
        @endif

        <div style="width: 100%; display: flex; flex-direction: column; gap: 1rem; align-items: center;">
            <form method="POST" action="{{ route('verification.send') }}" style="width: 100%; max-width: 250px;">
                @csrf
                <button type="submit" class="btn" style="width: 100%;">
                    <i class="fas fa-envelope" style="margin-right: 8px;"></i>
                    {{ __('Resend Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" style="width: 100%; max-width: 250px;">
                @csrf
                <button type="submit" class="btn" style="
                    width: 100%;
                    background: linear-gradient(45deg, #ef5350, #e53935);
                    transition: all 0.3s ease;">
                    <i class="fas fa-sign-out-alt" style="margin-right: 8px;"></i>
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</x-guest-layout>