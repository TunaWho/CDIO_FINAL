@extends('partner.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/user.css') }}" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link href="{{ asset('js/dist/cropper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/dist/cropper.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title"></h4>
                        </div>
                        <div class="content">
                            {!! Form::open(['method'=>'PATCH', 'route'=>['partner.settings.update' , auth('partner')->user()->partner->id], 'files'=>true]) !!}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên đối tác:</label>
                                            {!! Form::text('name', auth('partner')->user()->partner->name ?? '', ['class'=>'form-control', 'placeholder' => 'Full name']) !!}
                                            @error('name')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email đăng nhập</label>
                                            {!! Form::email('email', auth('partner')->user()->email ?? '', ['class'=>'form-control', 'placeholder' => 'Your E-mail']) !!}
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $provinceId = auth('partner')->user()->partner->province_id ?? ''
                                @endphp
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Choose</label>
                                            <select id="province-select" class="form-control" name="province_id">
                                                <option value="0">Tỉnh / Thành phố</option>
                                                @foreach ($provinces as $province)
                                                    <option value="{{ $province->id }}" @if ($provinceId == $province->id) selected @endif>
                                                        {{ str_replace('phố', '', strstr($province->name, ' ')) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('province_id')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Choose</label>
                                            @if (!empty(auth('partner')->user()->partner->province_id))
                                                <select id="district-select" class="form-control" name="district_id">
                                                    <option value="0">Quận / Huyện</option>
                                                    @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}" @if (auth('partner')->user()->partner->district_id == $district->id) selected @endif>
                                                            {{ $district->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @else
                                            <select id="district-select" class="form-control" name="district_id">
                                                <option value="0">Quận / Huyện</option>
                                            </select>
                                            @endif
                                            @error('district_id')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            {!! Form::text('address', auth('partner')->user()->partner->address ?? '', ['class'=>'form-control', 'placeholder' => 'Your address']) !!}
                                            @error('address')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            {!! Form::text('phone', auth('partner')->user()->partner->phone ?? '', ['class'=>'form-control', 'placeholder' => 'Your address']) !!}
                                            @error('phone')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Ghi Chú</label>
                                            {!! Form::textarea('note', auth('partner')->user()->partner->note ?? '', ['class'=>'form-control', 'placeholder' => 'Enter...']) !!}
                                            @error('note')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Số dư tài khoản</label>
                                            {!! Form::text('account_balance', auth('partner')->user()->partner->account_balance ?? '', ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input name="thumbnail_base64_avatar" type="hidden" />
                                        </div>
                                    </div>
                                </div>

                                {!! Form::submit('Cập nhật', ['class' => 'btn btn-info btn-fill pull-right']) !!}
                                <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                                alt="..." />
                        </div>
                        <div class="content">
                            <div class="author">
                                <input id="file-upload-avatar" type="file" name="avatar"
                                    class="item-img-avatar file center-block hidden" accept="image/*" />
                                <label for="file-upload-avatar" id="avatar-drag" style="cursor: pointer;">
                                    @if (!empty(auth('partner')->user()->partner->avatar))
                                        <img id="file-image-avatar" class="avatar border-gray" src="{{ url('storage/' . auth('partner')->user()->partner->avatar ) }}" alt="..." />
                                    @else
                                        <img id="file-image-avatar" class="avatar border-gray" src="" alt="..." />
                                    @endif

                                    <h4 class="title">{{ auth('partner')->user()->partner->name ?? '' }}<br />
                                        <small>dung0301</small>
                                    </h4>
                                </label>
                            </div>
                            <p class="description text-center"> "Uy tín làm nên chất lượng" <br>
                            <p class="description text-center"> Điểm đánh giá: 4,5<i class="fa fa-star"></i>
                                <br>
                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button onclick="window.location.href='https://www.facebook.com/dung030199/'"
                                class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                            <button onclick="window.location.href='https://twitter.com/'" class="btn btn-simple"><i
                                    class="fa fa-twitter"></i></button>
                            <button onclick="window.location.href='https://www.google.com/'" class="btn btn-simple"><i
                                    class="fa fa-google-plus-square"></i></button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-image-avatar" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img src="" id="sample_image-avatar" />
                            </div>
                            <div class="col-md-4">
                                <div class="preview-avatar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="crop-avatar" class="btn btn-primary">Crop</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script> --}}
    <script src="{{ asset('js/dist/cropper.min.js') }}" defer></script>
    <script type="text/javascript">
        $(document).ready(function() {
            function uploadImageCrop(classUpload, withImg, heightImg) {
                let $modal = $('#modal-image-' + classUpload),
                    image = document.querySelector('#sample_image-' + classUpload);

                $('.item-img-' + classUpload).on('change', function(event) {
                    let files = event.target.files;
                    let done = function(url) {
                        image.src = url;
                        $modal.appendTo("body").modal('show');
                    };
                    if (files && files.length > 0) {
                        reader = new FileReader();
                        reader.onload = function(event) {
                            done(reader.result);
                        };
                        reader.readAsDataURL(files[0]);
                    }
                });
                $modal.on('shown.bs.modal', function() {
                    cropper = new Cropper(image, {
                        aspectRatio: withImg / heightImg,
                        viewMode: 1,
                        autoCrop: true,
                        autoCropArea: 1,
                        minContainerHeight: 400,
                        background: false,
                        preview: '.preview-' + classUpload
                    });
                }).on('hidden.bs.modal', function() {
                    cropper.destroy();
                    cropper = null;
                });
                $('#crop-' + classUpload).on('click', function() {
                    canvas = cropper.getCroppedCanvas({
                        minWidth: 256,
                        minHeight: 256,
                        maxWidth: 512,
                        maxHeight: 512,
                        imageSmoothingEnabled: true,
                        imageSmoothingQuality: 'high',
                    });
                    canvas.toBlob(function(blob) {
                        url = URL.createObjectURL(blob);
                        let reader = new FileReader();
                        reader.readAsDataURL(blob);
                        reader.onloadend = function() {
                            let base64data = reader.result;
                            $modal.modal('hide');
                            $('#file-image-' + classUpload).attr('src', base64data);
                            $('input[name="thumbnail_base64_' + classUpload + '"]').val(base64data);
                            $('#file-upload-' + classUpload).val('');
                        };
                    });
                });
            }
            uploadImageCrop('avatar', 209, 209);
        });

    </script>
    <script type="text/javascript">
        var url = "{{ route('partner.get_district') }}";

    </script>
    <script src='{{ asset('assets/js/location.js') }}'></script>

@endpush
