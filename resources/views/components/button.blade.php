@props(['grayedOut' => false, 'small' => false, 'extrasmall' => false, 'large' =>false, 'xsblue' =>false])
<button
    class="
    @if ($grayedOut)
    bg-gray-300 hover:bg-gray-400 text-white border-gray-400 hover:border-gray-500 font-bold
    @elseif ($extrasmall)
    bg-stone-200 hover:bg-stone-300 text-black py-1 px-1.5 rounded text-sm m-1 float-right
    @elseif ($small)
    {{-- bg-red-500 hover:bg-red-700 text-white border-red-700 font-bold --}}
    bg-white hover:bg-gray-100 text-red-500 hover:text-red-600 font-semibold py-2 px-4 border border-gray-400 rounded shadow

    @elseif ($large)

    @elseif ($xsblue)
    bg-blue-200 hover:bg-blue-300 text-black py-1 px-1.5 rounded text-sm m-1 float-right

    @else
    bg-red-400 hover:bg-red-500 text-white border-red-700 font-bold

    @endif
     py-2 px-4 border rounded"
    type="submit">
    {{ $slot }}
</button>
