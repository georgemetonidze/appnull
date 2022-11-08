<div>
{{--    logged user name and logout--}}
    <div>{{ Auth::user()->name }}</div>
    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>

    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container-center-horizontal">
        <div class="start-phone screen">
            <div class="overlap-group">
                <img class="fields" src="img/fields@1x.svg" alt="fields" />
                <div class="texts">
                    <div class="flex-col">
                        <div class="place valign-text-middle sfcompact-regular-normal-white-18px">Name</div>
                        @foreach ($users as $user)
                        <div class="name-2 valign-text-middle sfcompact-regular-normal-abbey-18px">{{ $user->name }}</div>
                        @endforeach
                    </div>
                    <div class="flex-col-1">
                        <h1 class="title valign-text-middle">User Data Table</h1>
                        <div class="country valign-text-middle sfcompact-regular-normal-white-18px">Country</div>
                        @foreach ($users as $user)
                        <div class="name-5 valign-text-middle sfcompact-regular-normal-abbey-18px">{{ $user->name }}, {{ $user->country }}</div>
                        @endforeach
                    </div>
                    <div class="date-container">
                        <div class="date-of-birth valign-text-middle sfcompact-regular-normal-white-18px">Date of Birth</div>
                        @foreach ($users as $user)
                        <div class="date valign-text-middle sfcompact-regular-normal-abbey-18px">{{ $user->birthdate }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
