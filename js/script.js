$(document).ready(function () {
    $('#table').DataTable({
      "scrollY": "50vh",
      "scrollCollapse": true,
    });
    $('.dataTables_length').addClass('bs-select');
  });