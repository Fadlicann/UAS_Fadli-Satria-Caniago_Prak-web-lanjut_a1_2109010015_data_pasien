@if ($paginator->onFirstPage())
    <span class="pagination-prev disabled" style=" font-size: 18px;">Halaman Sebelumnya |</span>
@else
    <a href="{{ $paginator->previousPageUrl() }}" class="pagination-prev" rel="prev" style=" font-size: 18px;">
        << Halaman Sebelumnya |</a>
@endif

@if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" rel="next"
        style="padding-right: 18%;font-size: 18px;"> |Halaman Selanjutnya >> </a>
@else
    <span class="pagination-next disabled" style="font-size: 18px;"> |Halaman Selanjutnya</span>
@endif
