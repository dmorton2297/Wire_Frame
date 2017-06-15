@extends('master')

@section('head')
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

    function modalClicked(index) {
        alert("Hello!"+index);
    }
    <?php $counter = 0; ?>
    window.onload = function () {
        var ws = <?php echo json_encode($assets); ?>;
        var info = [];
        for (var key in ws) {
            if (ws.hasOwnProperty(key)) {
                var obj = ws[key];
                info.push(obj);
            }
        }

        for (var i = <?php echo count($assets);?>; i >= 0; i--) {
            var id = "chartContainer"+i;
            var chart = new CanvasJS.Chart(id, {
                animationEnabled: false,
                title:{
                    text: info[i - 1].name         
                },
                data:[              
                        {
                    // Change type to "doughnut", "line", "splineArea", etc.
                            type: "pie",
                            dataPoints: [
                                { label: "down",  y: Math.floor((Math.random() * 100) + 1)  },
                                { label: "up", y: Math.floor((Math.random() * 100) + 1) },
                                
                            ]
                        }
                    ]
                });

            document.getElementById("Counts"+i).innerHTML = info[i-1].counts;
            document.getElementById("Status"+i).innerHTML = info[i-1].status;

            if (info[i-1].status != "IDLE") {
                //document.getElementById("cell"+i).style.border = "3px solid #31d315";
            } else {
                document.getElementById("cell"+i).style.backgroundColor= "#f4bf42";
            }
            chart.render();
            setTimeout("location.reload(true);", 30000);

                document.getElementById(i).addEventListener("click", function(e) {
                    var sender = e.target || e.srcElement;
                    var id = sender.id;
                    var index = parseInt(id);

                    document.getElementById("modalName").innerHTML = info[index - 1].name;
                    document.getElementById("modalCounts").innerHTML = info[index - 1].counts;
                    document.getElementById("modalStatus").innerHTML = info[index - 1].status;
                });
        }
    }
</script>





@stop

@section('content')
   <!-- <div id="chartContainer4" style="width: 300px; height: 300px;""></div>
    <div id="chartContainer3" style="width: 300px; height: 300px;"></div>-->
    <div class="row">
        <?php for($i = count($assets); $i > 0; $i = $i - 1) : ?>
           <?php $divId = 'chartContainer'.$i; ?>
           <div class="col-sm-3" id="cell<?php echo $i;?>">
                <div id="center">
                    <div id= <?php echo $divId;?> class="graph"> </div>
                </div>
                <table class="table" id="grid_table">
                    <thead>
                    <tr>
                        <th>Property</th>
                        <th>Info</th>
                    </tr>
                    </thead>
                    <tbody>
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
                        <td id="Counts<?php echo $i;?>"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td id="Status<?php echo $i;?>"></td>
                    </tr>
                    </tbody>
                </table>
                <div id="center">
                    <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal" id="<?php echo $i;?>">View Detail</button>   
                </div>
           </div>
        <?php endfor; ?>
    </div>
<!-- Trigger the modal with a button -->
   
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@stop
<!-- Modal -->
