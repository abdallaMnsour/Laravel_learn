<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'default title')</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <style>
        header {
            background: #fa0;
            padding: 30px;
            text-align: center;
            font-size: 50px;
            font-family: cursive;
            color: white;
        }

        footer {
            background: #f0a;
            padding: 30px;
            text-align: center;
            font-size: 50px;
            font-family: cursive;
            color: white;
            margin-top: 30px;
        }


        ul.header {
            display: flex;
            background: #edcfb4;
            padding-right: 30px;
            flex-direction: row-reverse;
            margin: 0;
        }

        ul.header a {
            color: #554c40;
            font-size: 25px;
            font-family: cursive;
            padding: 25px 20px;
            text-decoration: none;
        }

        ul.header a:hover {
            background: #b86b48;
            color: white;
        }

        ul.header a.active {
            background: #af5d2d;
            color: white;
        }
    </style>
</head>

<body>
    <header>this is my header</header>

    @section('nav')
        <ul class="header">
            <a href="" class="@yield('delete')">delete</a>
            <a href="" class="@yield('update')">update</a>
            <a href="" class="@yield('read')">read</a>
            <a href="" class="@yield('create')">create</a>
            <a href="" class="@yield('home')">home</a>
        </ul>
    @show
