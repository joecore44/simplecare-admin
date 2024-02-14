{{-- Step one --}}
<div>
@if($current_step == 1)
    <div class="chc0j c9r0z caadu">
        <div class="ca831 cofxq c3ff8">
            <form wire:submit="register">
            <div class="c4ijw">
                <div class="ce4zx cr58u csmh2 cpjwj c76e0 cmx8h cr1ma c3ff8" aria-hidden="true"></div>
                <ul class="flex cmgwo c4ijw c3ff8">
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">1</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl">2</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl">3</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ca831 cofxq">
        <h1 class="text-3xl font-bold text-slate-800 dark:text-slate-100 crkc7">Tell us about your practice. ✨</h1>
        <!-- Form -->
            <div class="cd0mw ce97l">
                <label class="block cl9dd c4ijw">
                    <input type="radio" class="cbl3h c07hd" wire:model='practice_size' value='group'>
                    <div class="flex items-center text-sm bg-white border rounded text-slate-800 dark:text-slate-100 dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cw92y cgpmj cl0q9 c5mbg">
                        <svg class="mr-4 c3wll c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                            <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z"></path>
                            <path class="text-indigo-300" d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z"></path>
                            <path class="text-indigo-200" d="M13 12.588v11l8.486-4.714A1 1 0 0 0 22 18V7.589l-9 4.999Z"></path>
                        </svg>
                        <span>I Have a Group Practice</span>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
                <label class="block cl9dd c4ijw">
                    <input type="radio" name="radio-buttons" class="cbl3h c07hd" wire:model='practice_size' value='solo'>
                    <div class="flex items-center text-sm bg-white border rounded text-slate-800 dark:text-slate-100 dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cw92y cgpmj cl0q9 c5mbg">
                        <svg class="mr-4 c3wll c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                            <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z"></path>
                            <path class="text-indigo-300" d="m11 12.588-9-5V18a1 1 0 0 0 .514.874L11 23.588v-11Z"></path>
                        </svg>
                        <span>I Run a Solo Practice</span>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
                <label class="block cl9dd c4ijw">
                    <input type="radio" name="radio-buttons" class="cbl3h c07hd"  wire:model='practice_size' value='startup'>
                    <div class="flex items-center text-sm bg-white border rounded text-slate-800 dark:text-slate-100 dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cw92y cgpmj cl0q9 c5mbg">
                        <svg class="mr-4 c3wll c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                            <path class="text-indigo-500" d="m12 10.856 9-5-8.514-4.73a1 1 0 0 0-.972 0L3 5.856l9 5Z"></path>
                        </svg>
                        <span>I’m Just Getting Started</span>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
            </div>
            @error('practice_size') <span class="error">{{ $message }}</span> @enderror
            <div class="flex items-center cmgwo">
                <a class="btn cfeqx cf1ce ceqwg c1fq8" wire:click="jump_step(2)">Next Step -&gt;</a>
            </div>
        </form>
    </div>
@endif
{{-- Step 2 --}}
@if($current_step == 2)
    <!-- Progress bar -->
    <div class="chc0j c9r0z caadu">
        <div class="ca831 cofxq c3ff8">
            <div class="c4ijw">
                <div class="ce4zx cr58u csmh2 cpjwj c76e0 cmx8h cr1ma c3ff8" aria-hidden="true"></div>
                <ul class="flex cmgwo c4ijw c3ff8">
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">1</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">2</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl">3</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ca831 cofxq">
        <h1 class="text-3xl font-bold text-slate-800 dark:text-slate-100 crkc7">Now about your profession. ✨</h1>
        <!-- Form -->
            <div class="c95r9 cuga1 cd0mw clk9r ce97l">
                <label class="block cl9dd c4ijw cy6kd">
                    <input type="radio"  wire:model='practice_type' value='mental health' class="cbl3h c07hd">
                    <div class="bg-white border rounded dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cob4g cgpmj cl0q9 crszu c9r0z c3ntd">
                        <svg class="inline-flex c3wll c7n6y c7j98 cjv9a c0wgv" viewBox="0 0 40 40">
                            <circle class="ctyh7" cx="20" cy="20" r="20"></circle>
                            <path class="text-indigo-500" d="m26.371 23.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 24 17v-1.828A4.087 4.087 0 0 0 20 11a4.087 4.087 0 0 0-4 4.172V17a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V27a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z"></path>
                        </svg>
                        <div class="text-slate-800 dark:text-slate-100 cw92y ci4cg">Mental Health</div>
                        <div class="text-sm">Lorem ipsum is place text commonly used.</div>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
                <label class="block cl9dd c4ijw cy6kd">
                    <input type="radio" wire:model='practice_type' value='diet nutrition' class="cbl3h c07hd">
                    <div class="bg-white border rounded dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cob4g cgpmj cl0q9 crszu c9r0z c3ntd">
                        <svg class="inline-flex c3wll c7n6y c7j98 cjv9a c0wgv" viewBox="0 0 40 40">
                            <circle class="ctyh7" cx="20" cy="20" r="20"></circle>
                            <path class="text-indigo-500" d="m26.371 23.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 24 17v-1.828A4.087 4.087 0 0 0 20 11a4.087 4.087 0 0 0-4 4.172V17a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V27a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z"></path>
                            <circle class="ctyh7" cx="20" cy="20" r="20"></circle>
                            <path class="text-indigo-300" d="m30.377 22.749-3.709-1.5a1 1 0 0 1-.623-.926v-.878A3.989 3.989 0 0 0 28.027 16v-1.828c.047-2.257-1.728-4.124-3.964-4.172-2.236.048-4.011 1.915-3.964 4.172V16a3.989 3.989 0 0 0 1.982 3.445v.878a1 1 0 0 1-.623.928c-.906.266-1.626.557-2.159.872-.533.315-1.3 1.272-2.299 2.872 1.131.453 6.075-.546 6.072.682V28a2.99 2.99 0 0 1-.182 1h7.119A.996.996 0 0 0 31 28v-4.323a1 1 0 0 0-.623-.928Z"></path>
                            <path class="text-indigo-500" d="m22.371 24.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 20 18v-1.828A4.087 4.087 0 0 0 16 12a4.087 4.087 0 0 0-4 4.172V18a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V28a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z"></path>
                        </svg>
                        <div class="text-slate-800 dark:text-slate-100 cw92y ci4cg">Dietician and Nutritionist</div>
                        <div class="text-sm">Lorem ipsum is place text commonly used.</div>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
            </div>
            <div class="c95r9 cuga1 cd0mw clk9r ce97l">
                <label class="block cl9dd c4ijw cy6kd">
                    <input type="radio" wire:model='practice_type' value='hormone replacement' class="cbl3h c07hd">
                    <div class="bg-white border rounded dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cob4g cgpmj cl0q9 crszu c9r0z c3ntd">
                        <svg class="inline-flex c3wll c7n6y c7j98 cjv9a c0wgv" viewBox="0 0 40 40">
                            <circle class="ctyh7" cx="20" cy="20" r="20"></circle>
                            <path class="text-indigo-500" d="m26.371 23.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 24 17v-1.828A4.087 4.087 0 0 0 20 11a4.087 4.087 0 0 0-4 4.172V17a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V27a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z"></path>
                        </svg>
                        <div class="text-slate-800 dark:text-slate-100 cw92y ci4cg">Hormone Replacement</div>
                        <div class="text-sm">Lorem ipsum is place text commonly used.</div>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
                <label class="block cl9dd c4ijw cy6kd">
                    <input type="radio" wire:model='practice_type' value='substance use' class="cbl3h c07hd">
                    <div class="bg-white border rounded dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt crp72 cob4g cgpmj cl0q9 crszu c9r0z c3ntd">
                        <svg class="inline-flex c3wll c7n6y c7j98 cjv9a c0wgv" viewBox="0 0 40 40">
                            <circle class="ctyh7" cx="20" cy="20" r="20"></circle>
                            <path class="text-indigo-500" d="m26.371 23.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 24 17v-1.828A4.087 4.087 0 0 0 20 11a4.087 4.087 0 0 0-4 4.172V17a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V27a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z"></path>
                            <circle class="ctyh7" cx="20" cy="20" r="20"></circle>
                            <path class="text-indigo-300" d="m30.377 22.749-3.709-1.5a1 1 0 0 1-.623-.926v-.878A3.989 3.989 0 0 0 28.027 16v-1.828c.047-2.257-1.728-4.124-3.964-4.172-2.236.048-4.011 1.915-3.964 4.172V16a3.989 3.989 0 0 0 1.982 3.445v.878a1 1 0 0 1-.623.928c-.906.266-1.626.557-2.159.872-.533.315-1.3 1.272-2.299 2.872 1.131.453 6.075-.546 6.072.682V28a2.99 2.99 0 0 1-.182 1h7.119A.996.996 0 0 0 31 28v-4.323a1 1 0 0 0-.623-.928Z"></path>
                            <path class="text-indigo-500" d="m22.371 24.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 20 18v-1.828A4.087 4.087 0 0 0 16 12a4.087 4.087 0 0 0-4 4.172V18a3.982 3.982 0 0 0 2 3.445v.878a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V28a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z"></path>
                        </svg>
                        <div class="text-slate-800 dark:text-slate-100 cw92y ci4cg">Organization</div>
                        <div class="text-sm">Lorem ipsum is place text commonly used.</div>
                    </div>
                    <div class="rounded pointer-events-none cvc1e cd0c0 cyj9a csmh2 cbe4h c1u8w" aria-hidden="true"></div>
                </label>
            </div>
            <div class="flex items-center cmgwo c84bv ce97l">
                <div>
                    <div class="text-sm text-slate-800 dark:text-slate-100 cw92y ci4cg">💸 Lorem ipsum is place text commonly?</div>
                    <div class="c0qeg">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts.</div>
                </div>
                <div class="flex items-center">
                    <div class="c987k">
                        <input type="checkbox" id="switch" class="cbl3h" checked="">
                        <label class="ce4zx c717g" for="switch">
                            <span class="bg-white cl0q9" aria-hidden="true"></span>
                            <span class="cbl3h">Switch label</span>
                        </label>
                    </div>
                </div>
            </div>
            @error('practice_type') <span class="error">{{ $message }}</span> @enderror
            <div class="flex items-center cmgwo">
                <a class="text-sm ck3o7 cn69j" wire:click="back_step(1)">&lt;- Back</a>
                <a class="btn cfeqx cf1ce ceqwg c1fq8" wire:click="jump_step(3)">Next Step -&gt;</a>
            </div>
        </form>
    </div>
@endif
{{-- Step 3 --}}
@if($current_step == 3)
    <div class="chc0j c9r0z caadu">
        <div class="ca831 cofxq c3ff8">
            <div class="c4ijw">
                <div class="ce4zx cr58u csmh2 cpjwj c76e0 cmx8h cr1ma c3ff8" aria-hidden="true"></div>
                <ul class="flex cmgwo c4ijw c3ff8">
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">1</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">2</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">3</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ca831 cofxq">
        <h1 class="text-3xl font-bold text-slate-800 dark:text-slate-100 crkc7">How about your company. ✨</h1>
        <!-- Form -->
            <div class="cxebx ce97l">
                <!-- Company Name -->
                <div>
                    <label class="block text-sm cw92y ci4cg" for="company-name">Company Name <span class="c6tg6">*</span></label>
                    <input id="company-name" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='name'>
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex cwh9k">
                    <div class="cy6kd">
                        <label class="block text-sm cw92y ci4cg" for="city">Phone <span class="c6tg6">*</span></label>
                        <input id="city" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='phone'>
                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="cy6kd">
                        <label class="block text-sm cw92y ci4cg" for="city">Email <span class="c6tg6">*</span></label>
                        <input id="city" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='email'>
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <!-- Street Address -->
                <div>
                    <label class="block text-sm cw92y ci4cg" for="street">Street Address <span class="c6tg6">*</span></label>
                    <input id="street" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='address'>
                    @error('address') <span class="error">{{ $message }}</span> @enderror
                </div>
                <!-- City and Postal Code -->
                <div class="flex cwh9k">
                    <div class="cy6kd">
                        <label class="block text-sm cw92y ci4cg" for="city">City <span class="c6tg6">*</span></label>
                        <input id="city" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='city'>
                        @error('city') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="cy6kd">
                        <div class="cy6kd">
                            <label class="block text-sm cw92y ci4cg" for="postal-code">State <span class="c6tg6">*</span></label>
                            <select id="state" class="w-full px-4 py-2 rounded-md border-slate-400" wire:model='state'>
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
                    <input id="postal-code" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='zip'>
                    @error('zip') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-sm cw92y ci4cg" for="street">Web Address</label>
                    <input id="website" class="w-full px-4 py-2 rounded-md border-slate-400" type="text" wire:model='website'>
                    @error('website') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex items-center cmgwo">
                <a class="text-sm ck3o7 cn69j" wire:click="back_step(2)">&lt;- Back</a>
                <a class="btn cfeqx cf1ce ceqwg c1fq8" wire:click="jump_step(4)">Next Step -&gt;</a>
            </div>
    </div>
@endif
{{-- Step 4 --}}
@if($current_step == 4)
    <div class="chc0j c9r0z caadu">
        <div class="ca831 cofxq c3ff8">
            <div class="c4ijw">
                <div class="ce4zx cr58u csmh2 cpjwj c76e0 cmx8h cr1ma c3ff8" aria-hidden="true"></div>
                <ul class="flex cmgwo c4ijw c3ff8">
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">1</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">2</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">3</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl">4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="c9r0z c0ycj">
        <div class="ca831 cofxq">
            <div class="cob4g">
                <svg class="inline-flex c3wll crkc7 ciqso cixej" viewBox="0 0 64 64">
                    <circle class="cwyy0 c8hst" cx="32" cy="32" r="32"></circle>
                    <path class="cdbjv clfqm" d="m28.5 41-8-8 3-3 5 5 12-12 3 3z"></path>
                </svg>
                <h1 class="text-3xl font-bold text-slate-800 dark:text-slate-100 ce97l">Great, {{ $name }} is ready to go! 🙌</h1>
                <div class="mb-3 text-sm text-slate-800 dark:text-slate-100 cw92y ci4cg">Let’s get you logged in with your a new user account.</div>

                <div class="space-y-4">
                    <div>
                        <label class="block text-sm text-left cw92y ci4cg" for="street">Full Name</label>
                        <input type="text" class="w-full px-4 py-2 rounded-md border-slate-400" wire:model='full_name'/>
                        @error('full_name') <span class="error">{{ $message }}</span> @enderror
                    </div>

                        <label class="block text-sm text-left cw92y ci4cg" for="street">Password</label>
                        <input type="password" class="w-full px-4 py-2 rounded-md border-slate-400" wire:model='password'/>
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                        <div class="flex items-center mt-4 cmgwo">
                            <a class="btn cfeqx cf1ce ceqwg c1fq8" wire:click='register'>Go to Dashboard -&gt;</a>
                        </div>
                    </form>
            </div>

        </div>
    </div>
@endif
</div>
