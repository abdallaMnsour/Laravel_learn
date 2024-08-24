@include('main-project.includes.header')

@section('header_sec')
<h1>this is first section in my page</h1>

<ul>
    <li><a class="active" href="{{ url('project') }}">home</a></li>
    <li><a href="{{ url('project/about') }}">about</a></li>
    <li><a href="{{ url('project/contact') }}">contact</a></li>
</ul>


@show

@yield('content')

@extends('main-project.includes.footer')
