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
    