@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Nikon<img src="/nikon.jpg" alt="">
    </th>
        <th>Canon<img src="/sony.jpg" alt=""></th>
        <th>Sony<img src="/sony.jpg" alt=""></th>
    </tr>
    <tr>
    <td>SALES</td>
    <td>SALES</td>
    <td>SALES</td>
    </tr>
    <tr>
        <th>50 Pieces</th>
        <th>40Pieces</th>
        <th> 30 Pieces</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>

    table, th, td{
    border:50px solid black;
    padding:10px;
    background-color: skyblue;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
    }
</style>