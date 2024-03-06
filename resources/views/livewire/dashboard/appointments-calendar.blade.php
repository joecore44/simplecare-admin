<div wire:poll>
    <div
    x-data="{ open: false }"
    @open-slide-over.window="open = true"
    @keydown.escape.window="open = false"
    @close-slideover.window="open = false"
>
    <main class="ckut6">
        <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj" x-data="calendar" x-init="initCalendar" >

            <!-- Page header -->
            <div class="cyqq9 cxbdy clk9r c958j">

                <!-- Left: Title -->
                <div class="clxmc c958j">
                    <h1 class="font-bold text-slate-800 dark:text-slate-100 cy709 cjefr"><span x-text="`${monthNames[month]} ${year}`"></span> ✨</h1>
                </div>

                <!-- Right: Actions -->
                <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">

                    <!-- Previous month button -->
                    <button class="bg-white btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c6idw ce1qg c46uo c23qa c2va0 c6xw6 ca92s ch7yu cm7vt cgvnu cxc4n csq8i" :disabled="month === 0 ? true : false" @click="month--; getDays()">
                        <span class="cbl3h">Previous month</span><wbr>
                        <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                            <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                        </svg>
                    </button>

                    <!-- Next month button -->
                    <button class="bg-white btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c6idw ce1qg c46uo c23qa c2va0 c6xw6 ca92s ch7yu cm7vt cgvnu cxc4n csq8i" :disabled="month === 11 ? true : false" @click="month++; getDays()">
                        <span class="cbl3h">Next month</span><wbr>
                        <svg class="c3wll cgmrc cm474" viewBox="0 0 16 16">
                            <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                        </svg>
                    </button>

                    <hr class="ce4zx cr58u cmt80 crszu cpuqo c63v7">

                    <!-- Add appointment button -->
                    <button class="btn cfeqx cf1ce ceqwg" @click="open = true">
                        <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                        </svg>
                        <span class="hidden cmh5t c9o7o">Add Appointment</span>
                    </button>
                </div>
            </div>

            <!-- Filters and view buttons -->
            <div class="cyqq9 cxbdy clk9r c958j">

                <!-- Filters  -->
                <div class="mr-2 clxmc c958j">
                    <ul class="flex flex-wrap items-center -m-1">
                        <li class="m-1">
                            <button class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo cm7vt cjusy">
                                <div class="ca1cm c7n6y ca6b9 c1s2g"></div>
                                <span class="ci1qv">Acme Inc.</span>
                            </button>
                        </li>
                        <li class="m-1">
                            <button class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo cm7vt cjusy">
                                <div class="ck3g6 c7n6y ca6b9 c1s2g"></div>
                                <span class="ci1qv">Life &amp; Family</span>
                            </button>
                        </li>
                        <li class="m-1">
                            <button class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo cm7vt cjusy">
                                <div class="cf1ce c7n6y ca6b9 c1s2g"></div>
                                <span class="ci1qv">Reservations</span>
                            </button>
                        </li>
                        <li class="m-1">
                            <button class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo cm7vt cjusy">
                                <div class="cored c7n6y ca6b9 c1s2g"></div>
                                <span class="ci1qv">Events</span>
                            </button>
                        </li>
                        <li class="m-1">
                            <button class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400 c46uo cm7vt cjusy">
                                <div class="ctnuc c7n6y ca6b9 c1s2g"></div>
                                <span class="ci1qv">Misc</span>
                            </button>
                        </li>
                        <li class="m-1">
                            <button class="text-indigo-500 bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt cjusy">+Add New</button>
                        </li>
                    </ul>
                </div>

                <!-- View buttons (requires custom integration) -->
                <div class="flex cmaja czfjh">
                    <button class="text-indigo-500 btn border-slate-200 dark:border-slate-700 cjbtp c3jt4 cwcgw c8jzs ca5e0 cn1je">Month</button>
                    <button class="bg-white btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 cotxv ch1ih cjbtp cwcgw c8jzs c6w4h ca5e0">Week</button>
                    <button class="bg-white btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 cotxv ch1ih cjbtp cwcgw c8jzs c6w4h ca5e0">Day</button>
                </div>
            </div>

            <!-- Calendar table -->
            <div class="bg-white rounded-sm dark:bg-slate-800 ct1ew cse7i" x-cloak="">

                <!-- Days of the week -->
                <div class="border-slate-200 dark:border-slate-700 c23rj cz4zt ck57v c5va1">
                    <template x-for="(day, index) in dayNames" :key="index">
                        <div class="c6d72 c8o14">
                            <div class="text-sm text-slate-500 cob4g cw92y caqfm" x-text="day.substring(0,3)"></div>
                            <div class="hidden text-sm text-slate-500 dark:text-slate-400 cob4g cw92y co267" x-text="day"></div>
                        </div>
                    </template>
                </div>

                <!-- Day cells -->
                <div class="ce4zx cr58u c23rj ck57v c5va1">
                    <!-- Diagonal stripes pattern -->
                    <svg class="cbl3h">
                        <defs>
                            <pattern id="stripes" patternUnits="userSpaceOnUse" width="5" height="5" patternTransform="rotate(135)">
                                <line class="cbacn c8bfd cmo81 c8si1" x1="0" y="0" x2="0" y2="5" stroke-width="2"></line>
                            </pattern>
                        </defs>
                    </svg>
                    <!-- Empty cells (previous month) -->
                    <template x-for="blankday in startingBlankDays">
                        <div class="dark:bg-slate-800 cn1je c4hfa c52lo chkq1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="url(#stripes)"></rect>
                            </svg>
                        </div>
                    </template>
                    <!-- Days of the current month -->
                    <template x-for="(day, dayIndex) in daysInMonth" :key="dayIndex">
                        <div class="bg-white dark:bg-slate-800 ct1ew c4ijw c4hfa c52lo chkq1">
                            <div class="flex cmgwo chmlm crszu">
                                <!-- Events -->
                                <div class="flex ct1ew cg25h c4ijw chmlm cgk03 ckut6">
                                    <template x-for="event in getEvents(day)">
                                        <button class="cojuf c4ijw c3ff8 ci4cg">
                                            <div class="rounded ct1ew cxcbl ciamg" :class="{
                                                    'ceqwg ca1cm': event.eventColor === 'sky',
                                                    'ceqwg cf1ce': event.eventColor === 'indigo',
                                                    'ceqwg ctnuc': event.eventColor === 'yellow',
                                                    'ceqwg ck3g6': event.eventColor === 'emerald',
                                                    'ceqwg cored': event.eventColor === 'red',
                                                }">
                                                <!-- Event name -->
                                                <div class="cqosy c32al c0qeg" x-text="event.eventName"></div>
                                                <!-- Event time -->
                                                <div class="hidden cw3n3 cb161 c32al c0qeg">
                                                    <!-- Start date -->
                                                    <template x-if="event.eventStart">
                                                        <span x-text="event.eventStart.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                                    </template>
                                                    <!-- End date -->
                                                    <template x-if="event.eventEnd">
                                                        <span>
                                                            - <span x-text="event.eventEnd.toLocaleTimeString([], {hour12: true, hour: 'numeric', minute:'numeric'})"></span>
                                                        </span>
                                                    </template>
                                                </div>
                                            </div>
                                        </button>
                                    </template>
                                    <div class="pointer-events-none c1y33 c5t2s crs2y ctu3a csmh2 csp9v cke32 c76e0 cgmrc" aria-hidden="true"></div>
                                </div>
                                <!-- Cell footer -->
                                <div class="flex items-center cmgwo cg25h cgk03">
                                    <!-- More button (if more than 2 events) -->
                                    <template x-if="getEvents(day).length > 2">
                                        <button class="border rounded text-slate-500 border-slate-200 dark:border-slate-700 ch1ih c626f cob4g cw92y ct1gt cibhb cjdg5 c0qeg">
                                            <span class="csu7j">+</span><span x-text="getEvents(day).length - 2"></span> <span class="hidden cwacg">more</span>
                                        </button>
                                    </template>
                                    <!-- Day number -->
                                    <button class="inline-flex items-center justify-center rounded-full ck4sj cqinu ch1ih cob4g cw92y cit19 c1fq8 c0qeg ceob2 chcsl" :class="{'text-indigo-500': isToday(day) }" x-text="day"></button>
                                </div>
                            </div>
                        </div>
                    </template>
                    <!-- Empty cells (next month) -->
                    <template x-for="blankday in endingBlankDays">
                        <div class="dark:bg-slate-800 cn1je c4hfa c52lo chkq1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                <rect width="100%" height="100%" fill="url(#stripes)"></rect>
                            </svg>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </main>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('calendar', () => ({
                month: null,
                year: null,
                daysInMonth: [],
                startingBlankDays: [],
                endingBlankDays: [],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                events:
                    @php echo json_encode($appointments) @endphp
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 3),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 8, 7),
                    //     eventName: '⛱️ Relax for 2 at Marienbad',
                    //     eventColor: 'indigo'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 12, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 12, 11),
                    //     eventName: 'Team Catch-up',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() - 1, 18, 2),
                    //     eventEnd: '',
                    //     eventName: '✍️ New Project (2)',
                    //     eventColor: 'yellow'
                    // },
                    // // Current month
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 11),
                    //     eventName: 'Meeting w/ Patrick Lin',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 1, 19),
                    //     eventEnd: '',
                    //     eventName: 'Reservation at La Ginestre',
                    //     eventColor: 'indigo'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 9),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 3, 10),
                    //     eventName: '✍️ New Project',
                    //     eventColor: 'yellow'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 21),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 7, 22),
                    //     eventName: '⚽ 2021 - Semi-final',
                    //     eventColor: 'red'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 11),
                    //     eventName: 'Meeting w/Carolyn',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 13),
                    //     eventEnd: '',
                    //     eventName: 'Pick up Marta at school',
                    //     eventColor: 'emerald'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 14),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 15),
                    //     eventName: 'Meeting w/ Patrick Lin',
                    //     eventColor: 'emerald'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 9, 19),
                    //     eventEnd: '',
                    //     eventName: 'Reservation at La Ginestre',
                    //     eventColor: 'indigo'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 11),
                    //     eventName: '⛱️ Relax for 2 at Marienbad',
                    //     eventColor: 'indigo'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 11, 19),
                    //     eventEnd: '',
                    //     eventName: '⚽ 2021 - Semi-final',
                    //     eventColor: 'red'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                    //     eventName: 'Team Catch-up',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 2),
                    //     eventEnd: '',
                    //     eventName: 'Pick up Marta at school',
                    //     eventColor: 'emerald'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 3),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 21, 7),
                    //     eventName: '✍️ New Project (2)',
                    //     eventColor: 'yellow'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 11),
                    //     eventName: 'Team Catch-up',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 22, 19),
                    //     eventEnd: '',
                    //     eventName: '⚽ 2021 - Semi-final',
                    //     eventColor: 'red'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 0),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 23, 23),
                    //     eventName: 'You stay at Meridiana B&B',
                    //     eventColor: 'indigo'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 25, 11),
                    //     eventName: 'Meeting w/ Kylie Joh',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 29, 11),
                    //     eventName: 'Call Request ->',
                    //     eventColor: 'sky'
                    // },
                    // // Next month
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 3),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 2, 7),
                    //     eventName: '✍️ New Project (2)',
                    //     eventColor: 'yellow'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 14, 10),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth(), 14, 11),
                    //     eventName: 'Team Catch-up',
                    //     eventColor: 'sky'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 2),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 25, 3),
                    //     eventName: 'Pick up Marta at school',
                    //     eventColor: 'emerald'
                    // },
                    // {
                    //     eventStart: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 21),
                    //     eventEnd: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 27, 22),
                    //     eventName: '⚽ 2021 - Semi-final',
                    //     eventColor: 'red'
                    // },
                ,

                initCalendar() {
                    const today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.getDays();
                },

                isToday(date) {
                    const today = new Date();
                    const day = new Date(this.year, this.month, date);
                    return today.toDateString() === day.toDateString() ? true : false;
                },

                getEvents(date) {
                    return this.events.filter(e => new Date(e.eventStart).toDateString() === new Date(this.year, this.month, date).toDateString());
                },

                getDays() {
                    const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                    // starting empty cells (previous month)
                    const startingDayOfWeek = new Date(this.year, this.month).getDay();
                    let startingBlankDaysArray = [];
                    for (let i = 1; i <= startingDayOfWeek; i++) {
                        startingBlankDaysArray.push(i);
                    }

                    // ending empty cells (next month)
                    const endingDayOfWeek = new Date(this.year, this.month + 1, 0).getDay();
                    let endingBlankDaysArray = [];
                    for (let i = 1; i < 7 - endingDayOfWeek; i++) {
                        endingBlankDaysArray.push(i);
                    }

                    // current month cells
                    let daysArray = [];
                    for (let i = 1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.startingBlankDays = startingBlankDaysArray;
                    this.endingBlankDays = endingBlankDaysArray;
                    this.daysInMonth = daysArray;
                },
                reinitializeCalendar() {
                    console.log("Reinitializing calendar...");
                    this.initCalendar();
                }
            }))
        })
	</script>
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
                        <form wire:submit.prevent="createAppointment">
                            <div class="mb-6">
                                <label for="client" class="inline-block mb-2 font-bold text-gray-700">Select Client</label>
                                <select class="w-full h-10 bg-white border-none rounded-lg" wire:model.live="client">
                                    <option value="">Select a client</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-6">
                                <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Service</label>
                                <select class="w-full h-10 bg-white border-none rounded-lg" wire:model.live="service">
                                    <option value="">Select a service</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-6 {{ !$providers->count() ? 'opacity-25' : '' }}">
                                <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Provider</label>
                                <select name="provider" id="provider" class="w-full h-10 bg-white border-none rounded-lg"
                                 wire:model.live="provider" {{ !$providers->count() ? 'disabled="disabled"' : '' }}>
                                    <option value="">Select a provider</option>
                                    @foreach($providers as $provider)
                                        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6 {{ !$this->selectedProvider ? 'opacity-25' : '' }}">
                                <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Appointment Time</label>

                                <livewire:dashboard.appointment-calendar-card
                                :service="$this->selectedService"
                                :provider="$this->selectedProvider"
                                :key="optional($this->selectedProvider)->id"/>
                            </div>
                            @if($this->hasDetailsToBook)
                                <div class="mb-6">
                                    <div class="mb-2 font-bold text-gray-700">
                                        Confirm Appointment Details
                                    </div>
                                    <div class="py-2 border-t border-b border-gray-300">
                                        {{ $this->selectedService->name }} with {{ $this->selectedProvider->name}} and {{ $this->selectedClient->first_name }} {{ $this->selectedClient->last_name }}
                                        on {{ $this->timeObject->format('D jS M Y') }} at {{ $this->timeObject->format('g:i A') }}
                                    </div>
                                    <button type="submit" class="w-full px-4 font-bold text-center text-white bg-indigo-500 rounded-lg h-11">
                                        Book Appointment
                                    </button>
                                </div>

                            @endif

                        </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
