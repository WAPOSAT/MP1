<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        var data;
        var options;
        var chart;
        function drawChart(){
            data = google.visualization.arrayToDataTable([
                ['Topping', 'Stuecke', 'Preis'],
                ['Pilze', 0, 9],
                ['Zwiebern', 0, 1.5],
                ['Oliven', 0, 2]
            ]);
            
            options = {'title': '',
                           'width': 500,
                           'height': 450,
                           'animation': {duration: 1000, easing: 'out'}
                          };
            
            chart = new google.visualization.ColumnChart(document.getElementById('line_top_x'));
            chart.draw(data, options);
        
            setTimeout(function(){
                data.setValue(0,1,3);
                data.setValue(1,1,4);
                data.setValue(2,1,5);
            
                chart.draw(data, options);
            },1000);
            
            setTimeout(function(){
                data.setValue(0,2,3);
                data.setValue(1,2,4);
                data.setValue(2,2,5);
            
                chart.draw(data, options);
            },1000);
            
        }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
    <div><button id="b1">click aqui</button> </div>
</body>
</html>
