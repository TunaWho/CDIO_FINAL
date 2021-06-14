<div class="container">
    <div class="title-wrapper" style="margin-left: auto;">
        <h2 class="title">Tiệm sửa xe</h2>
        <a class="view-all-deal">
            <span class="icon-list-deal"><span class="square"></span><span class="square"></span><span
                    class="square"></span><span class="square"></span></span>Xem tất cả
        </a>
    </div>
    <!--  -->
    <div class="list">
        <div class="load flex-wrap" style="display: flex;">
            @forelse ($listPartners as $listPartner)
            <div class="item">
                <a class="item-content" href="{{ route('customer.detail', $listPartner->id) }}"
                    style="color: #000; text-decoration: none">
                    <div class="image-content">
                        <img src="{{ asset('storage/' . $listPartner->avatar) }}" />
                    </div>
                    <div class="info">
                        <div class="basic">
                            <h4 class="name-res">{{ $listPartner->name }}</h4>
                            <div class="address">{{ $listPartner->address . ' ' . $listPartner->province->name . ' ' . $listPartner->district->name }}</div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
                <h4>No Record</h4>
            @endforelse
        </div>
    </div>
</div>
<!--  -->
<div class="btn-next" style="display: flex; justify-content: center;">
    {{ $listPartners->appends(\Request::except('page'))->links() }}
</div>