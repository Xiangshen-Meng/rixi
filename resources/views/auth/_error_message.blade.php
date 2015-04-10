@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>啊哦！</strong> 您的输入好像有点问题哦<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
