@if ($paginator->lastPage() != 1)
<div id="pagination"

    @if (!$paginator->onFirstPage())
        <a href="{{ $paginator->url(1) }}"><<</a> |
    @else
        << |
    @endif

    @if ($paginator->currentPage() != 1)
        <a href="{{ $paginator->previousPageUrl() }}"><</a> |
    @else
        <
    @endif

    @if($paginator->hasMorePages() && $paginator->onFirstPage() )
        $paginator->currentpage() |
        <a href="{{ $paginator->nextpageurl() }}">$paginator->currentpage()++</a>
    @elseif(!$paginator->hasMorePages())
        <a href="{{ $paginator->previouspageurl() }}">$paginator->currentpage()--</a> |
        $paginator->currentpage()
    @else
    <a href="{{ $paginator->previouspageurl() }}">$paginator->currentpage()--</a> |
        $paginator->currentpage() |
        <a href="{{ $paginator->nextpageurl() }}">$paginator->currentpage()++</a>
    @endif

   

    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}">></a> |
    @else
       > |
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->url($paginator->lastPage()) }}"> >></a>
    @else
        >> |
    @endif
</div>
@else << | < | 1 | > | >>
@endif
