<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
                style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px);box-shadow: 0 8px 32px rgba(0, 150, 136, 0.1);">
                <div class="p-6">
                    <div class="text-center" style="animation: fadeIn 0.5s ease-out;">
                        <i class="fas fa-check-circle text-6xl mb-4" style="color: #00bcd4;"></i>

                        <h3 class="text-2xl font-bold mb-2"
                            style="color: #009688; text-transform: uppercase;letter-spacing: 1px;">
                            {{ __('Email Verified Successfully!') }}
                        </h3>

                        <p class="mb-6"
                            style="color: #00838f;line-height: 1.6background: rgba(255, 255, 255, 0.95)border-radius: 15pxpadding: 1.5remmargin: 1.5rem 0box-shadow: 0 4px 15px rgba(0, 188, 212, 0.1);">
                            {{ __('Thank you for verifying your email address. You now have full access to all features. You can close this page.') }}
                        </p>
                        <div class="flex justify-center gap-4">
                            <a href="{{ route('profile.edit') }}"
                                class="inline-flex items-center px-4 py-2 rounded-[49px] transition-all duration-500"
                                style="background: linear-gradient(45deg, #00bcd4, #009688);color: #fff;font-weight: 600;text-transform: uppercase;width: 200px;height: 49px;display: flex;align-items: center;justify-content: center;">
                                <i class="fas fa-user-edit mr-2"></i>
                                {{ __('Update Profile') }}
                            </a>

                            <a href="{{ url('/') }}"
                                class="inline-flex items-center px-4 py-2 rounded-[49px] transition-all duration-500"
                                style="background: linear-gradient(45deg, #009688, #00bcd4);color: #fff;font-weight: 600;text-transform: uppercase;width: 200px;height: 49px;display: flex;align-items: center;justify-content: center;">
                                <i class="fas fa-home mr-2"></i>
                                {{ __('Go to website') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .rounded-[49px] {
                border-radius: 49px;
            }

            .rounded-[49px]:hover {
                box-shadow: 0 8px 20px rgba(0, 188, 212, 0.3);
                transform: translateY(-2px);
            }
        </style>
    @endpush
</x-app-layout>