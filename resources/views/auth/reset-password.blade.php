<x-frontend::index title="Reset Password - {{ config('app.name') }}">

    <div class="flex items-center justify-center py-3 bg-gray-100 px-4">

        <div class="max-w-md w-full p-8 bg-white shadow-xl rounded-2xl">

            {{-- Page Title --}}
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-4">
                Reset Your Password
            </h2>

            {{-- Description --}}
            <p class="text-sm text-gray-600 text-center mb-6">
                Enter your email and new password to reset your account.
            </p>

            <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
                @csrf

                {{-- Reset Token --}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}"
                        required autofocus autocomplete="username"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">

                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- New Password --}}
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-1">New Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">

                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-medium mb-1">Confirm
                        Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">

                    @error('password_confirmation')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Button --}}
                <div class="flex justify-end pt-2">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium">
                        Reset Password
                    </button>
                </div>

            </form>

        </div>

    </div>
</x-frontend::index>
