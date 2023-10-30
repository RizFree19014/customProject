@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if (count($errors) > 0)
                    <div class = "alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('store-form')}}" class="needs-validation" novalidate>
                @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">First name</label>
                        <input type="text" name="fname" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="validationTooltip02">Last name</label>
                        <input type="text" name="lname" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="validationTooltipUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                </div>
                                <input type="text" name="username" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="validationTooltip03">City</label>
                        <input type="text" name="city" class="form-control" id="validationTooltip03" placeholder="City" required>
                        <div class="invalid-tooltip">
                            Please provide a valid city.
                        </div>
                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">State</label>
                        <input type="text" name="state" class="form-control" id="validationTooltip04" placeholder="State" required>
                        <div class="invalid-tooltip">
                            Please provide a valid state.
                        </div>
                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="validationTooltip05">Zip</label>
                        <input type="text" name="zip" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                        <div class="invalid-tooltip">
                            Please provide a valid zip.
                        </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
