<x-app-layout tittle="Login">
<x-slot name="heading">Login</x-slot:heading>
    <form action="{{ route('login') }}" method="post">
        @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email" class="border px-4 py-2 rounded block mt-1">
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="border px-4 py-2 rounded block mt-1">
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <x-button>
               Login
            </x-button>
    </form>
</x-app-layout>