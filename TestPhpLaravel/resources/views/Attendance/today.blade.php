@extends('layout.master')
@section('title', 'List class')
@section('small_title', 'show all class')

@section('content')
    <div class="">
        <div class="card-body">
            <h3 class="card-title float-left">
                <small class="text-muted">Timeslot today <?php
                print date("d/m/Y <br>", time());
                ?>
            </h3>
            <h3 class="btn float-right">
                luyendh@de.edu.vn
                <a href="/create" >(logout)</a>
            </h3>

            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            <table class="table table-striped">
                <thead>
                <tr class="row">
                    <th class="col-md-1">Slot ID</th>
                    <th class="col-md-2">Timeslot</th>
                    <th class="col-md-2">Subject</th>
                    <th class="col-md-2">Class ID</th>
                    <th class="col-md-3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_class as $item)
                    <tr id="{{$item->id}}" class="row">
                        <th class="col-md-1">{{$item->slotId}}</th>
                        <td class="col-md-2 class-timeSlot" id="timeSlot-{{$item->id}}">{{$item->timeSlot}}</td>
                        <td class="col-md-2 class-subject">{!! $item->subjectId !!}</td>
                        <td class="col-md-2 class-id">{{$item->classId}}</td>
                        <td class="col-md-3">
                            <a href="/attendanceDetails" class="btn btn-link">Take</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="float-right">
            </div>
        </div>
    </div>


@endsection