<html>
    <head>
        <style>
            .h {
                display:none;
            }
            .sh:hover .h{
                display: block;
            }    
            li {
                width: 65%;
            }
        </style>
    </head>
</html>
@extends('master')
@section('content')
    <ol>
        <div class="sh">
            <li><a href="#"><span>ONE</span></a></li>
            <div class="h">
                <form action="#">
                <ul>
                    <li><input type="number" placeholder="Punctuality(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Targets acchived(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Behaviour(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Contribution(0-10)" min="0" max="10" required></li>
                </ul>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
        <div class="sh">
            <li><a href="#"><span>ONE</span></a></li>
            <div class="h">
                <form action="#">
                <ul>
                    <li><input type="number" placeholder="Punctuality(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Targets acchived(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Behaviour(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Contribution(0-10)" min="0" max="10" required></li>
                </ul>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
        <div class="sh">
            <li><a href="#"><span>ONE</span></a></li>
            <div class="h">
                <form action="#">
                <ul>
                    <li><input type="number" placeholder="Punctuality(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Targets acchived(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Behaviour(0-10)" min="0" max="10" required></li>
                    <li><input type="number" placeholder="Contribution(0-10)" min="0" max="10" required></li>
                </ul>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
    </ol>
@endsection