@if ($paginator->hasPages())
    <!--begin::Pagination-->
    <div class="card card-custom">
        <div class="card-body py-7">
            <!--begin::Pagination-->
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex flex-wrap mr-3">

                    {{-- Previous Page Link --}}
                    @if (!$paginator->onFirstPage())
                        <button wire:click="previousPage" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></button>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">{{ $element }}</span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))

                            @foreach ($element as $page => $url)

                                @if ($page == $paginator->currentPage())
                                    <span class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">{{ $page }}</span>
                                @else
                                    <button wire:click="gotoPage({{ $page }})" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">{{ $page }}</button>
                                @endif

                            @endforeach

                            @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></button>
                    @endif
                </div>

                <div class="d-flex align-items-center">
                    <span class="text-muted">Exibindo {{ $paginator->firstItem() }} a {{ $paginator->lastItem() }} do total de {{ $paginator->total() }} registros</span>
                </div>
            </div>
            <!--end:: Pagination-->
        </div>
    </div>
    <!--end::Pagination-->
@endif
