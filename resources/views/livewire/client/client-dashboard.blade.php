<div>
    <main class="ckut6">

            @if(session('success'))
                <div x-show="open" x-data="{ open: true }" role="alert">
                    <div class="text-sm border rounded-sm c82du cq2p6 chgsl cnx8j c6rpu cwvsn c9r0z cfnh0">
                        <div class="flex cmgwo cxbmt c3ff8">
                            <div class="flex">
                                <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                </svg>
                                <div>{{ session('success') }}</div>
                            </div>
                            <button class="ml-3 csvyn c9r0f csask" @click="open = false">
                                <div class="cbl3h">Close</div>
                                <svg class="c3wll cgmrc cm474">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @elseif(session('error'))
                <div x-show="open" x-data="{ open: true }" role="alert">
                    <div class="text-sm border rounded-sm c82du cc380 cna26 cd7z7 ce30q cgaep c9r0z cfnh0">
                        <div class="flex cmgwo cxbmt c3ff8">
                            <div class="flex">
                                <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                </svg>
                                <div>{{ session('error') }}</div>
                            </div>
                            <button class="ml-3 csvyn c9r0f csask" @click="open = false">
                                <div class="cbl3h">Close</div>
                                <svg class="c3wll cgmrc cm474">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                @elseif(session('warning'))
                <div x-show="open" x-data="{ open: true }" role="alert">
                    <div class="text-sm border rounded-sm c82du cxdv7 ctksn cnlct ckrqz ccfka c9r0z cfnh0">
                        <div class="flex cmgwo cxbmt c3ff8">
                            <div class="flex">
                                <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                </svg>
                                <div>{{ session('warning') }}</div>
                            </div>
                            <button class="ml-3 csvyn c9r0f csask" @click="open = false">
                                <div class="cbl3h">Close</div>
                                <svg class="c3wll cgmrc cm474">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

        <div class="cewy4 clpyc cygiq cj3hv cofxq c3ff8 c9r0z c0ycj">

            <div class="cd2pr">

                <!-- Left + Middle content -->
                <div class="ctin8 cy6kd">

                    <!-- Left content -->
                    <div class="ccs95 cp6dx c3ff8 ce97l">
                        <div class="c1w44 c0u2w cby1z cz385 cda5l c97qj">
                            <div class="ch5dq">

                                <!-- Title -->
                                <header class="crkc7">
                                    <h1 class="font-bold text-slate-800 dark:text-slate-100 cy709 cjefr">✨</h1>
                                </header>

                                <!-- Search form -->
                                <div class="c5x9n crkc7">
                                    <form class="c4ijw">
                                        <label for="feed-search-mobile" class="cbl3h">Search</label>
                                        <input id="feed-search-mobile" class="bg-white dark:bg-slate-800 c03gb c3ff8 ctmd2" type="search" placeholder="Search…">
                                        <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                                            <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                                <!-- Links -->
                                <div class="flex cmgrv c7bxu cf18b cz385 cmaja c108j chz8s c9r0z">
                                    <!-- Group 1 -->
                                    <div>
                                        <div class="ciz4v czgoy cqosy cguji cw3n3 c0qeg cvavu">Menu</div>
                                        <ul class="flex cmaja c108j crc9s czt1n">
                                            <li class="cid50 crc9s c6orf">
                                                <a class="flex items-center bg-white rounded dark:bg-slate-800 c626f csq8i cfnh0" href="#0">
                                                    <svg class="mr-2 text-indigo-500 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10 16h4c.6 0 1-.4 1-.998V6.016c0-.3-.1-.6-.4-.8L8.6.226c-.4-.3-.9-.3-1.3 0l-6 4.992c-.2.2-.3.5-.3.799v8.986C1 15.6 1.4 16 2 16h4c.6 0 1-.4 1-.998v-2.996h2v2.996c0 .599.4.998 1 .998Zm-4-5.99c-.6 0-1 .399-1 .998v2.995H3V6.515L8 2.32l5 4.194v7.488h-2v-2.995c0-.6-.4-.999-1-.999H6Z"></path>
                                                    </svg>
                                                    <span class="text-sm text-indigo-500 cnzyq cw92y">Overview</span>
                                                </a>
                                            </li>
                                            <li class="cid50 crc9s c6orf">
                                                <a class="flex items-center rounded c626f csq8i cfnh0" href="#0">
                                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M14.14 9.585h-.002a2.5 2.5 0 0 1-2 4.547 6.91 6.91 0 0 1-6.9 1.165 4.436 4.436 0 0 0 1.343-1.682c.365.087.738.132 1.113.135a4.906 4.906 0 0 0 2.924-.971 2.5 2.5 0 0 1 3.522-3.194Zm-4.015-7.397a7.023 7.023 0 0 1 4.47 5.396 4.5 4.5 0 0 0-1.7-.334c-.15.002-.299.012-.447.03a5.027 5.027 0 0 0-2.723-3.078 2.5 2.5 0 1 1 .4-2.014ZM4.663 10.5a2.5 2.5 0 1 1-3.859-.584 6.888 6.888 0 0 1-.11-1.166c0-2.095.94-4.08 2.56-5.407.093.727.364 1.419.788 2.016A4.97 4.97 0 0 0 2.694 8.75c.003.173.015.345.037.516A2.49 2.49 0 0 1 4.663 10.5Z"></path>
                                                    </svg>
                                                    <span class="text-sm ch1ih c6w4h cw92y">Explore</span>
                                                </a>
                                            </li>
                                            <li class="cid50 crc9s c6orf">
                                                <a class="flex items-center rounded c626f csq8i cfnh0" href="#0">
                                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                    </svg>
                                                    <span class="text-sm ch1ih c6w4h cw92y">Billing</span>
                                                </a>
                                            </li>
                                            <li class="cid50 crc9s c6orf">
                                                <a class="flex items-center rounded c626f csq8i cfnh0" href="#0">
                                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10.59 7.658 8 5.5 5.41 7.658A.25.25 0 0 1 5 7.466V0h6v7.466a.25.25 0 0 1-.41.192Z"></path>
                                                        <path d="M14 16H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2v2H2v12h12V2h-2V0h2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2Z"></path>
                                                    </svg>
                                                    <span class="text-sm ch1ih c6w4h cw92y">Bookmarks</span>
                                                </a>
                                            </li>
                                            <li class="cid50 crc9s c6orf">
                                                <a class="flex items-center rounded c626f csq8i cfnh0" href="#0">
                                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                                                    </svg>
                                                    <span class="text-sm ch1ih c6w4h cw92y">Appointments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Middle content -->
                    <div class="2xl:mx-8 clt4z cnyty c0kv5 cy6kd">
                        <div class="ch5dq">

                            <!-- Blocks -->
                            <div class="cxebx">

                                <!-- Post Block -->
                                <form wire:submit.prevent="addNote">
                                <div class="bg-white border rounded shadow-md dark:bg-slate-800 border-slate-200 dark:border-slate-700 ctk06">
                                    <div class="flex items-center cb7d8 cg5st">
                                        <img class="rounded-full c7n6y" src="{{ Auth::user()->profile_photo_url }}" width="40" height="40" alt="{{ Auth::user()->name }}" />
                                        <div class="ckut6">
                                            <label for="status-input" class="cbl3h">Add a note to {{ $clientName }}'s chart: Including notes from a call or copy and paste info from a doc.</label>
                                            <x-input class="cmtl7 c82du c7jg3 cyj9a c3jt4 crafj c6vqo c03gb c3ff8" wire:model="noteContent" placeholder="Add a note to {{ $clientName }}'s chart: Including notes from a call or copy and paste info from a doc."></x-input>

                                        </div>
                                    </div>
                                    <div class="flex items-left cmgwo">
                                        <div class="c4ijw">
                                            <x-input type="date" class="datepicker dark:bg-slate-800 text-slate-500 cn6r0 cxc4n ch1ih caowp cw92y c03gb ctmd2 flatpickr-input active" label="Date"></x-input>
                                                <div class="flex items-center pointer-events-none cozyg csmh2 c1u8w">
                                                    <svg class="ml-3 text-slate-500 dark:text-slate-400 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                                    </svg>
                                                </div>
                                        </div>
                                        <div class="c4ijw">
                                            <x-input type="time" class="timepicker dark:bg-slate-800 text-slate-500 cn6r0 cxc4n ch1ih caowp cw92y c03gb ctmd2 flatpickr-input active" wire:model="time" />
                                            <div class="flex items-center pointer-events-none cozyg csmh2 c1u8w">
                                                <svg width="16" height="16" class="ml-3 text-slate-500 dark:text-slate-400 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                    <path d="M15 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13H9v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                                                </svg>


                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="cfeqx c626f cf1ce ceqwg cjusy">Add Note -&gt;</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slot 1-->
                                <div class="bg-white border rounded shadow-md dark:bg-slate-800 border-slate-200 dark:border-slate-700 ctk06">

                                    <!-- Header -->
                            <header class="ca943 cob4g crkc7">
                                <!-- Name -->
                                <div class="inline-flex cxbmt c7j98">
                                    <h1 class="font-bold text-slate-800 dark:text-slate-100 cjefr">{{ $clientName }}</h1>
                                    <svg class="cz5ai c3wll c7n6y c9o7o cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M13 6a.75.75 0 0 1-.75-.75 1.5 1.5 0 0 0-1.5-1.5.75.75 0 1 1 0-1.5 1.5 1.5 0 0 0 1.5-1.5.75.75 0 1 1 1.5 0 1.5 1.5 0 0 0 1.5 1.5.75.75 0 1 1 0 1.5 1.5 1.5 0 0 0-1.5 1.5A.75.75 0 0 1 13 6ZM6 16a1 1 0 0 1-1-1 4 4 0 0 0-4-4 1 1 0 0 1 0-2 4 4 0 0 0 4-4 1 1 0 1 1 2 0 4 4 0 0 0 4 4 1 1 0 0 1 0 2 4 4 0 0 0-4 4 1 1 0 0 1-1 1Z"></path>
                                    </svg>
                                </div>
                                <!-- Bio -->
                                <div class="text-sm cvavu">Fitness Fanatic, Design Enthusiast, Mentor, Meetup Organizer &amp; PHP Lover.</div>
                                <!-- Meta -->
                                <div class="flex flex-wrap justify-center cejow cwh9k">
                                    <div class="flex items-center">
                                        <svg class="ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 8.992a2 2 0 1 1-.002-3.998A2 2 0 0 1 8 8.992Zm-.7 6.694c-.1-.1-4.2-3.696-4.2-3.796C1.7 10.69 1 8.892 1 6.994 1 3.097 4.1 0 8 0s7 3.097 7 6.994c0 1.898-.7 3.697-2.1 4.996-.1.1-4.1 3.696-4.2 3.796-.4.3-1 .3-1.4-.1Zm-2.7-4.995L8 13.688l3.4-2.997c1-1 1.6-2.198 1.6-3.597 0-2.798-2.2-4.996-5-4.996S3 4.196 3 6.994c0 1.399.6 2.698 1.6 3.697 0-.1 0-.1 0 0Z"></path>
                                        </svg>
                                        <span class="text-sm text-slate-500 dark:text-slate-400 c626f cw92y c9o7o">Milan, IT</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M11 2a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0V3a1 1 0 0 1 1-1zm8.25 4.375l.875.5-1.5 2.598-.875-.5L19 7.682l-.707 1.225 1.768 1.024-.707 1.225 1.768 1.025-1.06 1.837-1.767-1.024-1.061 1.838-1.768-1.025-.707 1.225-1.767-1.024L11 16.434l-.875.5-1.5-2.598-.875-.5L4.75 6.375l.875-.5 1.5 2.598 1.768-1.024.707-1.225 1.767 1.024 1.061-1.838L14 6.682l1.768-1.025 1.06 1.838 1.767-1.024 1.06 1.838zm-3.5 7.5a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 1-1zm0-10a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0V2a1 1 0 0 1 1-1zm0 16a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 1-1z"/>
                                        </svg>
                                        <span class="text-sm text-slate-500 dark:text-slate-400 c626f cw92y c9o7o">75°F</span>
                                    </div>
                                </div>
                                <div class="flex justify-end mt-3">
                                    <div class="flex btn cfeqx c626f cf1ce ceqwg cjusyy">
                                        <a class="pr-2 text-sm c626f cw92y c9o7o" href="">Administrative Note</a>
                                        <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </header>

                            <!-- Tabs -->
                            <div class="c4ijw crkc7">
                                <div class="ce4zx cr58u csmh2 csp9v c3ff8 cu33r" aria-hidden="true"></div>
                                <ul class="flex text-sm cmgrv cz385 cmaja cw92y cd9eg cx5ci c4ijw chz8s">
                                    <li class="cqrxi co2lm cp2yi clw8k cc4ip cdnpc c13j6 cq2g3">
                                        <a class="block text-indigo-500 c626f czkg9 cl943 c1ow6" href="#0">General</a>
                                    </li>
                                    <li class="cqrxi co2lm cp2yi clw8k cc4ip cdnpc c13j6 cq2g3">
                                        <a class="block text-slate-500 dark:text-slate-400 c6xw6 cxc4n c626f c1ow6" href="#0">Contacts</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Profile content -->
                            <div class="flex cmca2 cisj7 chmlm">

                                <!-- Main content -->
                                <div class="c21k4 cm1dv cy6kd ce97l">
                                    <div>
                                        <h2 class="text-slate-800 dark:text-slate-100 cqosy c7j98">Appointments</h2>
                                        <!-- Cards -->
                                        <div class="cb89g ctxcf c5va1">

                                            <!-- Card -->
                                            <div class="bg-white border rounded-sm dark:bg-slate-800 border-slate-200 dark:border-slate-700 cl0q9 c5mbg">
                                                <!-- Card header -->
                                                <div class="flex items-center c32al c7j98 ckut6">
                                                    <div class="flex items-center justify-center mr-2 rounded-full c1xtk c7n6y chmgx c6dxj">
                                                        <img class="csib2" src="https://preview.cruip.com/mosaic/images/icon-01.svg" width="14" height="14" alt="Icon 03">
                                                    </div>
                                                    <div class="c32al">
                                                        <span class="text-sm text-slate-800 dark:text-slate-100 cw92y">2:00PM - March 3rd, 2024</span>
                                                    </div>
                                                </div>
                                                <!-- Card content -->
                                                <div class="text-sm cvavu">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                                <!-- Card footer -->
                                                <div class="flex items-right cmgwo">


                                                    <!-- Link -->
                                                    <div class="">
                                                        <a class="text-sm text-indigo-500 cuv1l cdi3j cw92y " href="#0">View -&gt;</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card -->
                                            <div class="bg-white border rounded-sm dark:bg-slate-800 border-slate-200 dark:border-slate-700 cl0q9 c5mbg">
                                                <!-- Card header -->
                                                <div class="flex items-center c32al c7j98 ckut6">
                                                    <div class="flex items-center justify-center mr-2 rounded-full c1xtk c7n6y chmgx c6dxj">
                                                        <img class="csib2" src="https://preview.cruip.com/mosaic/images/icon-01.svg" width="14" height="14" alt="Icon 02">
                                                    </div>
                                                    <div class="c32al">
                                                        <span class="text-sm text-slate-800 dark:text-slate-100 cw92y">2:00PM - March 3rd, 2024</span>
                                                    </div>
                                                </div>
                                                <!-- Card content -->
                                                <div class="text-sm cvavu">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                                <!-- Card footer -->
                                                <div class="flex items-center cmgwo">
                                                    <!-- Avatars group -->

                                                    <!-- Link -->
                                                    <div>
                                                        <a class="text-sm text-indigo-500 cuv1l cdi3j cw92y" href="#0">View -&gt;</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- Notes card -->
                                    <livewire:client.get-notes-profile-card :clientId="$clientId"/>
                                </div>
                                </div>
                                <!-- End Slot 1-->



                            </div>

                        </div>
                    </div>

                </div>



            </div>

        </div>
    </main>

</div>
