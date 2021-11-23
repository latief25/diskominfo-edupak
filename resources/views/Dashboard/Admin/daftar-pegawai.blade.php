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
        <th>Pangkat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th></th>
        <th class="search">NIP</th>
        <th class="search">Nama</th>
        <th></th>
        <th></th>
      </tr>
    </tfoot>
  </table>
</div>

<!-- MULAI MODAL FORM TAMBAH/EDIT-->
<div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-judul"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
          <div class="row">
            <div class="col-sm-12">

              <input type="hidden" name="id" id="id">

              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" id="nip" class="form-control @error('nip')is-invalid @enderror" name="nip" value="" required>
                @error('nip')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control @error('nama')is-invalid @enderror" name="nama" value="" required>
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="pangkat">Pangkat</label>
                <select id="pangkat" class="form-control" name="pangkat">
                  @foreach ($pangkat as $p)
                  <option value="{{ $p->id }}">
                    {{ $p->nama_pangkat }}
                  </option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="jabatan_fungsional">Jabatan Fungsional</label>
                <select id="jabatan_fungsional" class="form-control" name="jabatan_fungsional">
                  @foreach ($jabatan_fungsional as $jf)
                  <option value="{{ $jf->id }}">
                    {{ $jf->nama_jabatan_fungsional }}
                  </option>
                  @endforeach
                </select>
              </div>

            </div>

            <div class="col-sm-offset-2 col-sm-12">
              <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan" value="create">Simpan
              </button>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- AKHIR MODAL -->

<!-- MULAI MODAL KONFIRMASI DELETE-->

<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">PERHATIAN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Data pegawai yang telah dihapus akan hilang selamanya, apakah anda yakin ingin menghapusnya ?</p>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Batal</button>
        <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
          Data</button>
      </div>
    </div>
  </div>
</div>

<!-- AKHIR MODAL -->
@endsection


@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
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

  tfoot select {
    width: 100%;
    padding: 5px;
    box-sizing: border-box;
  }
</style>
@endsection


@section('js')
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js" integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script>
  //CSRF TOKEN PADA HEADER
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  });

  //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
  $('body').on('click', '.edit-post', function() {
    var data_id = $(this).data('id');
    $.get('daftar-pegawai/' + data_id + '/edit', function(data) {
      $('#modal-judul').html("Edit Data Pegawai");
      $('#tombol-simpan').val("edit pegawai");
      $('#tambah-edit-modal').modal('show');
      $('#id').val(data.id);
      $('#nip').val(data.nip);
      $('#nama').val(data.nama);
      $('#pangkat').val(data.pangkat_id);
      $('#jabatan_fungsional').val(data.jabatan_fungsional_id);
    })
  });

  if ($("#form-tambah-edit").length > 0) {
    $("#form-tambah-edit").validate({
      submitHandler: function(form) {
        var actionType = $('#tombol-simpan').val();
        $('#tombol-simpan').html('Sending..');
        $.ajax({
          data: $('#form-tambah-edit')
            .serialize(),
          url: "{{ route('daftar-pegawai.store') }}",
          type: "POST",
          dataType: 'json',
          success: function(data) {
            $('#form-tambah-edit').trigger("reset");
            $('#tambah-edit-modal').modal('hide');
            $('#tombol-simpan').html('Simpan');
            var oTable = $('#tabel-pegawai').dataTable();
            oTable.fnDraw(false);
            iziToast.success({
              title: 'Data Berhasil Disimpan',
              message: "{{ Session('success')}}",
              position: 'bottomRight'
            });
          },
          error: function(data) {
            console.log('Error:', data);
            $('#tombol-simpan').html('Simpan');
          }
        });
      }
    })
  }

  $(document).on('click', '.delete', function() {
    dataId = $(this).attr('id');
    $('#konfirmasi-modal').modal('show');
  });

  $('#tombol-hapus').click(function() {
    $.ajax({
      url: "daftar-pegawai/" + dataId,
      type: 'delete',
      beforeSend: function() {
        $('#tombol-hapus').text('Hapus Data');
      },
      success: function(data) {
        setTimeout(function() {
          $('#konfirmasi-modal').modal('hide');
          var oTable = $('#tabel-pegawai').dataTable();
          oTable.fnDraw(false);
        });
        iziToast.success({
          title: 'Data Berhasil Dihapus',
          message: '{{ Session("delete")}}',
          position: 'bottomRight'
        });
      }
    })
  });

  $(document).ready(function() {
    $('#tabel-pegawai tfoot th.search').each(function() {
      var title = $(this).text();
      $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    var table = $('#tabel-pegawai').DataTable({
      initComplete: function() {
        // Apply the search
        this.api().columns().every(function() {
          var that = this;

          // input search
          $('input', this.footer()).on('change clear', function() {
            if (that.search() !== this.value) {
              that
                .search(this.value)
                .draw();
            }
          });

        });


        this.api().columns([3]).every(function() {
          var column = this;
          var select = $('<select><option value=""></option></select>')
            .appendTo($(column.footer()).empty())
            .on('change', function() {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
              );

              column
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();
            });

          column.data().unique().sort().each(function(d, j) {
            if (d) {
              select.append('<option value="' + d + '">' + d + '</option>')
            }
          });
        });


      },
      dom: 'lrtip',
      "lengthMenu": [
        [10, 25, 50],
        [10, 25, 50]
      ],
      "autoWidth": false,
      "columnDefs": [{
        "orderable": false,
        "targets": [0, 3],
      }, ],
      "order": [],
      processing: true,
      search: {
        return: false
      },
      serverSide: true,
      "language": {
        "processing": "Mohon tunggu"
      },
      "ajax": "{{route('daftar-pegawai.index')}}",
      "columns": [{
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
          "data": "nama_pangkat"
        },
        {
          "data": "action",
        },
      ]
    });
    table.columns.adjust().draw();
  });
</script>
@endsection
