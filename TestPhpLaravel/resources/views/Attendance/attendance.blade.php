@extends('layout.master')
@section('title', 'Attendance')
@section('small_title', 'Attendance class')

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
                    <th class="col-md-4">Roll Number</th>
                    <th class="col-md-5">Name</th>
                    <th class="col-md-3">Present</th>

                </tr>
                </thead>
                <tbody>
                @foreach($list_student as $item)
                    <tr id="{{$item->id}}" class="row">
                        <th class="col-md-4">{{$item->rollNumber}}</th>
                        <td class="col-md-5 class-subject">{!! $item->fullName !!}</td>
                        <td class="col-md-3">
                            <input type="checkbox" id="check-item5" class="cbox">
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <tr class="row">
                <td class="col-md-8"></td>
                <td><button class="btnSubmit">SAVE</button></td>
                <td><button class="btnReset">RESET</button></td>
            </tr>
            <div class="float-right">
            </div>
        </div>
    </div>

    <script>
        $("#checkAll").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $('.cbox').click(function(){
            $("#checkAll").prop('checked', false);
        });
        $(".btnSubmit").click(function(){
            switch($('#select').val()){
                case "0":
                    alert('SAVE THANH CONG!');
                    break;
                case "1":
                    xoaccmmd();
                    break;
                case "2":
                    alert('Hanh Dong Khac');
                    break;
                default:
                    alert('SAVE THANH CONG!');
                    break;
            }
        });
        function xoaccmmd(){
            var ids = [];
            $('.cbox').each(function(){
                if ($(this).is(':checked')) {
                    ids.push(this.id.replace('check-item', ''));
                }
            });
            alert(ids);
        }
    </script>
@endsection