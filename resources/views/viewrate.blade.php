
@extends('layouts.app2')
@section('content')
  <head>
  <style>

  .selection input{ padding:2px;

  }
  </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      var review = <?php echo $review; ?>;

      console.log(review);

      google.charts.load('current', {'packages':['corechart', 'controls']});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var dashboard = new google.visualization.Dashboard(
          document.getElementById('programmatic_dashboard_div'));

        // We omit "var" so that programmaticSlider is visible to changeRange.
        var programmaticSlider = new google.visualization.ControlWrapper({
          'controlType': 'CategoryFilter',
          'containerId': 'programmatic_control_div',
          'options': {
            'filterColumnLabel': 'Name',
            'ui': {'labelStacking': 'vertical','cssSelector': 'selection'       }
          }
        });


        var programmaticChart  = new google.visualization.ChartWrapper({
          'chartType': 'ColumnChart',
          'containerId': 'programmatic_chart_div',
          'options': {
            'title': 'Employee Ratings',
            'width': 900,
            'height': 500,
            'legend': 'none',
            'chartArea': {'left': 50, 'top': 30, 'right': 30, 'bottom': 30},
            'pieSliceText': 'value'
          },
          'responsive':true
        });




        var data = google.visualization.arrayToDataTable(review);

        var options = {
          title: 'Empolyee Performance',
          curveType: 'function',          
          animation: {startup:true, duration:3000, easing: 'inAndOut'},
          legend: { position: 'bottom' }
        };


        
        dashboard.bind(programmaticSlider, programmaticChart);
        dashboard.draw(data);

        var chart = new google.visualization.ColumnChart(document.getElementById('linechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h1> Your Current Team Statistics</h1>
      <div id="programmatic_dashboard_div">
      
        <div id= "programmatic_control_div"></div>
        <div id="programmatic_chart_div" style="width: 900px; height: 1200px"></div>




      </div>
      </div>
  </body>
@endsection



