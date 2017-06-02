@extends('master')
@section('content')
<h1 class="header" style="font: Raleway">Locations</h1>

<hr/>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Location</th>
            <th>Adress</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Hanover Park</td>
            <td>6325 Muirfield Drive Hanover Park, IL 60133 USA</td>
            <td><a href="site"><button class="btn btn-default">View site</button></a></td>
        </tr>
        <tr>
            <td>Chicago</td>
            <td>1333 North Kingsbury Suite 302 Chicago, IL 60042 USA</td>
            <td><button class="btn btn-default">View site</button></td>
        </tr>
        <tr>
            <td>Gurnee</td>
            <td>955 Tri-State Parkway Gurnee, IL 60031 USA</td>
            <td><button class="btn btn-default">View site</button></td>
        </tr>
        <tr>
            <td>Detroit</td>
            <td>1090 Fields Road Detroit, MI 54231 USA</td>
            <td><button class="btn btn-default">View site</button></td>
        </tr>
        <tr>
            <td>London</td>
            <td>800 Tea Road, London</td>
            <td><button class="btn btn-default">View site</button></td>
        </tr>
        <tr>
            <td>San Francisco</td>
            <td>955 Tri-State Parkway Gurnee, IL 60031 USA</td>
            <td><button class="btn btn-default">View site</button></td>
        </tr>
        <tr>
            <td>Atlanta</td>
            <td>955 Tri-State Parkway Gurnee, IL 60031 USA</td>
            <td><button class="btn btn-default">View site</button></td>
        </tr>

        </tbody>
    </table>
</div>
@stop


