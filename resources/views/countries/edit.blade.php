@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <form class="form-horizontal" action="{{route('countries.update', $country)}}" method="post" enctype="multipart/form-data">
                <div class="form-group" style="space-between: 5px;">
                    <label class="control-label col-sm-2" for="name">Country Name</label>
                    <input type="text" name="name" class="form-control" value="{{$country->name}}">
                </div>
                <div class="form-group">
                    <label for="season_start">Season starts</label>
                    <input type="text" name="season_start" class="form-control" value="{{$country->season_start}}">
                </div>
                <div class="form-group">
                    <label for="season_end">Season ends</label>
                    <input type="text" name="season_end" class="form-control" value="{{$country->season_end}}">
                </div>
                <button class="btn btn-outline-warning">update</button>
                @csrf
                @method('put')
            </form>
        </div>
    </div>
</div>
@endsection