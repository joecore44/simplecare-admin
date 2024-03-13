
@props(['name', 'title'])
<div
    x-data = "{ show: false, name : '{{ $name }}' }"
    x-show="show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    x-transition
    style="display: none;"


    class="fixed inset-0 z-50 ">
    <div class="fixed inset-0 bg-gray-400 opacity-50" x-on:click="show = false">X</div>
    <div class="fixed inset-0 max-w-2xl m-auto bg-white rounded" style="height:400px;">
        <div class="border-slate-200 dark:border-slate-700 cz4zt cx95x c8o14">
            <div class="flex items-center cmgwo">
                <div class="text-slate-800 dark:text-slate-100 cqosy">
                    @if(isset($title))
                        {{ $title }}
                    @endif
                </div>
                <button class="coyl7 cljes ciz4v czgoy" x-on:click="show = false">
                    <div class="cbl3h">Close</div>
                    <svg class="c3wll cgmrc cm474">
                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="cx95x ctysv">{{ $body }}</div>

        <div class="border-slate-200 dark:border-slate-700 c87xd cx95x ctysv">
            <div class="flex flex-wrap justify-end cwkb0">
                <button class="border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h cjusy" x-on:click="show = false">Cancel</button>
                <button class="cfeqx cf1ce ceqwg cjusy">Send</button>
            </div>
        </div>
    </div>

</div>
