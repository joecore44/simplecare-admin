@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/main.css') }}">

@endpush
<div>
    <main class="ckut6">
        <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

            <!-- Page header -->
            <div class="ce97l">

                <!-- Title -->
                <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">Notes & Forms ✨</h1>

            </div>

            <div class="bg-white dark:bg-slate-800 rounded-sm cetne ce97l">
                <div class="flex cygwm cfrx6 chmlm">

                    <!-- Sidebar -->
                    <div class="flex border-slate-200 dark:border-slate-700 cmgrv c7bxu cpcdz cf18b cz385 cqjax cmaja c108j ccg4t cz4zt cjm6w c3ntd">
                        <!-- Group 1 -->
                        <div>
                            <div class="ciz4v czgoy cqosy cw3n3 c0qeg cvavu">Authenticated Templates</div>
                            <ul class="flex cmaja c108j crc9s czt1n">
                                <li class="cid50 crc9s c6orf">
                                    <a class="flex items-center rounded c626f csq8i cfnh0 {{ $this->category == 'intake' ? 'c0ewf ckcyd' : '' }}" wire:click="setCategory('intake')">
                                        <svg class="{{ $this->category == 'intake' ? 'text-indigo-400' : '' }} mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                                        </svg>
                                        <span class="text-sm {{ $this->category == 'intake' ? 'text-indigo-500' : '' }} cnzyq cw92y">Intake Forms</span>
                                    </a>
                                </li>
                                <li class="cid50 crc9s c6orf">
                                    <a class="{{ $this->category == 'progress' ? 'c0ewf ckcyd' : '' }} flex items-center rounded c626f csq8i cfnh0" wire:click="setCategory('progress')">
                                        <svg class="{{ $this->category == 'progress' ? 'text-indigo-400' : '' }} mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"></path>
                                        </svg>
                                        <span class="text-sm {{ $this->category == 'progress' ? 'text-indigo-500' : '' }} cnzyq cw92y">Progress Notes</span>
                                    </a>
                                </li>
                                <li class="cid50 crc9s c6orf">
                                    <a class="{{ $this->category == 'assessment' ? 'c0ewf ckcyd' : '' }} flex items-center rounded c626f csq8i cfnh0" wire:click="setCategory('assessment')">
                                        <svg class="{{ $this->category == 'assessment' ? 'text-indigo-400' : '' }} mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                        </svg>
                                        <span class="{{ $this->category == 'assessment' ? 'text-indigo-500' : '' }} text-sm cnzyq cw92y">Assessments</span>
                                    </a>
                                </li>
                                <li class="cid50 crc9s c6orf">
                                    <a class="{{ $this->category == 'other' ? 'c0ewf ckcyd' : '' }} flex items-center rounded c626f csq8i cfnh0" wire:click="setCategory('other')">
                                        <svg class="{{ $this->category == 'other' ? 'text-indigo-400' : '' }} mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                        </svg>
                                        <span class="{{ $this->category == 'other' ? 'text-indigo-500' : '' }} text-sm cnzyq cw92y">Other</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Group 2 -->
                        <div>
                            <div class="ciz4v czgoy cqosy cw3n3 c0qeg cvavu">Public Templates</div>
                            <ul class="flex cmaja c108j crc9s czt1n">
                                <li class="cid50 crc9s c6orf">
                                    <a class="{{ $this->category == 'feedback' ? 'c0ewf ckcyd' : '' }} flex items-center rounded c626f csq8i cfnh0" wire:click="setCategory('feedback')">
                                        <svg class="{{ $this->category == 'feedback' ? 'text-indigo-400' : '' }} mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M7.001 3h2v4h-2V3zm1 7a1 1 0 110-2 1 1 0 010 2zM15 16a1 1 0 01-.6-.2L10.667 13H1a1 1 0 01-1-1V1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1zM2 11h9a1 1 0 01.6.2L14 13V2H2v9z"></path>
                                        </svg>
                                        <span class="{{ $this->category == 'feedback' ? 'text-indigo-500' : '' }} text-sm cnzyq cw92y">Feedback</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="ckut6">

                        <!-- Panel body -->
                        <div class="c3goj caod7">
                            <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr cg5st">{{ ucfirst($this->category) }} Forms
                                <button class="btn cfeqx cf1ce ceqwg rounded-full " href="{{ route('notes-templates-create')}}" wire:navigate>
                                <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                </svg>

                            </button></h2>
                            <p>Use these templates to create questionnaires for clients to complete in the Client Portal</p>

                            <!-- General -->
                            <section>
                                <ul>
                                    @foreach($formTemplates as $formTemplate)
                                        <li class="flex items-center border-slate-200 dark:border-slate-700 cmgwo cz4zt c8o14">
                                            <!-- Left -->
                                            <div>
                                                <a href="{{ route('notes-templates-create', $formTemplate->uuid ) }}" wire:navigate>
                                                    <div class="text-slate-800 dark:text-slate-100 cqosy">{{ $formTemplate->name }}</div>
                                                </a>
                                            </div>

                                            <div class="flex items-center cbfx9" x-data="{ checked: true }">
                                                <a href="{{ route('notes-templates-render', $formTemplate->uuid) }}" class="c987k" target="blank" wire.navigate>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                      </svg>
                                                    </a>
                                                <div class="text-sm mr-2 ciz4v czgoy clmtf" x-text="checked ? 'On' : 'Off'"></div>
                                                <div class="c987k">
                                                    <input type="checkbox" id="comments-{{ $formTemplate->id }}" class="cbl3h" x-model="checked">
                                                    <label class="ce4zx c717g" for="comments-{{ $formTemplate->id }}">
                                                        <span class="bg-white cl0q9" aria-hidden="true"></span>
                                                        <span class="cbl3h">Enable smart sync</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </section>

                        <!-- Panel footer -->
                        <footer>
                            <div class="flex border-slate-200 dark:border-slate-700 chmlm c87xd cdsqp c7s20">
                                <div class="flex c93ao">
                                    {{ $formTemplates->links() }}
                                </div>
                            </div>
                        </footer>

                    </div>

                </div>

                </div>
            </div>

        </div>
    </main>

</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script>
        jQuery($ => {
            const fbEditor = document.getElementById("build-wrap");
            const formBuilder = $(fbEditor).formBuilder();

            document.getElementById("saveTemplate").addEventListener("click", () => {
                const templateName = document.getElementById("templateName").value;
                const templateDisplayName = document.getElementById("templateDisplayName").value;
                const result = formBuilder.actions.save();
                const category = 'intake';

                @this.saveTemplate(templateName, templateDisplayName, category, result);
            });
        });
    </script>
@endpush
