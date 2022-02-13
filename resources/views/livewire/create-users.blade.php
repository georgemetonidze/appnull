<div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 custom-bg d-flex justify-content-center align-items-center">
                <div class="max-width-250">
                    <h3 class="text-white text-center">Hello Friend!</h3>
                    <h5 class="text-white text-center">Enter your personal<br> details   and start journey <br> with us!</h5>
                </div>
            </div>
            <div class="    col-12 col-md-6 mt-md-0 mt-2 d-flex justify-content-center align-items-center">
                <form wire:submit.prevent="save">
                    @if ($messageText != '')
                        <div class="alert alert-info">
                            {{ $messageText }}
                        </div>
                    @endif
                    {{--        NAME--}}
                        <h3 class="text-green text-center">Add a User</h3>
                        <h6 class="text-secondary text-center">Type in your info</h6>
                        <div class="form-group row">
                            <div class="col-12">
                                <input wire:model="name" type="text" placeholder="name"
                                       class="bg-lightgreen form-control @error('name') is-invalid @enderror"/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    {{--            COUNTRY--}}

                    <div class="form-group row mt-4 ">
                        <div class="col-12">
                            <select wire:model="country" name="country"
                                    class="form-control bg-lightgreen   @error('country') is-invalid @enderror"
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
                    <div class="form-group row mt-4">
                        <div class="col-12">
                            <input wire:model="birthdate" type="date"
                                   class="bg-lightgreen form-control  @error('birthdate') is-invalid @enderror"/>
                            @error('birthdate')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row mt-4 mb-xl-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success w-100 rounded-pill">
                                Save
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 p-0">
                <table class="table ">
                    <thead>
                    <tr>
                        <th class="bg-green text-start">Name</th>
                        <th class="bg-green text-center">country</th>
                        <th class="bg-green text-end">birthday</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr class="p-1">
                            <td class="bg-lightgreen text-start">{{ $user->name }}</td>
                            <td class="bg-lightgreen text-center">{{ $user->name }}, {{ $user->country }}</td>
                            <td class="bg-lightgreen text-end">{{ $user->birthdate }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
