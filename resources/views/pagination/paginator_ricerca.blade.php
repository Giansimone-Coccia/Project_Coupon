@if ($paginator->lastPage() != 1)
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

<div id="pagination" class="margin-Paginate center">
    {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }} ---

    @if (!$paginator->onFirstPage())
        <a href="{{ $paginator->appends(request()->input())->url(1) }}" class="link">Inizio</a> |
        
        <!--request()->input() restituisce un array con tutti i parametri della richiesta HTTP corrente-->
        
        <!--appends(request()->input()) viene chiamato sull'oggetto $paginator per aggiungere i parametri
        della richiesta all'URL generato per il link. In pratica, questo assicura che i parametri vengano 
        mantenuti quando si passa alla pagina successiva o si torna alla pagina precedente. -->
        
    @else
        Inizio |
    @endif

    @if ($paginator->currentPage() != 1)
        <a href="{{ $paginator->appends(request()->input())->previousPageUrl() }}" class="link">&lt; Precedente</a> |
    @else
        &lt; Precedente |
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->appends(request()->input())->nextPageUrl() }}" class="link">Successivo &gt;</a> |
    @else
        Successivo &gt; |
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->appends(request()->input())->url($paginator->lastPage()) }}" class="link">Fine</a>
    @else
        Fine
    @endif

</div>
@endif
