@if ($paginator->hasPages())
@if ($paginator->onFirstPage())
<span>
    {!! __('pagination.previous') !!}
</span>
@else
<a href="{{ $paginator->previousPageUrl() }}" >
    {!! __('pagination.previous') !!}
</a>
@endif

@if ($paginator->hasMorePages())
<a href="{{ $paginator->nextPageUrl() }}" >
    {!! __('pagination.next') !!}
</a>
@else
<span>
    {!! __('pagination.next') !!}
</span>
@endif





<div>
    <div>
        <p >
            {!! __('Showing') !!}
            @if ($paginator->firstItem())
                <span >{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span >{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            {!! __('of') !!}
            <span >{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </p>
    </div>


    <div>
        <span >
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span aria-hidden="true">
                      <
                    </span>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.previous') }}">
                   <
                </a>
            @endif


               {{-- Pagination Elements --}}
               @foreach ($elements as $element)
               {{-- "Three Dots" Separator --}}
               @if (is_string($element))
                   <span aria-disabled="true">
                       <span >{{ $element }}</span>
                   </span>
               @endif

               {{-- Array Of Links --}}
               @if (is_array($element))
                   @foreach ($element as $page => $url)
                       @if ($page == $paginator->currentPage())
                           <span aria-current="page">
                               <span >{{ $page }}</span>
                           </span>
                       @else
                           <a href="{{ $url }}"  aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                               {{ $page }}
                           </a>
                       @endif
                   @endforeach
               @endif
           @endforeach

  {{-- Next Page Link --}}
  @if ($paginator->hasMorePages())
  <a href="{{ $paginator->nextPageUrl() }}" rel="next"  aria-label="{{ __('pagination.next') }}">
     >
  </a>
@else
  <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
      <span  aria-hidden="true">
        >
      </span>
  </span>
@endif




   </div>




</div>



@endif