@if(isset($events))
    @foreach($events as $event)
        <tr>
            <td>{{$event->name}}</td>
            <td>{{$event->organizer}}</td>
            <td>{{$event->user->name}}</td>
            <td>{{$event->user->phone}}</td>
            <td>
                <a href="{{url('event').'/'.$event->event_id}}" class="btn btn-primary btn-md" target="_blank"><i class="fa fa-folder"></i> Chi tiết </a>
                <a href="{{asset('')}}admin/delete/{{$event->event_id}}" class="btn btn-danger btn-md" ><i class="fa fa-pencil"></i> xóa </a>
            </td>
            <td>
                <button class="btn btn-success btn-md confirm"><i class="fa fa-check"></i> phê duyệt </button>
                <input type="text" value="{{$event->event_id}}" style="display: none;">
            </td>
        </tr>
    @endforeach

@endif
<script type="text/javascript">
    $(document).ready(function () {
        const confirm = document.getElementsByClassName('confirm');
        for (let i = 0; i < confirm.length; i++) {
            confirm[i].addEventListener('click', function () {
                $.confirm({
                    title: 'Confirm!',
                    content: '!',
                    buttons: {
                        confirm: function () {
                            $.ajax({
                                method: 'get',
                                url : '{{route('confirm')}}',
                                data: {
                                    event_id : confirm[i].nextElementSibling.value
                                },
                                success : function (result) {
                                    $('#tbody').html(result);
                                }
                            });
                        },
                        cancel: function () {
                            $.alert('Canceled!');
                        }
                    }
                });
            })
        }

    })
</script>