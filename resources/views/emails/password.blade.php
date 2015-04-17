@extends('emails.base')

@section('content')
<table class="row">
    <tr>
        <td class="wrapper last">

            <table class="twelve columns">
                <tr>
                    <td>
                        <br>
                        <h1 style="font-size: 24px">找回密码</h1>
                        <br>
                        <p class="lead">点击下面的链接可以找回密码哦～</p>
                        <p><a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a></p>
                        <img width="512" src="http://rixi.club/images/rixi/rixi-logo.png">
                    </td>
                    <td class="expander"></td>
                </tr>
            </table>

        </td>
    </tr>
</table>
@endsection
