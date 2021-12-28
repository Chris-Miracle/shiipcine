@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Movies') }}</div>
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <select class="form-control @error('cinema_location') is-invalid @enderror" name="cinema_location">
                            <option value=""> Select Cinema Location</option>
                            @foreach ($locations as $cinema )
                                <option value="{{$cinema->id}}">{{ $cinema->location }}</option>
                            @endforeach
                        </select>
                        {{-- <div class="text-danger">{{$errors->first('category')}}</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
