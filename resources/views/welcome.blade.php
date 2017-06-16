@extends('master')
@section('title')
    <h1 class="navbar-text">Company Overview</h1>
@stop

@section('content')
<div class="row">
    <div class="col-sm-6" style="background-color: transparent; border: none;">
        <h1 id="dashboardLabel"><strong>Location Dashboard</strong></h1>
    </div>
    <div class="col-sm-6">
    <a href="/comstats"><button class="btn btn-default" id="listViewButton">Company Statistics</button></a>
       <a href="locationgrid"><button class="btn btn-default" id="listViewButton">Grid View</button></a>
    </div>
</div>
<hr/>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Location</th>
            <th>Adress</th>
            <th>Site Utilization Rate</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Hanover Park</td>
            <td>6325 Muirfield Drive Hanover Park, IL 60133 USA</td>
            <td>85%</td>
            <td><a href="sitegrid"><button class="btn btn-primary">View site</button></a></td>
        </tr>
        <tr>
            <td>Chicago</td>
            <td>1333 North Kingsbury Suite 302 Chicago, IL 60042 USA</td>
            <td>91%</td>
            <td><button class="btn btn-primary">View site</button></td>
        </tr>
        <tr>
            <td>Gurnee</td>
            <td>955 Tri-State Parkway Gurnee, IL 60031 USA</td>
            <td>77%</td>
            <td><button class="btn btn-primary">View site</button></td>
        </tr>
        <tr>
            <td>Detroit</td>
            <td>1090 Fields Road Detroit, MI 54231 USA</td>
            <td>60%</td>
            <td><button class="btn btn-primary">View site</button></td>
        </tr>
        <tr>
            <td>London</td>
            <td>800 Tea Road, London</td>
            <td>50%</td>
            <td><button class="btn btn-primary">View site</button></td>
        </tr>
        <tr>
            <td>San Francisco</td>
            <td>955 Tri-State Parkway Gurnee, IL 60031 USA</td>
            <td>72%</td>
            <td><button class="btn btn-primary">View site</button></td>
        </tr>
        <tr>
            <td>Atlanta</td>
            <td>955 Tri-State Parkway Gurnee, IL 60031 USA</td>
            <td>43%</td>
            <td><button class="btn btn-primary">View site</button></td>
        </tr>

        </tbody>
    </table>
</div>
@stop


