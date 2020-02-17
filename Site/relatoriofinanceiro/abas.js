$(document).ready(function () {

  $('#minhaAba a').on('click', function (e) {
      e.preventDefault()
      $(this).tab('show')
  });

  $('#minhaAba a[href="#venda"]').tab('show');
  $('#minhaAba a[href="#invest"]').tab('show');

});