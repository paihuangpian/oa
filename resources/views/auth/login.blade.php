<!DOCTYPE html>
<html >
<head>
    <title>格木网络推广部</title>
    <link href="http://cdn.bootcss.com/normalize/3.0.3/normalize.min.css" rel="stylesheet">
    <link href="/css/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
</head>
<body>
    
    <div class="form">
        <div class="form-b"></div>
        <h1>格木网络推广部</h1>
        <div class="news">莎士比亚：世上并没有用来鼓励工作努力的赏赐，所有的赏赐都只是被用来奖励工作成果的。</div>
        <form method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
            <div style="text-align: left;">
                @if (count($errors) > 0 )
                    <div class="errors">
                        @foreach ($errors->all() as $error)
                            <p><i class="fa fa-exclamation-circle"></i> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="i1{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="用户名">
            </div>
            <div class="i2{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="密码">
            </div>
            <div class="item">
                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}" style="float: right;">忘记密码？</a> -->
                <span  style="float: left"><input type="checkbox" name="remember"> 记住</span>
            </div>
            <div class="item">
                <button type="submit">登录</button>
            </div>
        </form>
    </div>
</body>
</html>


