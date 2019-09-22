<html>
    <head>
        <style>
            ul {
                display:none;
            }
            div:hover ul{
                display: block;
            }
            
        </style>
    </head>
</html>
@extends('master')
@section('content')
    <ol>
        <div class="sh">
            <li><a href="#"><span>ONE</span></a></li>
            <ul>
                <li><input type="text" placeholder="one"></li>
                <li><input type="text" placeholder="one"></li>
                <li><input type="text" placeholder="one"></li>
            </ul>
        </div>
        <div class="sh">
            <li><a href="#"><span>ONE</span></a></li>
            <ul>
                <li><input type="text" placeholder="one"></li>
                <li><input type="text" placeholder="one"></li>
                <li><input type="text" placeholder="one"></li>
            </ul>
        </div>
        <div class="sh">
            <li><a href="#"><span>ONE</span></a></li>
            <ul>
                <li><input type="text" placeholder="one"></li>
                <li><input type="text" placeholder="one"></li>
                <li><input type="text" placeholder="one"></li>
            </ul>
        </div>
    </ol>
@endsection