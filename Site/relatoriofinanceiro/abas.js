$(document).ready(function () {

  $('#minhaAba a').on('click', function (e) {
      e.preventDefault()
      $(this).tab('show')
  });

  $('#minhaAba a[href="#venda"]').tab('show');
  $('#minhaAba a[href="#invest"]').tab('show');
  $('#minhaAba a[href="#graficos"]').tab('show');

  $(function () {
    //Grafico de barras
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    });

  });

});