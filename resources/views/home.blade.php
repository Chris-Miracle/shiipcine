@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Movies') }}</div>
                <div class="card-body">
                    <form action="">
                        <div class="row mb-4">
                            <div class="form-group col-md-6 mb-1">
                                <label for="cinemaLocation">Cinema Location</label>
                                <select class="form-control @error('cinema_location') is-invalid @enderror" name="cinema_location">
                                    <option value=""> Select Cinema Location</option>
                                    @foreach ($locations as $cinema )
                                        <option value="{{$cinema->id}}">{{ $cinema->location }}</option>
                                    @endforeach
                                </select>
                                {{-- <div class="text-danger">{{$errors->first('cinema_location')}}</div> --}}
                            </div>

                            <div class="form-group col-md-6 mb-1">
                                <label for="movieTitle">Title</label>
                                <input type="text" class="form-control @error('movie_title') is-invalid @enderror" placeholder="Eg: Spider Man far from home" name="movie_title" value="{{old('movie_title')}}">
                                {{-- <div class="text-danger">{{$errors->first('movie_title')}}</div> --}}
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="form-group col-md-6 mb-1">
                                <label for="showDate">Show Date</label>
                                <input type="date" class="form-control @error('show_date') is-invalid @enderror" name="show_date" value="{{old('show_date')}}">
                                {{-- <div class="text-danger">{{$errors->first('show_date')}}</div> --}}
                            </div>

                            <div class="form-group col-md-6 mb-1">
                                <label for="showTime">Show Time</label>
                                <input type="time" class="form-control @error('show_time') is-invalid @enderror" name="show_time" value="{{old('show_time')}}">
                                {{-- <div class="text-danger">{{$errors->first('show_time')}}</div> --}}
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Movie Cover [Max Size: 500kb]</label>
                            <img id="image_1" src="{{asset('img/placeholder/ulf.jpg')}}" required alt="your image" style="width:100%; height:200px; border-radius: 7px;"/>
                            <input type="file" class="form-control-file @error('image1') is-invalid @enderror" name="image1" id="imgInp1" value="{{old('image1')}}">
                            {{-- <div class="text-danger">{{$errors->first('image1')}}</div> --}}
                        </div>

                        <button type="submit" class="btn btn-primary mt-1">Upload Movie</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="section-title text-center">
                <h5>Movie List</h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Location</th>
                    <th scope="col">Title</th>
                    <th scope="col">Show Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
