@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <form class="form-horizontal" action="{{route('countries.store')}}" method="post" enctype="multipart/form-data">
                <div class="form-group" style="space-between: 5px;">
                    <label class="control-label col-sm-2" for="name">Country Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter country">
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="col-sm-6">
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="season_start">Season starts</label>
                    <input type="text" name="season_start" class="form-control" placeholder="Enter starting date">
                </div>
                <div class="form-group">
                    <label for="season_end">Season ends</label>
                    <input type="text" name="season_end" class="form-control" placeholder="Enter ending date">
                </div>
                <button class="btn btn-outline-warning">create</button>
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection