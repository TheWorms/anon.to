<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0; url={{ $redirect }}">
    <title>Redirecting to {{ $redirect }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            font-size: 18px;
            display: inline-block;
        }

        .content a {
            color: #5bc0de;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Redirecting to <a href="{{ $redirect }}" title="{{ $redirect }}" rel="noreferrer nofollow">{{ \Illuminate\Support\Str::limit($redirect,32) }}</a>
        </h1>
    </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '{{ env('GOOGLE_ANALYTICS') }}', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
