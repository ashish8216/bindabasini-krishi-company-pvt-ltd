<x-frontend::index title="Verify Email - {{ config('app.name') }}">

    <div class="flex items-center justify-center py-3 bg-gray-100 px-4">

        <div class="max-w-md w-full p-8 bg-white shadow-xl rounded-2xl">

            {{-- Page Title --}}
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-4">
                Verify Your Email
            </h2>

            {{-- Description --}}
            <p class="text-sm text-gray-600 text-center mb-6">
                Thanks for signing up! Please verify your email by clicking the link we sent.
                <br>If you didn’t receive the email, we will send another.
            </p>

            {{-- Status Message --}}
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm text-green-600 font-medium text-center">
                    A new verification link has been sent to your email.
                </div>
            @endif

            {{-- Actions --}}
            <div class="flex items-center justify-between mt-6">

                {{-- Resend Email --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium">
                        Resend Verification Email
                    </button>
                </form>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                        Log Out
                    </button>
                </form>

            </div>

        </div>

    </div>
</x-frontend::index>
