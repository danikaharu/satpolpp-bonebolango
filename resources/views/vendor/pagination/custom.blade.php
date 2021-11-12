@if ($paginator->hasPages())
<ul class="justify-content-center">

    @if ($paginator->onFirstPage())
    <li><span>← Previous</span></li>
    @else
    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif



    @foreach ($elements as $element)

    @if (is_string($element))
    <li><span>{{ $element }}</span></li>
    @endif



    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li>{{ $page }}</li>
    @else
    <li><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach



    @if ($paginator->hasMorePages())
    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
    <li><span>Next →</span></li>
    @endif
</ul>
@endif
