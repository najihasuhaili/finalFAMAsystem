@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.tasksCalendar.title') }}
    </div>

    <div class="card-body">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />
        <div id="calendar"></div>

    </div>
</div>

@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            events: [
                @foreach($events as $event)
                @if($event->due_date)
                {
                    title: '{{ $event->name }}',
                    start: '{{ \Carbon\Carbon::createFromFormat(config('panel.date_format'),$event->due_date)->format('Y-m-d') }}',
                    url: '{{ url('admin/tasks').'/'.$event->id.'/show' }}',
                    nama_pemohon: '{{ $event->nama_pemohon }}',
                    nama_bilik: '{{ $event->nama_bilik }}'
                },
                @endif
                @endforeach
            ],
            eventRender: function (event, element) {
                element.attr('title', event.nama_pemohon + ' - ' + event.nama_bilik);
            },
        })
    });
</script>

@stop
