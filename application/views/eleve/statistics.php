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
              <div class="col-md-6 grid_2">
                <div class="grid_1">
<!--                <h3>Pie</h3>-->
                  <canvas id="pie" height="400" width="400" style="width: 400px; height: 400px;"></canvas>
                </div>
              </div>
              <div class="col-md-6 grid_2">
                <form action="">
                  <select name="" id="" class="form-control">
                      <option value="1">1 Periode</option>
                      <option value="2">2 Periode</option>
                      <option value="3">Exam 1</option>
                      <option value="4">3 Periode</option>
                  </select>
                </form>
                <div class="grid_1">
                  <div id="chart"></div>
                </div>
              </div>
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
      <?php for ($i=0; $i < count($resultats); $i++) { 
        if ($i != count($resultats) - 1) {
      ?>
        {
            value: <?=$resultats[$i]?>,
            color:"#ef553a"
        },
      <?php 
        } else { 
      ?>
        {
            value: <?=$resultats[$i]?>,
            color:"#ef553a"
        }
      <?php } } ?>
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
    