@push('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/lobby.css') }}">
@endpush
<div>

    <div id="room__lobby__container">

        <div id="form__container">
             <div id="form__container__header">
                 <p>👋 Create or Join Room</p>
             </div>


            <form id="lobby__form">

                 <div class="form__field__wrapper">
                     <label>Your Name</label>
                     <input type="text" name="name" required placeholder="Enter your display name..." />
                 </div>

                 <div class="form__field__wrapper">
                     <label>Room Name</label>
                     <input type="text" name="room"  placeholder="Enter room name..." />
                 </div>

                 <div class="form__field__wrapper">
                     <button type="submit">Go to Room
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/></svg>
                    </button>
                 </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('resources/js/loby.js') }}"></script>
@endpush
