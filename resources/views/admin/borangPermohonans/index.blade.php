@extends('layouts.admin')
@section('content')
@can('borang_permohonan_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.borang-permohonans.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.borangPermohonan.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.borangPermohonan.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-BorangPermohonan">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.nama_pemohon') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.no_sambungan') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.jawatan') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.unit_bahagian') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.nama_mesyuaarat') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.nama_bilik') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.pengerusi') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.dari') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.hingga') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.bil_ahli') }}
                        </th>
                        <th>
                            {{ trans('cruds.borangPermohonan.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($borangPermohonans as $key => $borangPermohonan)
                        <tr data-entry-id="{{ $borangPermohonan->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $borangPermohonan->id ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->nama_pemohon ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->email ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->no_sambungan ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->jawatan ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->unit_bahagian ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->nama_mesyuaarat ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->nama_bilik->nama_bilik ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->pengerusi ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->dari ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->hingga ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->bil_ahli ?? '' }}
                            </td>
                            <td>
                                {{ $borangPermohonan->status ?? '' }}
                            </td>
                            <td>
                                @can('borang_permohonan_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.borang-permohonans.show', $borangPermohonan->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('borang_permohonan_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.borang-permohonans.edit', $borangPermohonan->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('borang_permohonan_delete')
                                    <form action="{{ route('admin.borang-permohonans.destroy', $borangPermohonan->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('borang_permohonan_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.borang-permohonans.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-BorangPermohonan:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection