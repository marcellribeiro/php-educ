<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>PHP-EDUC - Testador</title>
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('php-doc/styles/03e73060321a0a848018724a6c83de7f-theme-base.css')}}" />
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('php-doc/styles/03e73060321a0a848018724a6c83de7f-theme-medium.css')}}" />
    <script src="{{asset('codemirror.js')}}"></script>
    <script src="{{asset('matchbrackets.js')}}"></script>
    <script src="{{asset('htmlmixed.js')}}"></script>
    <script src="{{asset('xml.js')}}"></script>
    <script src="{{asset('javascript.js')}}"></script>
    <script src="{{asset('css.js')}}"></script>
    <script src="{{asset('clike.js')}}"></script>
    <script src="{{asset('php.js')}}"></script>
    <script language="Javascript" type="text/javascript" src="{{asset('jquery-1.9.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('codemirror.css')}}">
    <style type="text/css">.CodeMirror {border-top: 1px solid black; border-bottom: 1px solid black; height: 500px;}</style>
</head>
<body class="docs"><div class="navbar navbar-fixed-top">
    <div class="navbar-inner clearfix">
        <ul class="nav" style="width: 100%">
            <li style="float: left;"><a href="{{url('/')}}">PHP-EDUC</a></li>      
            <li style="float: right;"></li>
        </ul>
    </div>
</div>
<div id="breadcrumbs" class="clearfix">
    <ul class="breadcrumbs-container">
        <li><a href="{{url('/')}}">PHP-EDUC</a></li>
        <li><a href="{{url('/testador')}}">Testador</a></li>
    </ul>
</div>
<div id="layout">
    <div id="layout-content">
        <div id="index" class="set">
            <h1 class="title">TESTADOR</h1>
        </div>
        <div class="info">
            <form action="{{url('/testador/resultado')}}" method="post" target="output_frame">
                <div style='float:left;'>
                    Use este testador para validar seus códigos PHP. 
                </div>
                <div style='float:right;'>
                    <input type="submit" class='executar' value="Executar" style="background:green;color:white;padding:20px;border:0;">
                </div>
                <div style="clear:both;"></div>
                <br>
                @csrf
                <div style='float:left;width:50%;'>
                    Código
                    <textarea style='width:100%;' id='phpcode' name='phpcode'>&lt;?php
</textarea>
                </div>
                <div style='float:right;width:50%;'>
                    Resultado
                    <iframe style='width:100%;height:500px;border:1px solid #ccc;background:#FFF;border-top: 1px solid black; border-bottom: 1px solid black;' 
                    name="output_frame" src="" id="output_frame"></iframe>
                </div>
                <div style="clear:both;"></div>
                <br><br>
                <input type="submit" class='executar' value="Executar" style="background:green;color:white;padding:20px;width:100%;border:0;">
            </form>
        </div>
    </div>
</div>
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("phpcode"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
    });
    editor.setCursor({line: 2, ch: 1})
    editor.focus();
</script>
</body>
</html>