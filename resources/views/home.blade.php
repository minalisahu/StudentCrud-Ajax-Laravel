@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enrollment App') }}</div>
                    @if (session('success_message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success_message') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="action-button float-right">
                                <a href="{{route('student.create')}}" class="btn btn-sm btn-dark"><i class="fa fa-plus">{{__('New Student')}}</i></a>
                                </div>
                            </div>
                            <div class="card-body p-1" id="table">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th>{{__('SNo.')}}</th>
                                                <th>{{__('Student Name')}}</th>
                                                <th>{{__('Email')}}</th>
                                                <th>{{__('Phone#')}}</th>
                                                <th>{{__('Class')}}</th>
                                                <th>{{__('Marks%')}}</th>
                                                <th>{{__('Action')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($students as $student)
                                            <tr>
                                                <td>{{$student->id}}</td>
                                                <td>
                                                   <a href="#" onclick="editStudentForm('{{csrf_token()}}','{{route('student.edit')}}','{{$student->id}}')" >{{$student->student_name}} </a>
                                                </td>
                                                <td>{{$student->email}}</td>
                                                <td>{{$student->phone}}</td>
                                                <td>{{$student->class}}</td>
                                                <td>{{$student->marks}} % </td>
                                                <td>
                                                 <button onclick="editStudentForm('{{csrf_token()}}','{{route('student.edit')}}','{{$student->id}}')" class="btn btn-sm btn-info"><i class="fa fa-edit">{{__('Edit')}}</i></button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right p-2">
                                {!! $students->render() !!}
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!--edit student Modal -->
<div class="modal fade" id="addStudent" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-overlay"></div>
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Details')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="NewStudentForm">
            </div>
        </div>
    </div>
</div>
