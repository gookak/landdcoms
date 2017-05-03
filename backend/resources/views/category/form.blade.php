@extends('layouts/main')

@section('content')

<div class="page-header">
    <h1>
        {{ $header_text }}
        {{-- <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Static &amp; Dynamic Tables
        </small> --}}
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="clearfix">
            <!--MSG-Error -->
            @include('layouts.errors')
        </div>

        <form id="categoryForm" class="form-horizontal" role="form" action="{{ $form_action }}" method="POST">

            {{ csrf_field() }}
            {{ $mode=='edit'? method_field('PUT') : null }}

            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อ</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="name" placeholder="" value="{{ $category->name }}" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">คำอธิบาย</label>
                <div class="col-sm-5">
                    <textarea class="form-control" rows="5" name="detail" placeholder="">{{ $category->detail }}</textarea>
                </div>
            </div>

            <div class="form-group clearfix form-actions">
                <div class="col-sm-5 col-xs-offset-2">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        บันทึก
                    </button>
                    <a class="btn btn-sm btn-default" href="/category">
                        <i class="ace-icon fa fa-reply bigger-110"></i>
                        ยกเลิก
                    </a>
                </div>
            </div>
        </form>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


@section('tag-footer')

<script type="text/javascript">
    $(function () {

        $('#categoryForm').bootstrapValidator({
            framework: 'bootstrap',
            fields: {
                name: {
                    validators: {
                        notEmpty: true
                    }
                }
            }
        });

    });
</script>

@stop

@stop