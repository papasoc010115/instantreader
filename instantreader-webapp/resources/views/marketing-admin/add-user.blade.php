<x-guest-layout>
    @if(Auth::user()->getAdminType() === 'superuser')
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('marketing-site/admin-panel/img/logo.png') }}" alt="instant-reader-logo">
            </a>                
        </x-slot>  
        
        <div style="margin-bottom: 1rem;">
            <strong style="font-size: 1.5rem;">New User</strong>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('marketing-admin.user.create') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('marketing-admin.home') }}">
                    {{ __('Back to admin panel.') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Add User') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    @else
    <x-access-denied></x-access-denied>
    @endif
</x-guest-layout>
