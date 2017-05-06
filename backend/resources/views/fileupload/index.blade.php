@extends('layouts/main')

@section('content')

<div class="page-header">
    <h1>
        อัพโหลดไฟล์
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

        <div class="clearfix">
            <div class="pull-left tableTools-container">
                <form class="form-horizontal" role="form" action="/fileupload" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" class="form-control" name="images[]" multiple/>
                    <input type="submit" value="Upload" />
                </form>
            </div>
        </div>

        <ul class="ace-thumbnails clearfix">
            <li>
                <a href="assets/images/gallery/image-2.jpg" data-rel="colorbox">
                    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
                    <div class="text">
                        <div class="inner">Sample Caption on Hover</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="assets/images/gallery/image-2.jpg" data-rel="colorbox">
                    <img width="150" height="150" alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
                    <div class="text">
                        <div class="inner">Sample Caption on Hover</div>
                    </div>
                </a>
            </li>
        </ul>


        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


@section('tag-footer')

<script type="text/javascript">
    $(function () {

        var $overflow = '';
        var colorbox_params = {
            rel: 'colorbox',
            reposition:true,
            scalePhotos:true,
            scrolling:false,
            previous:'<i class="ace-icon fa fa-arrow-left"></i>',
            next:'<i class="ace-icon fa fa-arrow-right"></i>',
            close:'&times;',
            current:'{current} of {total}',
            maxWidth:'100%',
            maxHeight:'100%',
            onOpen:function(){
                $overflow = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
            },
            onClosed:function(){
                document.body.style.overflow = $overflow;
            },
            onComplete:function(){
                $.colorbox.resize();
            }
        };

        $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);

        $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon

        $(document).one('ajaxloadstart.page', function(e) {
            $('#colorbox, #cboxOverlay').remove();
        });

    });
</script>

@stop

@stop