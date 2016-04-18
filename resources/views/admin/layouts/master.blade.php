<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>格木网络</title>
        <link href="http://cdn.bootcss.com/normalize/3.0.3/normalize.min.css" rel="stylesheet">
        <link href="/css/admin.css" rel="stylesheet">
        <link href="/css/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="/js/vue.js" charset="utf-8"></script>
        <script src="/js/vue-router.min.js"></script>
    </head>
    <body>
        <!-- 主导航 -->
        <div class="nav">
            <a href="javascript:;" class="brand"><b>格木网络</b></a>
            <ul>
                <!-- <li><a href="{{ route('admin') }}" @if(Route::currentRouteName() == 'admin') class="active" @endif>首页</a></li> -->
                <li><a href="{{ route('dashboard') }}" @if(Route::currentRouteName() == 'dashboard') class="active" @endif>仪表盘</a></li>
                <li><a href="{{ route('system') }}" @if(Route::currentRouteName() == 'system') class="active" @endif>系统</a></li>
                <li><a href="">员工</a></li>
                <li><a href="{{ route('game') }}" @if(in_array(Route::currentRouteName(), ['game'])) class="active" @endif>游戏</a></li>
                <li><a href="">会员</a></li>
                <li><a href="">公会</a></li>
                <li><a href="">文章</a></li>
            </ul>
        </div>

        <!-- 侧边导航 -->
        <div class="sidebar">
            @yield('sidebar')
        </div>

        <!-- 消息 -->
        @if (count($errors) > 0 )
            <div class="errors">
                <i class="fa fa-exclamation-circle"></i>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <!-- 内容 -->
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>