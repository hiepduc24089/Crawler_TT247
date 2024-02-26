@foreach ($data as $detail)
    <div>
        <p>Điện lực: {{ $detail->name }}</p>
        <p>Ngày: {{ $detail->date_cut }}</p>
        <p>Thời gian: {{ $detail->time_cut }}</p>
        <p>Khu vực: {{ $detail->area }}</p>
        <p>Lý do: {{ $detail->reason }}</p>
        <p>Trạng thái: {{ $detail->status }}</p>
        <hr>
    </div>
@endforeach
