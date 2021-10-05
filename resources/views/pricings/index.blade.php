@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Nikon</th>
        <th>Canon</th>
        <th>Sony</th>
    </tr>
    <tr>
    <td>Nikon<img src="/nikon.jpg" alt="">
    </td>
    <td>Canon<img src="/canon.jpg" alt="">
    </td>
    <td>Sony<img src="/sony.jpg" alt="">
    </td>
    </tr>
    <tr>
        <th>₱35,000.00</th>
        <th>₱30,000.00</th>
        <th>₱40,000.00</th>
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



