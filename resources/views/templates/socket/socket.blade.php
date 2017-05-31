<!doctype html>
<html>
<head>
    <title>Socket.IO chat</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font: 13px Helvetica, Arial; }
        form { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
        form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
        form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
        #messages { list-style-type: none; margin: 0; padding: 0; }
        #messages li { padding: 5px 10px; }
        #messages li:nth-child(odd) { background: #eee; }
    </style>
    {{--<script src="http://cdn.bootcss.com/socket.io/2.0.1/socket.io.js"></script>--}}
    {{--<script src="http://cdn.bootcss.com/jquery/2.0.0/jquery.js"></script>--}}
    {{--<script>--}}
        {{--$(function () {--}}
            {{--var socket = io();--}}
            {{--$('form').submit(function(){--}}
                {{--socket.emit('chat message', $('#m').val());--}}
                {{--$('#m').val('');--}}
                {{--return false;--}}
            {{--});--}}
            {{--socket.on('chat message', function(msg){--}}
                {{--$('#messages').append($('<li>').text(msg));--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
</head>
<body>
<ul id="messages"></ul>
<h1>socket</h1>
<form action="">
    <input id="m" autocomplete="off" /><button>Send</button>
</form>
</body>
</html>
<script>
    if(window.WebSocket != undefined) {
        console.log('WebSocket_ok');

        var connection = new WebSocket('ws://localhost:8080');
        console.log(connection);

        connection.onerror =function(event){
            console . log ( 'Error: ',event);
        };

        connection.onopen = function (event) {
            console . log ( 'Connected to: ' + event . currentTarget . URL );
        };


        if(connection.readyState==1){
            //发送数据和接收数据
            connection.send('smg');

            connection.onmessage = function(event){
                console . log ( event . data );
            }
        }

    }
</script>