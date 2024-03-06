@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/room.css') }}">
@endpush
<div class="grid grid-cols-4 gap-4" id="room__container">
    <main class="ckut6 col-span-4">
        <button id="chat__button"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" fill="#ede0e0" clip-rule="evenodd"><path d="M24 20h-3v4l-5.333-4h-7.667v-4h2v2h6.333l2.667 2v-2h3v-8.001h-2v-2h4v12.001zm-15.667-6l-5.333 4v-4h-3v-14.001l18 .001v14h-9.667zm-6.333-2h3v2l2.667-2h8.333v-10l-14-.001v10.001z"/></svg></button>
        <button id="members__button">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#ede0e0"><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
         </button>
        <div class="flex c4ijw crszu" id="members__container">
            <div id="messages-sidebar" class="col-span-1 cwis9 cqyxl ccotl ch8aq c7yiv cgpmj cjhoi cvr2z csmh2 csp9v cd720 c3ff8 cvqv9 c0q7k">
                <div class="bg-white border-slate-200 dark:border-slate-700 chhm2 c3jt4 c8gbp cqd18 cz385 c7n6y cpqux c1wk3 c6q8l cfe53 coxu0">
                    <div>
                        <div class="cfe53 cvqv9 cox8h">
                            <div class="flex items-center bg-white border-slate-200 dark:border-slate-700 c3jt4 cz4zt ciqso cx95x">
                                <div class="flex items-center cmgwo c3ff8">
                                    <!-- Channel menu -->
                                    <div class="c4ijw" id="members__header">
                                        <button class="flex items-center c32al ckut6" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                            <div class="c32al">
                                                <span class="text-slate-800 dark:text-slate-100 cqosy">Participants <div class="inline-flex rounded-full cl5v8 cob4g cw92y ceqwg cyyn9 c0qeg ciamg" id="members__count">0</div>
                                                </span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cx95x ctysv">
                            <div class="cuf7q" id="member__list">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-4 cwis9 cqyxl cbr9x cgpmj chmlm ckut6">
                <section id="stream__container">

                    <div id="stream__box"></div>

                    <div id="streams__container"></div>

                    <div class="stream__actions">
                        <button id="camera-btn" class="active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 4h-3v-1h3v1zm10.93 0l.812 1.219c.743 1.115 1.987 1.781 3.328 1.781h1.93v13h-20v-13h3.93c1.341 0 2.585-.666 3.328-1.781l.812-1.219h5.86zm1.07-2h-8l-1.406 2.109c-.371.557-.995.891-1.664.891h-5.93v17h24v-17h-3.93c-.669 0-1.293-.334-1.664-.891l-1.406-2.109zm-11 8c0-.552-.447-1-1-1s-1 .448-1 1 .447 1 1 1 1-.448 1-1zm7 0c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zm0-2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5z"/></svg>
                        </button>
                        <button id="mic-btn" class="active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c1.103 0 2 .897 2 2v7c0 1.103-.897 2-2 2s-2-.897-2-2v-7c0-1.103.897-2 2-2zm0-2c-2.209 0-4 1.791-4 4v7c0 2.209 1.791 4 4 4s4-1.791 4-4v-7c0-2.209-1.791-4-4-4zm8 9v2c0 4.418-3.582 8-8 8s-8-3.582-8-8v-2h2v2c0 3.309 2.691 6 6 6s6-2.691 6-6v-2h2zm-7 13v-2h-2v2h-4v2h10v-2h-4z"/></svg>
                        </button>
                        <button id="screen-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 1v17h24v-17h-24zm22 15h-20v-13h20v13zm-6.599 4l2.599 3h-12l2.599-3h6.802z"/></svg>
                        </button>
                        <button id="leave-btn" style="background-color: #FF5050;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 10v-5l8 7-8 7v-5h-8v-4h8zm-16-8v20h14v-2h-12v-16h12v-2h-14z"/></svg>
                        </button>
                    </div>

                    <button id="join-btn">Start Call</button>
                </section>
            </div>
            <div class="flex cwis9 cqyxl cbr9x cgpmj chmlm bg-white" id="messages__container">
                <div class="clpyc cr0xt ckut6 c9r0z c3ntd" id="messages"></div>

                <!-- Footer -->
                <div class="csp9v cfe53">
                    <div class="flex items-center bg-white border-slate-200 dark:border-slate-700 c3jt4 cmgwo c87xd clpyc cr0xt ciqso c9r0z">
                        <!-- Plus button -->
                        <button class="coyl7 cljes ciz4v czgoy c7n6y czt1n">
                            <span class="cbl3h">Add</span>
                            <svg class="c3wll ceob2 chcsl" viewBox="0 0 24 24">
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path>
                            </svg>
                        </button>
                        <!-- Message input -->
                        <form class="flex ckut6" id="message__form">
                            <div class="czt1n ckut6">
                                <label for="message-input" class="cbl3h">Type a message</label>
                                <input id="message-input" class="dark:bg-slate-800 cmtl7 c82du c7jg3 cyj9a crafj c6vqo c03gb c3ff8" type="text" placeholder="Aa" name="message" required>
                            </div>
                            <button type="submit" class="btn cfeqx c626f cf1ce ceqwg">Send -&gt;</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
@push('scripts')
    <script src="{{ asset('resources/libs/agora/AgoraRTC_N-4.11.0.js') }}"></script>
    <script src="{{ asset('resources/libs/agora/agora-rtm-sdk-1.4.4.js') }}"></script>
    <script src="{{ asset('resources/js/room.js') }}"></script>
    <script>
    let displayName = "{{ Auth::user()->name }}";
    let userAvatar = "{{ Auth::user()->profile_photo_url }}";

    </script>
    <script src="{{ asset('resources/js/room_rtm.js') }}"></script>
    <script src="{{ asset('resources/js/room_rtc.js') }}"></script>
@endpush
