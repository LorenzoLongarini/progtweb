@if ($paginator->lastPage() != 1)
<div id="pagination" style = "display:flex;justify-content: center;">
<h4>{{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }} -</h4> 

    <!-- Link alla prima pagina -->
    @if ($paginator->currentPage() != 1)
        <a href="{{ $paginator->url(1) }}"><h4>Inizio  </h4></a> <h4> | </h4>
    @else
    <h4> Inizio </h4>  <h4> | </h4>
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
        <a href="{{ $paginator->url($paginator->currentPage()-1) }}"><h4> Precedente</h4></a> <h4> | </h4>
    @else
    <h4> Precedente </h4><h4> | </h4>
    @endif

    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}"><h4>Successivo</h4></a> <h4> | </h4>
    @else
    <h4>Successivo </h4><h4> | </h4>
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->url($paginator->lastPage()) }}"><h4> Fine </h4></a>
    @else
    <h4>Fine</4>
    @endif
</div>
@endif