<x-guest-layout>
    <x-slot name="title">
        Page Not Found
    </x-slot>

    <section class="error-section padding">
        <div class="container">
            <div class="error-content text-center">
                <h2>404!</h2>
                <h5>Oops! Page Not Found</h5>
                <p>The page you were looking for could not be found.</p>
                <a href="{{route('home')}}" class="default-btn">Back to Home</a>
            </div>
        </div>
    </section><!-- /Error Section -->
</x-guest-layout>
