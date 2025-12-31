<x-frontend::index title="Forgot Password - {{ config('app.name') }}">

   <div class="flex items-center justify-center py-3 bg-gray-100 px-4">

        <div class="max-w-md w-full p-8 bg-white shadow-xl rounded-2xl">

            {{-- Page Title --}}
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-4">
                Forgot Password
            </h2>

            {{-- Description --}}
            <p class="text-sm text-gray-600 text-center mb-6">
                Forgot your password? No problem. Just enter your email, and we’ll send you a reset link.
            </p>

            {{-- Session Status --}}
            @if (session('status'))
                <div class="mb-4 text-sm text-green-600 font-medium text-center">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Form --}}
            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                {{-- Email Address --}}
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">

                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Button --}}
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition font-medium">
                        Email Password Reset Link
                    </button>
                </div>

            </form>

        </div>

    </div>
</x-frontend::index>
