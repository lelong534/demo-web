@if ($paginator->lastPage() > 1)
<div class="row">
    <div class="navigator col-12">   
        <ul class="pagination">
            <!-- <a href="{{ $paginator->url(1) }}">
                <li class="{{ ($paginator->currentPage() == 1) ? 'disabled' : '' }}">
                </li>
            </a> -->
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
                    <li></li>
                </a>
            @endfor
            <!-- <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >
                <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"></li>
            </a> -->
        </ul>
    </div>
</div>
@endif