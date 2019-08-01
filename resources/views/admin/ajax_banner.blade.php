@if(isset($img_banners))
    @foreach($img_banners as $img_banner)
        <tr>
            <td><img id="img_review" src="/storage/banner/{{$img_banner->img}}" alt="imgae"></td>
            <td>{{$img_banner->description}}</td>
            <td><a href="admin/delete/banner/{{$img_banner->banner_id}}" class="btn btn-danger btn-md" con><i class="fa fa-trash"></i> Xóa</a></td>
            <td>
                <label class="switch">
                    <input class="status" type="checkbox" <?php echo $img_banner->status?'checked': ''; ?>>
                    <span class="slider round"></span>
                </label>
                <input type="text" value="{{$img_banner->banner_id}}">
            </td>

        </tr>
    @endforeach
@endif
<script>
    const check = document.getElementsByClassName('status');
    $(document).ready(function () {

        for (let i = 0; i < check.length; i++) {
            check[i].addEventListener('change', function () {
                let value = $(this).is(':checked');
                let  id = $(this).parent().next().val();
                $.ajax({
                    method: 'get',
                    url: '{{route('updateBannerStatus')}}',
                    data : {
                        value :value,
                        id : id
                    },
                    success : function (result) {
                        console.log(1);
                        $('#tbody').html(result);
                    }
                })
            })
        }
    });
</script>