<div>
    <div
    x-data="{ open: false }"
    @open-slide-over.window="open = true"
    @keydown.escape.window="open = false"
    @close-slideover.window="open = false"
>
    @if(count($clients) > 0)
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

        <!-- Page header -->
        <div class="cyqq9 cxbdy clk9r ce97l">

            <!-- Left: Title -->
            <div class="clxmc c958j">
                <h1 class="font-bold text-slate-800 dark:text-slate-100 cy709 cjefr">{{ $accountName }} ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">

                <!-- Search form -->
                <form class="c4ijw">
                    <label for="action-search" class="cbl3h">Search</label>
                    <x-input class="bg-white dark:bg-slate-800 c03gb ctmd2" type="search" placeholder="Search…" wire:model="search"></x-input>
                    <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                        <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>

                <!-- Add member button -->
                <button class="btn cfeqx cf1ce ceqwg" @click="open = true">
                    <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="hidden cmh5t c9o7o">Add Client</span>
                </button>

            </div>

        </div>

        <!-- Cards -->
        <div class="czwnc cki30 c5va1">

            <!-- Users cards -->
            @foreach($clients as $client)
            <div class="bg-white border rounded-sm dark:bg-slate-800 border-slate-200 dark:border-slate-700 cugyv c04fd c4osb cetne" wire:poll>
                <div class="flex chmlm crszu">
                    <!-- Card top -->
                    <div class="ckut6 ctk06">
                        <div class="flex cmgwo cxbmt">
                            <!-- Image + name -->
                            <header>
                                <div class="flex c7j98">
                                    <a class="inline-flex cxbmt c4ijw czbt8">
                                        <div class="bg-white rounded-full ce4zx csmh2 cke32 cse7i cvqv9 cxrj9" aria-hidden="true">
                                            <svg class="cz5ai c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                                <path d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                            </svg>
                                        </div>
                                        {{-- <img class="rounded-full" src="https://preview.cruip.com/mosaic/images/user-64-01.jpg" width="64" height="64" alt="User 01"> --}}
                                        <img class="rounded-full" src="{{ $client->ContactOne->profile_photo_url }}" width="64" height="64" alt="{{ $client->ContactOne->name }}" />
                                    </a>
                                    <div class="c5xk8 c10av">
                                        <a class="inline-flex text-slate-800 dark:text-slate-100 c8lgs ciqv7" href="{{ route('client-dashboard', ['clientId' => $client->id]) }}" wire:navigate >
                                            <h2 class="justify-center cqosy ctbo0 cvvcr">{{ $client['first_name'] }} {{ $client['last_name'] }}</h2>
                                        </a>
                                        @if($client->is_active)
                                        <div class="flex items-center"><span class="mr-1 text-sm czgoy cw92y cqljy">-&gt;</span>
                                            <span><a class="flex items-center rounded c626f csq8i cfnh0" wire:click="setActive('{{ $client->id }}')">
                                            <svg class="w-3 h-3 clfqm c3wll c7n6y czt1n" viewBox="0 0 12 12">
                                                <path d="M6 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2A6 6 0 1 1 6 0a6 6 0 0 1 0 12Z"></path>
                                            </svg>
                                            <span class="text-sm ch1ih c6w4h cw92y">Active</span>
                                        </a></span></div>
                                        @else
                                        <div class="flex items-center"><span class="mr-1 text-sm czgoy cw92y cqljy">-&gt;</span>
                                        <a class="flex items-center rounded c626f csq8i cfnh0" wire:click="setActive('{{ $client->id }}')">
                                            <svg class="w-3 h-3 c6tg6 c3wll c7n6y czt1n" viewBox="0 0 12 12">
                                                <path d="M6 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2A6 6 0 1 1 6 0a6 6 0 0 1 0 12Z"></path>
                                            </svg>
                                            <span class="text-sm ch1ih c6w4h cw92y">Not Active</span>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </header>
                            <!-- Menu button -->
                            <div class="inline-flex c4ijw c7n6y" x-data="{ open: false }">
                                <button class="rounded-full" :class="open ? 'c6vqo ce4zx text-slate-500 dark:czgoy': 'czgoy cljes ciz4v coyl7'" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="cbl3h">Menu</span>
                                    <svg class="c3wll chmgx c6dxj" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                                <div class="bg-white border rounded dark:bg-slate-800 border-slate-200 dark:border-slate-700 creyy ct1ew cetne csmh2 c8gb2 cjxbp cke32 c8407 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" x-cloak="">
                                    <ul>
                                        <li>
                                            <a class="flex text-sm cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="{{ route('client-dashboard', ['clientId' => $client->id]) }}" wire:navigate @click="open = false" @focus="open = true" @focusout="open = false">View Client</a>
                                        </li>
                                        <li>
                                            <a class="flex text-sm cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Edit Client</a>
                                        </li>
                                        <li>
                                            <a class="flex text-sm cvu65 c6tg6 cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false" wire:click="deleteClient('{{$client->id}}')">Remove Client</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="crgeu">
                            <div class="text-sm">
                                <div class="flex items-center justify-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5b5ce9" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                    </svg>
                                    <div class="ml-2">Primary {{ $client->ContactOne->phone_number }}</div>
                                </div>
                            </div>
                        </div>
                        @if($client->ContactTwo)
                        <div class="crgeu">
                            <div class="text-sm">
                                <div class="flex items-center justify-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-heart" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5b5ce9" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h.5" />
                                        <path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" />
                                      </svg>
                                    <div class="ml-2">{{ $client->ContactTwo->name }} - {{ $client->ContactTwo->phone_number }}</div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(!$client->is_onboarded)
                        <div x-show="open" x-data="{ open: true }" role="alert" class="mt-3">
                            <div class="text-sm border rounded-sm c82du cxdv7 ctksn cnlct ckrqz ccfka c9r0z cfnh0">
                                <div class="flex cmgwo cxbmt c3ff8">
                                    <div class="flex">
                                        <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                        <div>Onboarding is incomplete. -&gt; <u>Send Reminder</u> {{ $client->name }}</div>
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

                    </div>
                    <!-- Card footer -->
                    <div class="border-slate-200 dark:border-slate-700 c87xd">
                        <div class="flex ci5zp ccc5r ct5jl">
                            <a class="block text-sm text-indigo-500 cuv1l cdi3j cob4g cw92y cy6kd cjm6w ctysv" href="messages.html">
                                <div class="flex items-center justify-center">
                                    <svg class="mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                    </svg>
                                    <span>Message</span>
                                </div>
                            </a>
                            <a class="block text-sm cn6r0 cnz6z ch1ih c6w4h cob4g cw92y cy6kd c2djl cjm6w ctysv" href="settings.html">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 icon icon-tabler icon-tabler-calendar-plus cc44c cdfsn czgoy " width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#73879f" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12.5 21h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5" />
                                        <path d="M16 3v4" />
                                        <path d="M8 3v4" />
                                        <path d="M4 11h16" />
                                        <path d="M16 19h6" />
                                        <path d="M19 16v6" />
                                      </svg>
                                    <span>Schedule Appointment</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>

        <!-- Pagination -->
        <div class="crhct">
            <div class="flex justify-center">
                {{ $clients->links() }}
            </div>
        </div>

    </div>
    @else
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

        <!-- Page header -->
        <div class="cyqq9 cxbdy clk9r ce97l">

            <!-- Left: Title -->
            <div class="clxmc c958j">
                <h1 class="font-bold text-slate-800 dark:text-slate-100 cy709 cjefr">{{ $accountName }} ✨</h1>
            </div>

            <!-- Right: Actions -->
            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
                <form class="c4ijw">
                    <label for="action-search" class="cbl3h">Search</label>
                    <x-input class="bg-white dark:bg-slate-800 c03gb ctmd2" type="search" placeholder="Search…" wire:model="search"></x-input>
                    <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                        <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                </form>


                <!-- Add member button -->
                <button class="btn cfeqx cf1ce ceqwg" @click="open = true">
                    <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="hidden cmh5t c9o7o">Add Client</span>
                </button>

            </div>

        </div>
        <livewire:dashboard.empty-state pageTitle="You have no clients" subTitle="Click Add Client to add your first client."/>
    @endif




    <!-- Slide-Over Panel -->
    <div
        x-show="open"
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-0 z-50 overflow-hidden"
        aria-labelledby="slide-over-title"
        role="dialog"
        aria-modal="true"
        x-cloak
    >
        <div class="absolute inset-0 overflow-hidden ">
            <!-- Background overlay -->
            <div
                x-show="open"
                x-transition:enter="ease-in-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-25"
                @click="open = false"
            ></div>

            <div class="fixed inset-y-0 right-0 flex max-w-full pl-10 ">
                <!-- Slide-over content -->
                <div class="w-screen max-w-md">
                    <div class="flex flex-col h-full overflow-y-scroll bg-white shadow-xl">
                        <div class="px-4 py-6 bg-indigo-700 sm:px-6">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                    Add New Client
                                </h2>
                                <div class="flex ml-3 items-left h-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5b5ce9" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 14l-4 -4l4 -4" />
                                        <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                                      </svg>
                                    <button @click="open = false" class="text-indigo-700 bg-indigo-700 hover:text-white">
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Form -->
                        <div class="relative flex-1 px-4 mt-6 sm:px-6">
                            <!-- Replace this part with your form -->
                            <!-- Form -->
                            <div class="cxebx ce97l">
                                <!-- Company Name -->
                                <div class="cy6kd">
                                    <label class="block text-sm cw92y ci4cg" for="city">Client Type<span class="c6tg6">*</span></label>
                                    <div class="flex flex-wrap items-center cu5fg">
                                        <div class="ci5fe">
                                            <!-- Start -->
                                            <label class="flex items-center">
                                                <x-input class="cthao cxrif" type="radio" wire:model='type' value="adult" checked=""></x-input>
                                                <span class="text-sm c9o7o">Adult</span>
                                            </label>
                                            <!-- End -->
                                        </div>

                                        <div class="ci5fe">
                                            <!-- Start -->
                                            <label class="flex items-center">
                                                <x-input class="cthao cxrif" type="radio" wire:model='type' value="minor"></x-input>
                                                <span class="text-sm c9o7o">Minor</span>
                                            </label>
                                            <!-- End -->
                                        </div>

                                        <div class="ci5fe">
                                            <!-- Start -->
                                            <label class="flex items-center">

                                                <x-input class="cthao cxrif" type="radio" wire:model='type' value="couple"></x-input>
                                                <span class="text-sm c9o7o">Couple</span>
                                            </label>
                                            <!-- End -->
                                        </div>

                                    </div>
                                </div>
                                <div class="flex cwh9k">
                                    <div class="cy6kd">
                                        <label class="block text-sm cw92y ci4cg" for="city">First Name <span class="c6tg6">*</span></label>
                                        <x-input class="w-full px-4 py-2 rounded-md border-slate-700 c03gb c3ff8" type="text" wire:model='first_name'></x-input>
                                        @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="cy6kd">
                                        <label class="block text-sm cw92y ci4cg" for="city">Last Name <span class="c6tg6">*</span></label>
                                        <x-input class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" type="text" wire:model='last_name'></x-input>
                                        @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="flex cwh9k">
                                    <div class="cy6kd">
                                        <label class="block text-sm cw92y ci4cg" for="city">Phone <span class="c6tg6">*</span></label>
                                        <x-input class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" type="text" wire:model='phone'></x-input>
                                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="cy6kd">
                                        <label class="block text-sm cw92y ci4cg" for="city">Email <span class="c6tg6">*</span></label>
                                        <x-input class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" type="text" wire:model='email'></x-input>
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!-- Street Address -->
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="street">Street Address <span class="c6tg6">*</span></label>
                                    <x-input class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" type="text" wire:model='address'></x-input>
                                    @error('address') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <!-- City and Postal Code -->
                                <div class="flex cwh9k">
                                    <div class="cy6kd">
                                        <label class="block text-sm cw92y ci4cg" for="city">City <span class="c6tg6">*</span></label>
                                        <x-input class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" type="text" wire:model='city'></x-input>
                                        @error('city') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="cy6kd">
                                        <div class="cy6kd">
                                            <label class="block text-sm cw92y ci4cg " for="postal-code">State <span class="c6tg6">*</span></label>
                                            <select id="state" class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" wire:model='state'>
                                                <option value="">Select State</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Website -->
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="postal-code">Postal Code <span class="c6tg6">*</span></label>
                                    <x-input class="w-full px-4 py-2 rounded-md border-slate-400 c03gb c3ff8" type="text" wire:model='zip'></x-input>
                                        @error('zip') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm cw92y ci4cg" for="street">Type of Billing</label>
                                    <div class="flex items-center" x-data="{ checked: true }">
                                        <div class="c987k">
                                            <input type="checkbox" id="switch-1" class="cbl3h" x-model="checked">
                                            <label class="ce4zx c717g" for="switch-1">
                                                <span class="bg-white cl0q9" aria-hidden="true"></span>
                                                <span class="cbl3h">Switch label</span>
                                            </label>
                                        </div>
                                        <div class="text-sm ciz4v czgoy clmtf c9o7o" x-text="checked ? 'Self-Pay' : 'Insurance'">Self-Pay</div>
                                    </div>
                                    @error('website') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="cro1p">
                                    <div class="c958j">
                                        <a wire:click='register' class="btn cfeqx cf1ce ceqwg c3ff8">Continue</a>
                                    </div>
                                    <div class="text-slate-500 cob4g c0qeg clmtf">Should you ever change your mind, we offer a 14-day, no-questions-asked refund policy.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
