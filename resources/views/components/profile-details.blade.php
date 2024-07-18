<!-- profile-details.blade.php -->

@props([
    'fieldTitle' => '',
    'fieldData' => '',
    'isList' => false,
])

<div class="mb-2">
    <strong>{{ $fieldTitle }}:</strong>

    @if ($isList)
        @php
            $fieldList = explode(', ', $fieldData);
        @endphp

        <div class="flex flex-wrap">
            @foreach($fieldList as $item)
                <div class="border border-gray-300 bg-gray-100 rounded-full py-1 px-3 mb-2 mr-2 text-sm hover:bg-turquoise hover:text-white transition duration-300">
                    <span>{{ $item }}</span>
                </div>
            @endforeach
        </div>
    @else
        {{ $fieldData }}
    @endif
</div>
