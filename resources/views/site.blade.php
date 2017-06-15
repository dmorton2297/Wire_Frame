@extends('master')
@section('title')
    <h1 class="navbar-text">Hanover Park</h1>
@stop

@section('head')
    <script type="text/javascript">
        window.onload = function () {
            var ws = <?php echo json_encode($assets); ?>;
            var info = [];
            for (var key in ws) {
                if (ws.hasOwnProperty(key)) {
                    var obj = ws[key];
                    info.push(obj);
                }
            }
         

            for(var i = <?php echo count($assets);?>; i>=0; i--) {
                document.getElementById("Name"+i).innerHTML = "<strong>"+info[i-1].name+"</strong>";
                document.getElementById("Status"+i).innerHTML = "<strong>"+info[i-1].status+"</strong>";
                document.getElementById("Counts"+i).innerHTML = info[i-1].counts;

                if (info[i-1].status == "IN USE") {
                    document.getElementById("Status"+i).style.color = "green";
                } else {
                    document.getElementById("Status"+i).style.color = "red";
                }

                document.getElementById(i).addEventListener("click", function(e) {
                    var sender = e.target || e.srcElement;
                    var id = sender.id;
                    var index = parseInt(id);

                    document.getElementById("modalName").innerHTML = "<strong>"+info[index - 1].name+"</strong>";
                    document.getElementById("modalCounts").innerHTML = info[index - 1].counts;
                    document.getElementById("modalStatus").innerHTML = "<strong>"+info[index - 1].status+"</strong>";
                    if (info[index-1].status == "IN USE") {
                        document.getElementById("modalStatus").style.color = "green";
                    } else {
                        document.getElementById("modalStatus").style.color = "red";
                    }

                });
            }   
        }
    </script>
@stop

@section('content')
    <div class="row">
    <div class="col-sm-6" style="background-color: transparent; border: none;">
        <h1 id="dashboardLabel"><strong>Machine Dashboard</strong></h1>
    </div>
    <div class="col-sm-6">
       <a href="sitegrid"><button class="btn btn-default" id="grid_button">Grid View</button></a>
    </div>
    <hr>

    <div class="container">
        <table class="table" id="machine_table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Counts</th>
                    <th>Last Start</th>
                    <th>Utilization Rate</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php for($i = count($assets); $i > 0; $i = $i - 1) : ?>
                    <tr>
                        <td id="Name<?php echo $i;?>"></td>
                        <td id="Status<?php echo $i;?>"></td>
                        <td id="Counts<?php echo $i;?>"></td>
                        <td>7:00 AM</td>
                        <td>82%</td>
                        <td><button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal" id="<?php echo $i;?>"
                    style="margin-bottom: 5px;">View Detail</button></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Machine Detail</h4>
      </div>
      <div class="modal-body">
        <table class="table">
                <thead>
                <tr>
                    <th>Property</th>
                    <th>Info</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Machine Name</td>
                    <td id="modalName"></td>
                </tr>
                <tr>
                    <td>Utilization Rate</td>
                    <td>83%</td>
                </tr>
                <tr>
                    <td>Downtime</td>
                    <td>2 Hours 8 Min</td>
                </tr>
                <tr>
                    <td>Counts</td>
                    <td id="modalCounts">153</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td id="modalStatus">Idle</td>
                </tr>
                <tr>
                    <td>Last Start</td>
                    <td>6/2/2017 12:30 PM</td>
                </tr>
                </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop
