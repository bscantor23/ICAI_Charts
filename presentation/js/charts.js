let pieChart;
let barChart;

const options = {
  'width': 1100,
  'height': 400,
};

google.charts.load('current', {
  'packages': ['corechart', 'bar']
});

google.charts.setOnLoadCallback(drawCharts);

async function drawCharts() {

  var data = new google.visualization.DataTable();

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));
  chart.draw(data, options);
  pieChart = chart;

  data = google.visualization.arrayToDataTable([]);
  chart = new google.charts.Bar(document.getElementById('chart_div_bar'));
  chart.draw(data, google.charts.Bar.convertOptions(options));
  barChart = chart;

}