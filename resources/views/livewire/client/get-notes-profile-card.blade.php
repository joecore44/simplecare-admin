<div>
    <h2 class="text-slate-800 dark:text-slate-100 cqosy c7j98">Time Line</h2>
    <div class="bg-white border rounded-sm dark:bg-slate-800 border-slate-200 dark:border-slate-700 cl0q9 c5mbg">
        <ul class="cd0mw">

            @if($chartNotes)
                @foreach($chartNotes as $note)

                <!-- Item --><li class="cyqq9 cxbdy clk9r">
                    <div class="flex items-center text-sm c50fy">
                        <!-- Icon -->
                        <div class="rounded-full ctnuc c7n6y c40t1 czt1n chmgx c6dxj">
                            <svg class="c2rtb c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                <path d="M21 14a.75.75 0 0 1-.75-.75 1.5 1.5 0 0 0-1.5-1.5.75.75 0 1 1 0-1.5 1.5 1.5 0 0 0 1.5-1.5.75.75 0 1 1 1.5 0 1.5 1.5 0 0 0 1.5 1.5.75.75 0 1 1 0 1.5 1.5 1.5 0 0 0-1.5 1.5.75.75 0 0 1-.75.75Zm-7 10a1 1 0 0 1-1-1 4 4 0 0 0-4-4 1 1 0 0 1 0-2 4 4 0 0 0 4-4 1 1 0 0 1 2 0 4 4 0 0 0 4 4 1 1 0 0 1 0 2 4 4 0 0 0-4 4 1 1 0 0 1-1 1Z"></path>
                            </svg>
                        </div>
                        <!-- Position -->
                        <div>
                            <div class="text-slate-800 dark:text-slate-100 cw92y">Chart Note</div>
                            <div class="flex items-center c626f cmaja cwkb0">
                                <div>GAD-7</div>
                                <div>{{ $note['id'] }}</div>
                                <div class="cdfsn czgoy">·</div>
                                <div>{{ $note['date'] }} - {{ $note['time'] }}</div>
                            </div>
                        </div>
                    </div>
                    <!-- Tags -->
                    <div class="c4e2h cpppv crgeu">
                        <ul class="flex flex-wrap -m-1 cexh7">
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center bg-white border rounded-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 csq8i cxcbl c0qeg">
                                    <svg class="ciz4v czgoy c3wll cb4kj c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 4c-.3 0-.5.1-.7.3L1.6 10 3 11.4l4-4V16h2V7.4l4 4 1.4-1.4-5.7-5.7C8.5 4.1 8.3 4 8 4ZM1 2h14V0H1v2Z"></path>
                                    </svg>
                                </button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center bg-white border rounded-full border-slate-200 dark:border-slate-700 dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 csq8i cxcbl c0qeg">+4</button>
                            </li>
                        </ul>
                    </div>
                </li>
                @endforeach
        </ul>
        <div class="">

        </div>
                @else
            <p>No Chart Notes found.</p>
            @endif
    </div>
</div>
