<section>
    <header>
        <h2 class="text-xl font-semibold text-primary">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-base text-gray-500">
            {{ __("Update your profile information") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-black" />
            <x-text-input id="name" name="name" type="text"
                class="mt-1 block w-full input input-bordered bg-white text-black focus:border-cyan-500 focus:ring-cyan-500"
                :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-black" />
            <x-text-input id="email" name="email" type="email"
                class="mt-1 block w-full input input-bordered bg-white text-black focus:border-cyan-500 focus:ring-cyan-500"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-warning">
                        {{ __('Email mu belum terverified!.') }}
                        <button form="send-verification"
                            class="underline text-sm text-primary hover:text-primary-focus rounded-md focus:outline-none">
                            {{ __('Klik disini untuk verify email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="btn btn-primary">{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-success">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>