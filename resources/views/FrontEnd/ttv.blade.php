<h4 style="padding-top: 40px;"><strong>Thông tin vé</strong></h4><hr>

@if(isset($tickets))
    @foreach($tickets as $item)
    <div class="row">
        <div class="col-md-9">
            <p><strong>{{$item->name}}</strong></p>
            <p class="text-1">{{$item->description}}</p>
        </div>
        <div class="col-md-3">
            <p><strong>Giá vé</strong></p>
            <p><span style="font-weight: bold; font-size: 24px;color: #77CA3A">{{$item->price}}</span> VNĐ</p>
        </div>
    </div>
    @endforeach
@endif

