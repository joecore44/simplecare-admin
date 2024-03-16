<div>

    <div class="ca831 cofxq">
        {{ var_dump($userInput) }}
        <br /><br />
        {{ $firstName}} {{ $email}}
        <!-- Form -->
            @if($this->currentStep == 1)
            <div>
                <!-- Meta -->
                <div class="cyqq9 cxbdy cuga1 cd0mw clk9r crkc7">
                    <ul>
                        <!-- Cart item -->
                        <li class="items-center border-slate-200 dark:border-slate-700 cz4zt clk9r c3ntd">
                            <a class="block cy7lu c7n6y clxmc cwtt7 c958j czbt8" href="#0">
                                <img class="rounded-sm" src="https://bask-staging.s3.us-east-1.amazonaws.com/subscriber-public/3/81623b21-7395-4572-a05d-929c316fdbb1-bask-glp-1-vials-copy.png
                                " width="200" height="142" alt="Product 01">
                            </a>
                            <div class="ckut6">
                                <a href="#0">
                                    <h3 class="text-slate-800 dark:text-slate-100 cqosy cs31h ci4cg">Semaglutide + B12 (0.25mg Weekly)</h3>
                                </a>
                                <div class="text-sm c7j98">.25mL (0.25mg) 1 x 1-month</div>
                                <!-- Product meta -->
                                <div class="flex flex-wrap items-center cmgwo">
                                    <!-- Rating and price -->
                                    <div class="flex flex-wrap items-center mr-2 cwkb0">
                                        <!-- Rating -->
                                        <div class="flex items-center cwkb0">
                                            <!-- Stars -->
                                            <div class="flex cisva">
                                                <button>
                                                    <span class="cbl3h">1 star</span>
                                                    <svg class="cz5ai c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="cbl3h">2 stars</span>
                                                    <svg class="cz5ai c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="cbl3h">3 stars</span>
                                                    <svg class="cz5ai c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="cbl3h">4 stars</span>
                                                    <svg class="cz5ai c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                                <button>
                                                    <span class="cbl3h">5 stars</span>
                                                    <svg class="cdfsn cweq2 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                        <path d="M10 5.934L8 0 6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <!-- Rate -->
                                            <div class="inline-flex text-sm ckrqz cw92y">4.2</div>
                                        </div>
                                        <div class="cdfsn czgoy">·</div>
                                        <!-- Price -->
                                        <div>
                                            <div class="inline-flex text-sm rounded-full cq2p6 cdbjv c6rpu cwvsn cob4g cw92y cxcbl ciamg">$297.00</div>
                                        </div>
                                    </div>
                                    <button class="text-sm ck3o7 cn69j">Back</button>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="c9r0z c0ycj">
                    <div class="ca831 cofxq">
                        <div class="cob4g">

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm text-left cw92y ci4cg" for="firstName">First Name</label>
                                    <input type="text" class="c03gb c3ff8" wire:model.live='firstName'/>
                                    @error('full_name') <span class="error">{{ $message }}</span> @enderror
                                </div>

                                    <label class="block text-sm text-left cw92y ci4cg" for="email">Email</label>
                                    <input type="email" class="c03gb c3ff8" wire:model.live='email'/>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            @endif
            <div class="cd0mw ce97l">
            @if(isset($stepData) && count($stepData) > 0)

                @foreach ($stepData as $question)
                <h2 class="text-2xl font-bold text-slate-800 dark:text-slate-100 crkc7">{{ $question['title'] }}</h2>
                    @foreach ($question['answers'] as $answer)
                        <label class="block cl9dd c4ijw">
                            <input type="radio" class="cbl3h c07hd" name="question_{{ $answer['question_id'] }}" value="{{ $answer['value'] }}" wire:change="updateInput('{{ $question->title }}', $event.target.value, '{{ $answer['next_step_id'] }}')">
                            <div class="flex items-center text-sm bg-white border rounded text-slate-800 dark:text-slate-100 dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cw92y cgpmj cl0q9 c5mbg">
                                <svg class="mr-4 c3wll c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                    <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z"></path>
                                    <path class="text-indigo-300" d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z"></path>
                                    <path class="text-indigo-200" d="M13 12.588v11l8.486-4.714A1 1 0 0 0 22 18V7.589l-9 4.999Z"></path>
                                </svg>
                                <span>{{ $answer['label'] }}</span>
                            </div>
                            <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                        </label>
                    @endforeach
                @endforeach
            @endif

            @error('practice_size') <span class="error">{{ $message }}</span> @enderror
            <div class="flex items-center cmgwo">
                <a wire:click="setStep('{{$this->nextStep}}')" class="btn cfeqx cf1ce ceqwg c1fq8">Next Step -&gt;</a>
            </div>
        </form>
    </div>
</div>
