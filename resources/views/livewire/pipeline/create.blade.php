<div class="grid grid-cols-4 gap-4" id="room__container">

    <main class="col-span-4 ckut6">
        <div class="flex c4ijw crszu">
            <div class="col-span-6 pt-5 cwis9 cqyxl cbr9x cgpmj chmlm ckut6">
                <div class="flex flex-col items-center space-y-2">
                    <!-- Pipeline Name -->
                    <div class="w-1/4 px-4 py-2 mb-3 text-sm text-center text-white bg-orange-500 rounded">
                        {{ $pipeline['name'] }}
                    </div>

                  <!-- Flowchart Container -->






            </div>

            <div class="flex bg-white cwis9 cqyxl cbr9x cgpmj chmlm" style="height:100%;">
                <div class="clpyc cr0xt ckut6 c9r0z c3ntd">

                </div>

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

<style>
/* Custom connection line */
.connection-line {
  width: 1px; /* Line thickness */
  height: 20px; /* Line length */
  background-color: bg-gray-500; /* Line color */
  margin: 0 auto; /* Center the line */
}

/* Custom plus icon wrapper */
.plus-icon-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 20px;
  height: 20px;
  margin: 0 auto;
  background-color: bg-gray-500;
  color: white;
  border-radius: 50%;
}

/* Adjust as needed for your layout */

</style>
</div>
