<x-frontend::index title="Register - {{ config('app.name') }}">

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
                Create Your Account
            </h2>

            {{-- Register Form --}}
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-1">Full Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" />
                    @error('name')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
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

                {{-- Confirm Password --}}
                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-medium mb-1">Confirm
                        Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" />
                    @error('password_confirmation')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Actions --}}
                <div class="flex items-center justify-between pt-2">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">
                        Already registered?
                    </a>

                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition font-medium">
                        Create Account
                    </button>
                </div>

            </form>

        </div>

    </div>

</x-frontend::index>
