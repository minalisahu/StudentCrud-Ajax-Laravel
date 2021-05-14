@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary float-left">{{__('New Student')}}</h4>
                <div class="action-button float-right">
                    <a href="{{route('home')}}" class="btn btn-sm btn-dark"><i class="fa fa-list">{{__('List')}}</i></a>
                </div>
            </div>
            <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @include ('student.form')
                </div>
                <div class="card-footer text-right p-2">
                    <button class="btn btn-primary">{{__('Create')}}</button>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection

