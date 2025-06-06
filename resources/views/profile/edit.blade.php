<x-app-layout>

     <div class="py-10 bg-gray-100 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 space-y-8">
            <div class="bg-white rounded-lg shadow p-8">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="bg-white rounded-lg shadow p-8">
                @include('profile.partials.update-password-form')
            </div>
            <div class="bg-white rounded-lg shadow p-8">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>