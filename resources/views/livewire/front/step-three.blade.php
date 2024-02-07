<div>
    <div class="chc0j c9r0z caadu">
        <div class="ca831 cofxq c3ff8">
            <div class="c4ijw">
                <div class="ce4zx cr58u csmh2 cpjwj c76e0 cmx8h cr1ma c3ff8" aria-hidden="true"></div>
                <ul class="flex cmgwo c4ijw c3ff8">
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl" href="{{ route('step-one')}}" wire:navigate>1</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl" href="{{ route('step-two')}}" wire:navigate>2</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full cf1ce cqosy ceqwg c0qeg ceob2 chcsl" href="{{ route('step-three')}}" wire:navigate>3</a>
                    </li>
                    <li>
                        <a class="flex items-center justify-center rounded-full text-slate-500 dark:text-slate-400 ce4zx cqosy c6vqo c0qeg ceob2 chcsl" href="{{ route('step-four')}}" wire:navigate>4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ca831 cofxq">
        <h1 class="text-3xl font-bold text-slate-800 dark:text-slate-100 crkc7">Company information ✨</h1>
        <!-- Form -->
        <form>
            <div class="cxebx ce97l">
                <!-- Company Name -->
                <div>
                    <label class="block text-sm cw92y ci4cg" for="company-name">Company Name <span class="c6tg6">*</span></label>
                    <input id="company-name" class="c03gb c3ff8" type="text">
                </div>
                <!-- City and Postal Code -->
                <div class="flex cwh9k">
                    <div class="cy6kd">
                        <label class="block text-sm cw92y ci4cg" for="city">City <span class="c6tg6">*</span></label>
                        <input id="city" class="c03gb c3ff8" type="text">
                    </div>
                    <div class="cy6kd">
                        <label class="block text-sm cw92y ci4cg" for="postal-code">Postal Code <span class="c6tg6">*</span></label>
                        <input id="postal-code" class="c03gb c3ff8" type="text">
                    </div>
                </div>
                <!-- Street Address -->
                <div>
                    <label class="block text-sm cw92y ci4cg" for="street">Street Address <span class="c6tg6">*</span></label>
                    <input id="street" class="c03gb c3ff8" type="text">
                </div>
                <!-- Country -->
                <div>
                    <label class="block text-sm cw92y ci4cg" for="country">Country <span class="c6tg6">*</span></label>
                    <select id="country" class="cy9mt c3ff8">
                        <option>USA</option>
                        <option>Italy</option>
                        <option>United Kingdom</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center cmgwo">
                <a class="text-sm ck3o7 cn69j" href="onboarding-02.html">&lt;- Back</a>
                <a class="btn cfeqx cf1ce ceqwg c1fq8" href="onboarding-04.html">Next Step -&gt;</a>
            </div>
        </form>
    </div>
</div>
