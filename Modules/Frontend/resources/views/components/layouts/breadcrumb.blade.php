@props(['title', 'links' => []])

<section class="brand-gradient text-white">
    <div class="container py-12">
        <div class="flex flex-col md:flex-row justify-between items-center">

            {{-- Left Section --}}
            <div>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">{{ $title }}</h1>
            </div>

            {{-- Breadcrumb --}}
            <div class="mt-4 md:mt-0 flex items-center">
                <nav aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/') }}"
                                class="inline-flex items-center text-green-100 hover:text-white">
                                <i class="fas fa-home mr-2"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        {{-- Loop Through Breadcrumb Items --}}
                        @foreach ($links as $index => $link)
                            {{-- Clickable breadcrumb --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <i class="fas fa-chevron-right text-green-300 mx-2"></i>
                                    <span class="text-white font-medium"> {{ $link['name'] }}</span>
                                </div>
                            </li>
                        @endforeach

                    </ol>
                </nav>
            </div>

        </div>
    </div>
</section>
