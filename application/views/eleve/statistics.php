<div id="page-wrapper">
  <div class="col-md-12 graphs">
    <h3 class="text-center">Evolutions statistique</h3>
           <div class="graph_box1">
              <div class="col-md-12 grid_2">
                <div class="grid_1">
<!--                <h3>Bar</h3>-->
                  <canvas id="bar" height="500" width="1000" style="width: 1000px; height: 500px;"></canvas>
                </div>
              </div>
              <div class="col-md-12 grid_2">
                <div class="grid_1">
<!--                <h3>Pie</h3>-->
                  <canvas id="pie" height="500" width="1000" style="width: 1000px; height: 500px;"></canvas>
                </div>
              </div>
              <div class="col-md-6 col_5">

				<div id="chart"></div>
	       		<div id="slider"></div>
				<script>

			var seriesData = [ [], [], [], [], [] ];
			var random = new Rickshaw.Fixtures.RandomData(50);

			for (var i = 0; i < 75; i++) {
				random.addData(seriesData);
			}

			var graph = new Rickshaw.Graph( {
				element: document.getElementById("chart"),
				renderer: 'multi',
				
				dotSize: 5,
				series: [
					{
						name: 'temperature',
						data: seriesData.shift(),
						color: '#AFE9FF',
						renderer: 'stack'
					}, {
						name: 'heat index',
						data: seriesData.shift(),
						color: '#FFCAC0',
						renderer: 'stack'
					}, {
						name: 'dewpoint',
						data: seriesData.shift(),
						color: '#555',
						renderer: 'scatterplot'
					}, {
						name: 'pop',
						data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
						color: '#555',
						renderer: 'bar'
					}, {
						name: 'humidity',
						data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
						renderer: 'line',
						color: '#ef553a'
					}
				]
			} );


			graph.render();

			var detail = new Rickshaw.Graph.HoverDetail({
				graph: graph
			});
				</script>
		</div>
	      <!-- map -->
<link href="<?=base_url("assets/statics/eleve/css/jqvmap.css")?>" rel='stylesheet' type='text/css' />
<script src="<?=base_url("assets/statics/eleve/js/jquery.vmap.js")?>"></script>
<script src="<?=base_url("assets/statics/eleve/js/jquery.vmap.sampledata.js")?>" type="text/javascript"></script>
<script src="<?=base_url("assets/statics/eleve/js/jquery.vmap.world.js")?>" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->
              <div class="clearfix"> </div>
            </div>
            
            <script>
    var barChartData = {
      labels : [<?=$cours?>],
      datasets : [
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [<?=$periode1?>]
        },
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [<?=$periode2?>]
        },
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [<?=$examen1?>]
        },
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [<?=$periode3?>]
        },
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [<?=$periode4?>]
        },
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [<?=$examen2?>]
        }
      ]
      
    };
    var pieData = [
        {
            value: 30,
            color:"#ef553a"
        },
        {
            value : 50,
            color : "#00aced"
        },
        {
            value : 100,
            color : "#69D2E7"
        }

    ];
  var chartData = [
      {
        value : Math.random(),
        color: "#D97041"
      },
      {
        value : Math.random(),
        color: "#C7604C"
      },
      {
        value : Math.random(),
        color: "#21323D"
      },
      {
        value : Math.random(),
        color: "#9D9B7F"
      },
      {
        value : Math.random(),
        color: "#7D4F6D"
      },
      {
        value : Math.random(),
        color: "#9358ac"
      }
    ];

  new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
  new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
  
  </script>
  </div>
</div>
<link href="<?=base_url("assets/statics/eleve/css/custom.css")?>" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url("assets/statics/eleve/js/metisMenu.min.js")?>"></script>
<script src="<?=base_url("assets/statics/eleve/js/custom.js")?>"></script>
<script src="<?=base_url("assets/statics/eleve/js/bootstrap.min.js")?>"></script>
    