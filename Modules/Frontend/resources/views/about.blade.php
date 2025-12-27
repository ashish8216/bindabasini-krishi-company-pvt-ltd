<x-frontend::index title="About Us - {{ config('app.name') }}">

    <x-frontend::layouts.breadcrumb title="About us" :links="[['name' => 'About', 'path' => '/about']]" />

    <section class="py-16">
        <div class="container">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-4">About {{ config('app.name') }}</h2>
                <p class="text-lg text-gray-700 mb-6">
                    At {{ config('app.name') }}, we are dedicated to providing farmers with the best agricultural
                    products and solutions to help them succeed. With years of experience in the industry, we understand
                    the unique challenges faced by farmers and are committed to supporting their growth and
                    productivity.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    Our extensive range of products includes high-quality machinery, hand tools, irrigation systems,
                    seeds, fertilizers, and protective gear. We partner with trusted manufacturers to ensure that our
                    customers receive reliable and effective solutions for their farming needs.
                </p>
                <p class="text-lg text-gray-700">
                    Our mission is to empower farmers with the tools and knowledge they need to thrive in today's
                    competitive agricultural landscape. We believe in building long-term relationships with our
                    customers based on trust, quality, and exceptional service.
                </p>
            </div>
        </div>
    </section>
</x-frontend::index>
