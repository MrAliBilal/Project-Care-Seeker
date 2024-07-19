<!-- Updated manage-gigs.blade.php -->

<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">Manage Jobs</h1>
        </header>

        <div class="overflow-x-auto">
            <table class="w-full table-auto bg-white border border-gray-300 rounded-sm">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border-b">Job Title</th>
                        <th class="px-4 py-2 border-b">Actions</th>
                        <th class="px-4 py-2 border-b"></th>
                    </tr>
                </thead>
                <tbody>
                    @unless($listings->isEmpty())
                        @foreach($listings as $listing)
                            <tr class="border-t">
                                <td class="px-4 py-2">
                                    <a href="/listings/{{$listing->id}}" class="text-blue-500 hover:underline">
                                        {{$listing->job_title}}
                                    </a>
                                </td>
                                <td class="px-4 py-2">
                                    <a href="/careseeker/{{$listing->id}}/edit"
                                        class="text-blue-400 px-4 py-2 rounded-full border border-blue-400 hover:bg-blue-400 hover:text-white transition duration-300">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </a>
                                </td>
                                <td class="px-4 py-2">
                                    <form method="POST" action="/careseeker/{{$listing->id}}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 px-4 py-2 rounded-full border border-red-500 hover:bg-red-500 hover:text-white transition duration-300">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="px-4 py-2 text-center">No Listings Found</td>
                        </tr>
                    @endunless
                </tbody>
            </table>
        </div>
    </x-card>
</x-layout>
