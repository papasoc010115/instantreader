<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <img src="{{ asset('marketing-site/admin-panel/img/logo.png') }}" alt="instant-reader-logo">
        </a>                
    </x-slot>    

    <center>
        <i class="fas fa-user-lock" style="font-size: 5rem; color: #282525"></i>
        <h2 class="text-red-600" style="font-size: 2.4rem; font-weight: 900;">Access Denied!</h2>

        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('marketing-admin.home') }}">
            {{ __('Back to admin panel.') }}
        </a>
    </center>        

</x-auth-card>