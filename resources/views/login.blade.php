
@extends('layout.main')

@section('container')
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/3 bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <form method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input id="email" type="email" class="border border-gray-300 rounded-lg p-2 w-full" name="email" required autofocus>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input id="password" type="password" class="border border-gray-300 rounded-lg p-2 w-full" name="password" required>
                </div>

                <div class="mb-4">
                    <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-gray-700 text-sm font-bold" for="remember">Remember Me</label>
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
