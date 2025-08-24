@if ($paginator->hasPages())
    <nav>
        <div class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    «
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn" rel="prev" aria-label="@lang('pagination.previous')">
                    «
                </a>
            @endif

            {{-- Current Page --}}
            <button class="join-item btn btn-active" aria-current="page" aria-label="Current page, {{ $paginator->currentPage() }}">
                Page {{ $paginator->currentPage() }}
            </button>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn" rel="next" aria-label="@lang('pagination.next')">
                    »
                </a>
            @else
                <button class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    »
                </button>
            @endif
        </div>
    </nav>
@endif
