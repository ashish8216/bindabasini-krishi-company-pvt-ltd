<x-frontend::index title="Confirm Password - {{ config('app.name') }}">

    <div class="flex items-center justify-center py-3 bg-gray-100 px-4">

        <div class="max-w-md w-full p-8 bg-white shadow-xl rounded-2xl">

            {{-- Page Title --}}
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-4">
                Confirm Password
            </h2>

            {{-- Subtitle --}}
            <p class="text-sm text-gray-600 text-center mb-6">
                This is a secure area of the application.
                Please confirm your password before continuing.
            </p>

            {{-- Form --}}
            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
                @csrf

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" />

                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <div class="flex justify-end pt-2">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition font-medium">
                        Confirm
                    </button>
                </div>

            </form>

        </div>

    </div>
</x-frontend::index>
