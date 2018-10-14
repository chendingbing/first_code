<?php
/**
 * Created by PhpStorm.
 * User: chendingbing
 * Date: 2018/9/29
 * Time: 14:03
 */
?>
<html>
<head>
    <title>@yield('title', '主页') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
    @yield('content')
        @include('layouts._footer')
</div>
</div>
    <script src="/js/app.js"></script>
</body>
</html>