@extends('template.main')

@section('title', $title)

@section('content_title',__('NFC Card Registration'))

@section('content_description',__("Register New card for patient"))
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    <li class="active">Here</li>
</ol>
@endsection

@section('main_content')
{{--  patient registration  --}}
<div @if (session()->has('regcsuccess') || session()->has('regcfail')) style="margin-bottom:0;margin-top:3vh" @else
    style="margin-bottom:0;margin-top:8vh" @endif class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        @if (session()->has('regcsuccess'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{session()->get('regcsuccess')}}
        </div>
        @endif
        @if (session()->has('regcfailed'))
        <div class="alert alert-danger alert-dismissible">
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
            {{session()->get('regcfailed')}}
        </div>
        @endif
    </div>
    <div class="col-md-1"></div>

</div>

<div class="row">
    <!-- right column -->
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{__('NFC Card Registration Form')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ route('register_card') }}" class="form-horizontal">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">{{__('Card Number')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="card_number"
                                required class="form-control" placeholder="Enter Card Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">{{__('CVV')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="card_cvv"
                                required class="form-control" placeholder="Enter Card CVV">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Patient Registration Number')}} <span
                                style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" name="patient_reg_no"
                                required class="form-control" placeholder="Enter registration number">
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-info pull-right" value="{{__('Register')}}">
                        <input type="reset" class="btn btn-default" value="{{__('Cancel')}}">
                    </div>
                    <!-- /.box-footer -->
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

@endsection
