
let papers = document.getElementById("papers");
let chart_content = document.getElementById("chart_content");
let selectElement = document.getElementById("editions");
let pred = document.getElementById("pred")

selectElement.addEventListener('change', async () => {
  pred.remove();
  let year = selectElement.value;
  const results = await $.ajax({
    url: "getGraphsInfo.php",
    dataType: "json",
    type: "POST",
    data: {
      year
    }
  });
  var pieData = new google.visualization.DataTable();
  pieData.addColumn('string', 'state');
  pieData.addColumn('number', 'papers');
  pieData.addRows([
    ['Accepted', parseInt(results[1]["accepted"])],
    ['Rejected', parseInt(results[1]["rejected"])],
  ]);

  var barData = google.visualization.arrayToDataTable(results[0]);

  pieChart.draw(pieData, options);
  papers.textContent = results[1]["papers"];

  barChart.draw(barData, google.charts.Bar.convertOptions(options));

  chart_content.style.display = "block";
})