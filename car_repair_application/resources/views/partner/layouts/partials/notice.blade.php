@if (session('message'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('message') }}
    </div>
@endif
@if (session('status'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('error') }}
    </div>
@endif