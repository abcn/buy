@extends ('backend.layouts.master')
@include('UEditor::head')
@section ('title', trans('labels.backend.article.management') . ' | ' . trans('labels.backend.article.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.article.management') }}
        <small>{{ trans('labels.backend.article.create') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::open(['route' => 'admin.article.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'files' => true]) !!}
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.article.create') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.article.includes.partials.header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="form-group">
                {!! Form::label('title', trans('validation.attributes.backend.article.title'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.article.title')]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('abstract', trans('validation.attributes.backend.article.abstract'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::textarea('abstract', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.article.abstract')]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('content', trans('validation.attributes.backend.article.content'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    <!-- 加载编辑器的容器 -->
                    <script id="container" name="content" type="text/plain">
                    </script>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('image', trans('validation.attributes.backend.article.image'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::file('image', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('author', trans('validation.attributes.backend.article.author'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.article.author')]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('type' , trans('validation.attributes.backend.article.type'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    <select name="type" class="form-control">
                        <option value="">{{ trans('labels.general.none') }}</option>

                        @foreach ($articleTypes as $type)
                            <option value="{!! $type->id !!}">{!! $type->name !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.article.index')}}" class="btn btn-danger btn-xs">{{ trans('buttons.general.cancel') }}</a>
            </div>

            <div class="pull-right">
                <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.create') }}" />
            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
    {!! Form::close() !!}
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');//此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
        });
    </script>
@endsection