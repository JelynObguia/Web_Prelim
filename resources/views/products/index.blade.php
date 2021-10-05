@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>Nikon
        <img src="/nikon.jpg" alt="">
        </td>
        <td>D5600</td>
        <td>AF-P DX 18-55mm f/3.5-5.6G VR Lens</td>
    </tr>
    <tr>
        <td>Canon
        <img src="/canon.jpg" alt="">
        </td>
        <td>EOS M50</td>
        <td>3.0" 1.04m-Dot Vari-Angle Touchscreen</td>
    </tr>
    <tr>
         <td>Sony
        <img src="/sony.jpg" alt="">
        </td>
        <td>NEX-7</td>
        <td>Memory Stick Pro Duo, Pro-HG Duo, SD, SDHC, SDXC</td>
    </tr>
    </table>
</div>
   
@endsection
<style>

table, th, td{
    border:70px solid black;
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
