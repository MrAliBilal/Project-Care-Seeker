<x-layout>

    <section class="my-10">
        @include('partials._searchworker')

        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


            @unless (count($listings) == 0)

                @foreach ($listings as $listing)
                    <x-profile-listing :listing="$listing" />
                @endforeach
            @else
                <p>No listings found</p>
            @endunless

        </div>

        <div class="mt-6 p-4">
            {{ $listings->links() }}
        </div>
    </section>

</x-layout>
