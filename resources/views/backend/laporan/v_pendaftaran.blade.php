@extends('backend.layouts.v_template')
@section('title', 'Laporan Pendaftaran')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Laporan Pendaftaran</h4>
                    </div>
                </div>
                <div class="card-body">
                	<table class="display table">
                        <tbody>
                            <tr>
                                <td>Dari Tanggal:</td>
                                <td><input type="text" id="min" name="min"></td>
                            </tr>
                            <tr>
                                <td>Sampai Tanggal:</td>
                                <td><input type="text" id="max" name="max"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Lengkap</th>
                                    <th>Rusunawa</th>
                                    <th>NIK</th>
                                    <th>Status Pendaftaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftarans as $pendaftaran)
                                <tr>
                                    <th>{{ $pendaftaran->created_at }}</th>
                                    <td>{{ $pendaftaran->nama_lengkap }}</td>
                                    <td>{{ $pendaftaran->gedung->nama }} Lt. {{ $pendaftaran->lantai }}</td>
                                    <td>{{ $pendaftaran->no_ktp }}</td>
                                    <td>{{ $pendaftaran->status_pendaftaran }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<!-- Datatables -->
<link rel="stylesheet" href="{{ asset('template-backend') }}/assets/js/plugin/datatables/buttons.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('template-backend') }}/assets/js/plugin/datatables/dataTables.dateTime.min.css">
@endsection
@section('script')
<!-- Datatables -->
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/datatables.min.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/dataTables.buttons.min.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/jszip.min.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/pdfmake.min.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/vfs_fonts.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/buttons.html5.min.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/moment.min.js"></script>
<script src="{{ asset('template-backend') }}/assets/js/plugin/datatables/dataTables.dateTime.min.js"></script>
@endsection
@section('script-internal')
<!-- Datatables -->
<script>
$(document).ready(function() {
    $('#add-row').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ],
    });
});

var minDate, maxDate;

// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date(data[0]);

        if (
            (min === null && max === null) ||
            (min === null && date <= max) ||
            (min <= date && max === null) ||
            (min <= date && date <= max)
        ) {
            return true;
        }
        return false;
    }
);

$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'DD MMMM YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'DD MMMM YYYY'
    });

    // DataTables initialisation
    var table = $('#add-row').DataTable();

    // Refilter the table
    $('#min, #max').on('change', function() {
        table.draw();
    });
});

</script>
@endsection
