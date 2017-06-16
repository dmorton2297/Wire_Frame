@extends('master')
@section('title')
	<h1 class="navbar-text">Statistics</h1>
@stop

@section('head')
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript">
		window.onload = function() {
			var chart = new CanvasJS.Chart("chartcontainer", {
                animationEnabled: true,
                backgroundColor: "transparent",
                title:{
                    text: "Company-Wide Utilization Rate"        
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

			chart.render();

			var chart2 = new CanvasJS.Chart("chartcontainer2", {
                animationEnabled: true,
                backgroundColor: "transparent",
                title:{
                    text: "Util Rate by Site Comparison"        
                },
                data:[              
                        {
                    // Change type to "doughnut", "line", "splineArea", etc.
                            type: "pie",
                            dataPoints: [
                                { label: "Hanover Park",  y: Math.floor((Math.random() * 100) + 1)  },
                                { label: "Atlanta", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Chicago", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Memphis", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Gurnee", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Mount Plesent", y: Math.floor((Math.random() * 100) + 1) },
                                
                            ]
                        }
                    ]
                });

			chart2.render();

			var chart3 = new CanvasJS.Chart("chartcontainer3", {
                animationEnabled: true,
                backgroundColor: "transparent",
                title:{
                    text: "Util Rate by Site Comparison"        
                },
                data:[              
                        {
                    // Change type to "doughnut", "line", "splineArea", etc.
                            type: "bar",
                            dataPoints: [
                                { label: "Hanover Park",  y: Math.floor((Math.random() * 100) + 1)  },
                                { label: "Atlanta", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Chicago", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Memphis", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Gurnee", y: Math.floor((Math.random() * 100) + 1) },
                                { label: "Mount Plesent", y: Math.floor((Math.random() * 100) + 1) },
                                
                            ]
                        }
                    ]
                });

			chart3.render();
		}
	</script>
@stop


@section('content')

	<div class="row">
		<div class="col-md-6">
			<div class="graph" id="chartcontainer" style="width: 350px; height: 350px;"></div>
		</div>
		<div class="col-md-6">
			<div class="graph" id="chartcontainer2" style="width: 350px; height: 350px;"></div>
		</div>
	</div>

	<hr style="margin-top: 10px; margin-bottom: 10px;">

	<div class="row">
		<div class="col-md-12">
			<div class="graph" id="chartcontainer3" style="width: 800px; height: 350px;"></div>
		</div>
	</div>
@stop