@extends('Dashboard.layouts.main')

@section('dashboard-content')
<div class="px-0" style="min-height: 100vh;">
  <h4>Daftar Pegawai</h4>
  <table id="tabel-pegawai" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="tabel-pegawai">
    <thead>
      <tr role="row">
        <th style="width: 5%;">NO.</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th></th>
        <th class="search">NIP</th>
        <th class="search">Nama</th>
        <th></th>
      </tr>
    </tfoot>
  </table>
</div>



<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection


@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<style>
  tfoot {
    display: table-header-group;
  }

  tfoot input {
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
  }
</style>
@endsection


@section('js')
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(document).ready(function() {
    $('#tabel-pegawai tfoot th.search').each(function() {
      var title = $(this).text();
      $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });
    $('#tabel-pegawai').DataTable({
      initComplete: function() {
        // Apply the search
        this.api().columns().every(function() {
          var that = this;

          $('input', this.footer()).on('change clear', function() {
            if (that.search() !== this.value) {
              that
                .search(this.value)
                .draw();
            }
          });
        });
      },
      dom: 'lrtip',
      "lengthMenu": [
        [10, 25, 50],
        [10, 25, 50]
      ],
      "bPaginate": true,
      "bLengthChange": true,
      "bFilter": true,
      "bSort": true,
      "bAutoWidth": true,
      "columnDefs": [{
        "orderable": false,
        "targets": [0, 3]
      }, ],
      processing: true,
      search: {
        return: false
      },
      serverSide: true,
      "ajax": "{{route('daftar.pegawai')}}",
      "columns": [{
          "data": null,
          "sortable": false,
          render: function(data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
          }
        },
        {
          "data": "nip"
        },
        {
          "data": "nama"
        },
        {
          "data": null,
          "sortable": false,
          render: function() {
            return '<div class="d-flex justify-content-evenly"><i class="btn btn-primary fas fa-eye" data-bs-toggle="modal" data-bs-target="#editModal"></i><i class="btn btn-warning fas fa-edit"></i></div>';
          }
        },
      ]
    });
  });
</script>
@endsection
