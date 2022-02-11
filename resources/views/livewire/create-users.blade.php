<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <form wire:submit.prevent="save">
        @if ($messageText != '')
            <div class="alert alert-info">
                {{ $messageText }}
            </div>
        @endif

{{--        NAME--}}
        <div class="form-group row mt-xl-4">
            <label for="name" class="col-md-4 col-form-label text-md-right">

            </label>
            <div class="col-md-6">
                <input wire:model="name" type="text" placeholder="name"
                       class="form-control   @error('name') is-invalid @enderror"/>
                @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
{{--            COUNTRY--}}

        <div class="form-group row mt-xl-4">
            <label for="country" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <select wire:model="country" name="country"
                        class="form-control   @error('country') is-invalid @enderror"
                        >
                    <option value="">Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                    @endforeach
                </select>

                @error('country')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
{{--         BIRTHDAY--}}
        <div class="form-group row mt-xl-4">
            <label for="birthdate " class="col-md-4 col-form-label text-md-right">

            </label>
            <div class="col-md-6">
                <input wire:model="birthdate" type="date"
                       class="form-control  @error('birthdate') is-invalid @enderror"/>
                @error('birthdate')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>



        <div class="form-group row mt-xl-4 mb-xl-4">
            <div class="col-md-6 offset-md-4">
                <label for="birthdate " class="col-md-4 col-form-label text-md-right">

                </label>
                <button type="submit" class="btn btn-success button5">
                    Save
                </button>
            </div>
        </div>

    </form>


    <div>
        <table class="table">
            <thead>
            <tr>
                <th class="bg-success">Name</th>
                <th class="bg-success">country</th>
                <th class="bg-success">birthday</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="bg-success">{{ $user->name }}</td>
                    <td class="bg-success">{{ $user->name }}, {{ $user->country }}</td>
                    <td class="bg-success">{{ $user->birthdate }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


</div>
