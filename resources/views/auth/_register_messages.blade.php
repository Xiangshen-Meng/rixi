@if (\Session::has('register_message'))
    <div class="dialog dialog-success">
        <div class="container">
            感谢您成为日系问答的第 <span style="font-width: bold; color: #708933; font-size: 28px"> {{ session('register_message') }} </span> 位会员！
        </div>
    </div>
@endif