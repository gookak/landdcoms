@extends('layouts/main')

@section('content')

<div class="page-header">
    <h1>
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
            <div id="msgErrorArea">
                @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <form action="/upload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            Product name:
            <br />
            <input type="text" name="name" />
            <br /><br />
            Product photos (can attach more than one):
            <br />
            <input type="file" name="photos[]" multiple />
            <br /><br />
            <input type="submit" value="Upload" />
        </form>



        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


@section('tag-footer')

<script type="text/javascript">
    $(function () {

        // $('#productForm').bootstrapValidator({
        //     framework: 'bootstrap',
        //     fields: {
        //         name: {
        //             validators: {
        //                 notEmpty: true
        //             }
        //         }
        //     }
        // }).on("success.form.bv", function (e) {
        //     // Prevent form submission
        //     e.preventDefault();
        //     // Get the form instance
        //     var $form = $(e.target);
        //     // console.log($form);
        //     // console.log($form.attr('action'));
        //     // console.log($form.serialize());

        //     $.ajax({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         url: $form.attr('action'), 
        //         type: 'POST',
        //         data: $form.serialize(),
        //     })
        //     .done(function(result) {
        //         console.log(result);
        //         if (result.status === 200) {
        //             window.location = "/product";
        //         }else {
        //             showMsgError("#msgErrorArea", result.msgerror);
        //         }
        //     }).fail(function () {
        //         showMsgError("#msgErrorArea", "ส่งข้อมูล AJAX ผิดพลาด");
        //     });
        // });

    });
</script>

@stop

@stop