@if ($paginator->hasPages())

<div class="pagination-container">
    <nav class="pagination">
        <ul>
        {{-- Pagination Elements --}}
            @foreach ($elements as $element)
               

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="current-page">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>

    <nav class="pagination-next-prev">
        <ul>
        @if (!$paginator->onFirstPage())
        
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="prev">Previous</a></li>
        @endif

        @if ($paginator->hasMorePages())
            <li><a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        
        @endif
        </ul>
    </nav>
</div>



@endif