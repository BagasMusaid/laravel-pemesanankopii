<!-- resources/views/components/custom-pagination.blade.php -->
<div class="px-5 pt-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between   ">
    <div>
        <span class="text-xs xs:text-sm text-gray-900">
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} resultss
        </span>
    </div>
    <div class="inline-flex mt-2 xs:mt-0">
        @if ($paginator->onFirstPage())
            <a class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                Prev
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                Prev
            </a>
        @endif
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                Next
            </a>
        @else
            <a class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                Next
            </a>
        @endif
    </div>
</div>
