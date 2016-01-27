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
                @include('backend.article.includes.partials.header-buttons')
            </div>
        </div>

        <div class="box-body">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thread>
                        <tr>
                            <th>文章id</th>
                            <th>文章标题</th>
                            <th>文章图片</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                    </thread>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td><img src="{{env('IMG_URL').$article->image}}" width="50" height="50"></td>
                            <td>{{$article->created_at->diffForHumans()}}</td>
                            <td>{!! $article->action_buttons !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection