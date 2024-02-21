<div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj" x-data="calendar" x-init="initCalendar">
    <div
    x-data="{ open: false }"
    @open-slide-over.window="open = true"
    @keydown.escape.window="open = false"
    @close-slideover.window="open = false"
>
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

            <!-- Create event button -->
            <button class="btn cfeqx cf1ce ceqwg" @click="open = true">
                <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden cmh5t c9o7o">Add Availability</span>
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

        <div wire:ignore id='calendar'></div>
    </div>
    @push('scripts')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                initialDate: '2024-02-07',
                headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                {
                    title: '🍻 All Day Event',
                    start: '2024-02-01'
                },
                {
                    title: 'Long Event',
                    start: '2024-02-07',
                    end: '2024-02-10'
                },
                {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2024-02-09T16:00:00'
                },
                {
                    groupId: '999',
                    title: 'Repeating Event',
                    start: '2024-02-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2024-02-11',
                    end: '2024-02-13'
                },
                {
                    title: 'Meeting',
                    start: '2024-02-12T10:30:00',
                    end: '2024-02-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2024-02-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2024-02-12T14:30:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2024-02-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'https://google.com/',
                    start: '2024-02-28'
                }
                ]
            });

            calendar.render();
            });
        </script>
    @endpush
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

