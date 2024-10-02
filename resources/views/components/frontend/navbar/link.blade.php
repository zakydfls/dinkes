@props(['active'=>false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-red-700 text-white font-extrabold text-lg ' : 'text-lg font-extrabold text-red-700 hover:bg-red-400 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">{{
    $slot }}</a>
<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white"  aria-current="page" -->