<!DOCTYPE html>
<html lang="en-US">
<body>

<h1 align="center">Rata-rata pengeluaran mahasiswa dalam satu bulan</h1>

<div id="piechart" align="center"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Jumlah', 'Hours per Day'],
  ['<100.000', 8],
  ['100.000-200.000', 2],
  ['200.000-500.000', 4],
  ['500.000-1000.000', 2],
  ['>1000.000', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Berdasarkan hasil survei', 'width':700, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
