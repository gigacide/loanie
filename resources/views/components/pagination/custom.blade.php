@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <span class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs" aria-hidden="true">&lsaquo;</span>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="disabled" aria-disabled="true"><span class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active" aria-current="page"><span class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs">{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}" class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
    @else
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span class="inline-block px-1 py-0.5 rounded-lg text-white bg-gradient-to-r from-purple-500 to-blue-500 text-xs" aria-hidden="true">&rsaquo;</span>
        </li>
    @endif
@endif
