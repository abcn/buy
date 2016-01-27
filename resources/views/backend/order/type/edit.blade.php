@extends ('backend.layouts.master')

@section('title', trans('Type') . ' | ' . trans('Type'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.article.management') }}
        <small>{{ trans('labels.backend.article.type.edit') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::model($type, ['route' => ['admin.article.type.update', $type->id], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) !!}
    <div class="box box-success">
        <div class="box box-header">
            <h3 class="box-title">{{ trans('labels.backend.article.type.edit') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.article.includes.partials.header-buttons')
            </div>
        </div>
    </div>
    <div class="box box-body">
        <div class="form-group">
            {!! Form::label('title', trans('validation.attributes.backend.article.type.name'), ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.article.title')]) !!}
            </div>
        </div>
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                <a href="{{route('admin.article.type.index')}}" class="btn btn-danger btn-xs">{{ trans('buttons.general.cancel') }}</a>
            </div>

            <div class="pull-right">
                <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.update') }}" />
            </div>
            <div class="clearfix"></div>
        </div><!-- /.box-body -->
    </div><!--box-->
    {!! Form::close() !!}
@endsection