@extends('layouts/main')

@section('content')

<div class="page-header">
    <h1>
        ประเภทสินค้า
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
            {{-- @include('layouts.errors') --}}
        </div>

        <div class="clearfix">
            <div class="pull-left tableTools-container">
                <a class="btn btn-sm btn-primary" href="/category/create">
                    <i class="ace-icon fa fa-plus align-top bigger-125"></i>
                    เพิ่ม
                </a>
            </div>
        </div>

        <!-- div.dataTables_borderWrap -->
        <div class="table-responsive">
            <table id="tb-category" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        {{-- <th class="center">รหัส</th> --}}
                        <th>ประเภทสินค้า</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorys as $category)
                    <tr>
                        <td class="center">
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="green" href="/category/{{ $category->id }}/edit">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>
                                <a class="red" href="#">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </a>
                            </div>

                            <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                        <li>
                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        {{-- <td class="center">{{ $category->id }}</td> --}}
                        <td>{{ $category->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


@section('tag-footer')

<script type="text/javascript">
    $(function () {

        //checkBoxAllMutiTablePerPage("#checkAll", ".check");

        var tb_category = $('#tb-category')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .dataTable({
                    //"bAutoWidth": true,
                    "aoColumns": [
                    {"bSortable": false, "width": "10%", "targets": 0},
                    {"width": "90%"}
                    ],
                    "aaSorting": [],
                    //"sScrollY": "200px",
                    //"bPaginate": false,
                    //"sScrollX": "100%",
                    "sScrollXInner": "100%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element
                    "iDisplayLength": 25
                });

        //delete
//         $("#btn-mutidel").click(function () {
//             var id = "";
//             var inputCheck = $("tbody .check:checked");
//             if (inputCheck.length > 0) {
//                 inputCheck.each(function () {
//                     id += ',' + $(this).val();
//                 });
// //                console.log(id.substring(1));
// fnDel(id.substring(1));
// } else {
//     alert("<spring:message code="msg.error.notselect" />");
// }
// });

//         $(".btn-del").click(function () {
//             var stId = $(this).data("id");
//             fnDel(stId);
//         });

//         function fnDel(stId) {
//             var r = confirm("<spring:message code="msg.confirm.del" />");
//             if (r === true) {
// //                console.log(stId);
// var jqxhr = $.post("delete.htm", {id: stId}, function (data, status) {
//     if (data !== "" || status !== "success") {
//         showMsgError("#msgErrorArea", data);
//     } else {
//         window.location.replace("index.htm");
//     }
// }).fail(function () {
//     showMsgError("#msgErrorArea", "");
// });
// }
// }
        //end delete
//
//        //detail
//        $("#btn-mutidetail").click(function () {
//            var id = "";
//            var inputCheck = $("tbody .check:checked");
//            if (inputCheck.length > 0) {
//                inputCheck.each(function () {
//                    id += ',' + $(this).val();
//                });
//                window.location.replace("detail.htm?placeId=" + id.substring(1));
//            } else {
//                alert("");
//            }
//        });
//        //end detail

});
</script>

@stop

@stop