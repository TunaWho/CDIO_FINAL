<table id="customers">
    <thead>
        <tr>
            <th>STT</th>
            <th>Loại xe</th>
            <th>Tên dịch vụ</th>
            <th>Giá tiền</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($listServices as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->car_type_name }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ number_format($service->price) }}</td>
            <td>
                {!! Form::open(['method'=>'delete', 'route'=>['partner.services.destroy', $service->id]]) !!}
                    {!! Form::button('xóa', ['type' => 'submit', 'class' => 'btn btn-custom clearfix', 'style' => 'padding: 10px;']) !!}
                    <a class="btn btn-custom clearfix" href="{{ route('partner.services.edit', $service->id) }}" style="padding: 10px">Sửa</a>
                {!! Form::close() !!}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">{{ __('messages.no_record') }}</td>
        </tr>
        @endforelse    
    </tbody>
</table>