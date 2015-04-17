@extends('emails.base')

@section('content')
    <table class="row">
        <tr>
            <td class="wrapper last">

                <table class="twelve columns">
                    <tr>
                        <td>
                            <br>
                            <h1 style="font-size: 24px">感谢您的注册</h1>
                            <br>
                            <p class="lead">
                                感谢您成为日系问答的第 <span style="font-weight: bold;color: #708933">{{ $users_num }}</span> 位会员！
                            </p>
                            <p>我们的服务刚刚起步，还有很多不能满足您的需要的地方。<br>
                                如果能抽出一些时间为我们提提意见，我们会非常感谢的！有什么问题随时联系我们～</p>
                            <p>赶快去说说感兴趣的东西吧～<a href="http://rixi.club/" style="font-weight: bold;font-size: 20px;color: #708933">日系问答</a></p>
                            <br>
                            <img width="512" src="http://rixi.club/images/rixi/rixi-logo.png">
                        </td>
                        <td class="expander"></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
@endsection
