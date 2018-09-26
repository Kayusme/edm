<div id="page-wrapper">
  <div class="col-md-12 graphs">
    <h3 class="text-center">Evolutions statistique</h3class>
           <div class="graph_box1">

              <div class="col-md-6 grid_2"><div class="grid_1">
<!--                <h3>Bar</h3>-->
                <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
              </div></div>
              <div class="col-md-6 grid_2"><div class="grid_1">
<!--                <h3>Pie</h3>-->
                <canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
              </div></div>
              <div class="clearfix"> </div>
            </div>
            <script>
    var barChartData = {
      labels : ["Francais","Chimie","Histoire","Math","Geo","Physique","Anglais"],
      datasets : [
        {
          fillColor : "#ef553a",
          strokeColor : "#ef553a",
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : "#00aced",
          strokeColor : "#00aced",
          data : [28,48,40,19,96,27,100]
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
    