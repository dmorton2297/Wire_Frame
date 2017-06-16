@extends('master')
@section('title')
	<h1 class="navbar-text">Company Overview</h1>
@stop

@section('head')
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
	window.onload = function() {
		var ws = <?php echo json_encode($locations); ?>;
        var info = [];
        for (var key in ws) {
            if (ws.hasOwnProperty(key)) {
                var obj = ws[key];
                info.push(obj);
            }
        }

        for (var i = <?php echo count($locations);?>; i >= 0; i--) {
        	var id = "chartContiner"+i;
        	var chart = new CanvasJS.Chart(id, {
				animationEnabled: true,
                backgroundColor: "transparent",
                title:{
                    text: info[i - 1].name         
                },
                data:[              
                        {
                            type: "pie",
                            dataPoints: [
                                { label: "down",  y: Math.floor((Math.random() * 100) + 1)  },
                                { label: "up", y: Math.floor((Math.random() * 100) + 1) },
                                
                            ]
                        }
                ]
        	});

        	chart.render();

        	document.getElementById("Name"+i).innerHTML = "<strong>"+info[i-1].name+"</strong>";
        	document.getElementById("Address"+i).innerHTML = info[i-1].address;
        	document.getElementById("UtilRate"+i).innerHTML = ""+info[i-1].utilizationRate;

        	if (info[i-1].utilizationRate < 80) {
        		document.getElementById("UtilRate"+i).style.color = "red";
        	} else {
        		document.getElementById("UtilRate"+i).style.color = "green";
        	}

        	document.getElementById("UtilRate"+i).style.fontWeight = "bold";
        }

        alert("We are good thus far");
	}
</script>
@stop



@section('content')

<div class="row">
    <div class="col-sm-6" style="background-color: transparent; border: none;">
        <h1 id="dashboardLabel"><strong>Location Dashboard</strong></h1>
    </div>
    <div class="col-sm-6">
    	<a href="/comstats"><button class="btn btn-default" id="listViewButton">Company Statistics</button></a>
       <a href="/"><button class="btn btn-default" id="listViewButton">List View</button></a>
    </div>

    <hr>
</div>

<div class="row">
	<?php for($i = count($locations); $i > 0; $i = $i - 1) : ?>
		<?php $divId = 'chartContiner'.$i; ?>
		<div class="col-sm-3" id="cell<?php echo $i;?>">
			<div id="center">
				<div id=<?php echo $divId;?> class="graph"></div>
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
						<td>Location</td>
						<td id="Name<?php echo $i;?>"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td id="Address<?php echo $i;?>"></td>
					</tr>
					<tr>
						<td>Utilization Rate</td>
						<td id="UtilRate<?php echo $i;?>"></td>
					</tr>
				</tbody>
			</table>
			<div id="center">
				<a href="sitegrid"><button class="btn btn-primary" style="margin-bottom: 5px;">View Site</button></a>
			</div>
		</div>
	<?php endfor; ?>
</div>























@stop