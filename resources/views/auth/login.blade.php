<x-frontend::index title="Login - {{ config('app.name') }}">

    <div class="flex items-center justify-center py-3 bg-gray-100 px-4">

        <div class="max-w-md w-full p-8 bg-white shadow-xl rounded-2xl">

            {{-- Toggle Buttons --}}
            <div class="flex mb-8 bg-indigo-100 rounded-lg overflow-hidden">
                <a href="{{ route('login') }}"
                    class="w-1/2 text-center py-2 font-medium transition
                    {{ request()->routeIs('login') ? 'bg-indigo-600 text-white' : 'text-indigo-700 hover:bg-indigo-200' }}">
                    Sign In
                </a>
                <a href="{{ route('register') }}"
                    class="w-1/2 text-center py-2 font-medium transition
                    {{ request()->routeIs('register') ? 'bg-indigo-600 text-white' : 'text-indigo-700 hover:bg-indigo-200' }}">
                    Sign Up
                </a>
            </div>

            {{-- Page Title --}}
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">
                Welcome Back
            </h2>

            {{-- Login Form --}}
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" />
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" />
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Social Login --}}
                <div class="pt-2">
                    <p class="text-center text-gray-500 text-sm mb-3">Or continue with</p>

                    <div class="flex flex-col space-y-3">

                        {{-- Google --}}
                        <a href="{{ route('google.login') }}"
                            class="flex items-center justify-center gap-2 px-4 py-2 border rounded-lg text-red-600 border-red-400 hover:bg-red-50 transition">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" />
                            Continue with Google
                        </a>

                    </div>
                </div>

                {{-- Remember Me --}}
                <div class="flex items-center">
                    <label class="inline-flex items-center space-x-2">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                {{-- Actions --}}
                <div class="flex items-center justify-between pt-2">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                            Forgot password?
                        </a>
                    @endif

                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition font-medium">
                        Log In
                    </button>
                </div>

            </form>

        </div>

    </div>

</x-frontend::index>
