    <div class="pull-right" style="margin-bottom:10px">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              资讯管理 <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
              <li><a href="{{ route('admin.article.index') }}">{{ trans('menus.backend.article.all') }}</a></li>
            {{--创建文章--}}
            @permission('create-article')
                <li><a href="{{ route('admin.article.create') }}">{{ trans('menus.backend.article.create') }}</a></li>
            @endauth
            {{--end创建文章--}}

            <li class="divider"></li>
          </ul>
        </div><!--btn group-->
        <div class="btn-group">
            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                资讯类型管理 <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('admin.article.type.index') }}">{{ trans('menus.backend.article.type.all') }}</a></li>
                {{--创建类型文章--}}
                @permission('create-article-type')
                <li><a href="{{ route('admin.article.type.create') }}">{{ trans('menus.backend.article.type.create') }}</a></li>
                @endauth
                {{--end创建类型文章--}}
                <li class="divider"></li>
            </ul>
        </div><!--btn group-->
    </div><!--pull right-->

    <div class="clearfix"></div>