<div>
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
</div>
