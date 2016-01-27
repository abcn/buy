@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">文章列表</h3>

            <div class="box-tools pull-right">
                @include('backend.order.includes.partials.header-buttons')
            </div>
        </div>

        <div class="box-body">
            <form method="POST" id="search-form" class="form-inline" role="form">

                <div class="form-group">
                    <label for="title">资讯标题</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="资讯标题">
                </div>
                <div class="form-group">
                    <label for="type">类型</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="资讯类型">
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="article">
                    <thead>
                        <tr>
                            <th>文章标题</th>
                            <th>文章作者</th>
                            <th>文章图片</th>
                            <th>文章类型</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @section('after-scripts-end')
        @include('backend.includes.partials.jquerydatatable')
        <script>
            $(function () {
                var oTable = $('#article').DataTable({
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    searching: false,
                    processing: true,
                    serverSide: true,
                    dom: 'rt<"bottom"flp>',
                    language: {
                        "lengthMenu": "每页显示 _MENU_ 条数据",
                        "zeroRecords": "Nothing found - sorry",
                        "info": "Showing page _PAGE_ of _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
                    ajax: {
                        url: 'http://hhg.xyz/admin/article/data',
                        data: function (d) {
                            d.title = $('input[name=title]').val();
                            d.type  = $('input[name=type]').val();
                        }
                    },
                    columns: [
                        { data: 'title', name: 'title'},
                        { data: 'author', name: 'author'},
                        {
                            data: 'image',render: function(data, type, row) {
                            image = '<img src={{env('IMG_URL')}}'+data+'/>';
                            return image;
                        }
                        },
                        { data: 'name', name: 'type'},

                        { data: 'created_at', name: 'created_at' },
                        { data: 'updated_at', name: 'updated_at'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
                $('#search-form').on('submit', function(e) {
                    oTable.draw();
                    e.preventDefault();
                });
            });
        </script>
    @endsection
@endsection