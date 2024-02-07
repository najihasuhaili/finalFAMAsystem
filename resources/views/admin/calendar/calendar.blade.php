@extends('layouts.admin')
@section('content')
<h3 class="page-title">
    {{ trans('global.systemCalendar') }}
    <span class="status-dot" style="background-color: green;"></span>
    <span class="status-label" style="font-size: 14px;">Tempahan Berjaya</span>
    <span class="status-dot" style="background-color: blue;"></span>
    <span class="status-label" style="font-size: 14px;">Tempahan dalam proses</span>
</h3>

<div class="card">
    <div class="card-header">
        {{ trans('global.systemCalendar') }}
    </div>

    <div class="card-body">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>
    </div>
</div>

@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
        events={!! json_encode($events) !!};
        $('#calendar').fullCalendar({
            events: events,
            height: 'auto',
            contentHeight: 'auto',
            eventRender: function (event, element) {
                var tooltipContent = (event.nama_pemohon ? event.nama_pemohon : '') + ' - ' + (event.nama_bilik ? event.nama_bilik : '');
                element.attr('title', tooltipContent);
            },
        })
    });
</script>

<style>
    .status-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-left: 5px;
        margin-right: 2px;
    }
</style>
@stop
