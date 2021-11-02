@if ($paginator->hasPages())

    <div class="ast_pagination">
        @if ($paginator->onFirstPage())
            <span><i class="la la-angle-double-left"></i></span>

        @else

            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="la la-angle-double-left"></i></a>

        @endif
        @foreach ($elements as $element)
            @if (is_string($element))

                <li class="disabled"><span>{{ $element }}</span></li>

            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

                        <span class="current">{{ $page }}</span>

                    @else

                        <a href="{{ $url }}">{{ $page }}</a>

                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())

                <a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="la la-angle-double-right"></i></a>

        @else

         <span><i class="la la-angle-double-right"></i></span>

        @endif
    </div>


@endif
