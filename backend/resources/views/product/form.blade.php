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
            <div id="msgErrorArea"></div>
        </div>

        <form id="productForm" class="form-horizontal" role="form" action="{{ $form_action }}" method="POST">

            {{ $mode=='edit'? method_field('PUT') : null }}

            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อ</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="name" placeholder="" value="{{ $product->name }}" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">ราคาขาย</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="price" placeholder="" value="{{ $product->price }}" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">จำนวน</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="balance" placeholder="" value="{{ $product->balance }}" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">คำอธิบาย</label>
                <div class="col-sm-5">
                    <textarea class="form-control" rows="5" name="detail" placeholder="">{{ $product->detail }}</textarea>
                </div>
            </div>

            <h4 class="header blue bolder smaller">รูปสินค้า</h4>

            <div class="form-group">
                <label class="col-sm-2 control-label">อัพโหลดรูปภาพ</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" />
                </div>
            </div>

            <ul class="ace-thumbnails clearfix sortable">

                <li>
                    <a href="assets/images/gallery/image-4.jpg" data-rel="colorbox" class="cboxElement">
                        <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-4.jpg">
                        <div class="tags">
                            <span class="label-holder">
                                <span class="label label-info arrowed">fountain 01</span>
                            </span>
                        </div>
                    </a>

                    <div class="tools tools-top">
                        <a href="#">
                            <i class="ace-icon fa fa-link"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-paperclip"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-times red"></i>
                        </a>
                    </div>
                </li>

                <li>
                    <a href="assets/images/gallery/image-4.jpg" data-rel="colorbox" class="cboxElement">
                        <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-4.jpg">
                        <div class="tags">
                            <span class="label-holder">
                                <span class="label label-info arrowed">fountain 02</span>
                            </span>

                            <span class="label-holder">
                                <span class="label label-danger">recreation</span>
                            </span>
                        </div>
                    </a>

                    <div class="tools tools-top">
                        <a href="#">
                            <i class="ace-icon fa fa-link"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-paperclip"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-times red"></i>
                        </a>
                    </div>
                </li>

                <li>
                    <a href="assets/images/gallery/image-4.jpg" data-rel="colorbox" class="cboxElement">
                        <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-4.jpg">
                        <div class="tags">
                            <span class="label-holder">
                                <span class="label label-info arrowed">fountain 03</span>
                            </span>

                            <span class="label-holder">
                                <span class="label label-danger">recreation</span>
                            </span>
                        </div>
                    </a>

                    <div class="tools tools-top">
                        <a href="#">
                            <i class="ace-icon fa fa-link"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-paperclip"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-pencil"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-times red"></i>
                        </a>
                    </div>
                </li>

            </ul>


            <div class="form-group clearfix form-actions">
                <div class="col-sm-5 col-xs-offset-2">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        บันทึก
                    </button>
                    <a class="btn btn-sm btn-default" href="/product">
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

        var group = $("ul.sortable").sortable();

        $('#productForm').bootstrapValidator({
            framework: 'bootstrap',
            fields: {
                name: {
                    validators: {
                        notEmpty: true
                    }
                }
            }
        }).on("success.form.bv", function (e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // console.log($form);
            // console.log($form.attr('action'));
            // console.log($form.serialize());

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $form.attr('action'), 
                type: 'POST',
                data: $form.serialize(),
            })
            .done(function(result) {
                console.log(result);
                if (result.status === 200) {
                    window.location = "/product";
                }else {
                    showMsgError("#msgErrorArea", result.msgerror);
                }
            }).fail(function () {
                showMsgError("#msgErrorArea", "ส่งข้อมูล AJAX ผิดพลาด");
            });
        });

    });
</script>

@stop

@stop