@if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close fui-cross" data-dismiss="alert"></button>
        {{ session()->get('message') }}
    </div>
@endif

