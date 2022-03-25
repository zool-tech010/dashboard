<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('Login_files/bootstrap.min.css') }}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="{{ asset('Login_files/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Login_files/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('Login_files/safa-94a721.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="{{ asset('Login_files/nvv6iyz.js') }}" type="text/javascript"></script>
    <style type="text/css">.tk-ibm-plex-sans-hebrew{font-family:"ibm-plex-sans-hebrew",sans-serif;}</style><style type="text/css">@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/10c4b8/00000000000000003b9b3e63/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n5&v=3) format("woff2"),url(https://use.typekit.net/af/10c4b8/00000000000000003b9b3e63/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n5&v=3) format("woff"),url(https://use.typekit.net/af/10c4b8/00000000000000003b9b3e63/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n5&v=3) format("opentype");font-weight:500;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/45fe8d/00000000000000003b9b3e65/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n6&v=3) format("woff2"),url(https://use.typekit.net/af/45fe8d/00000000000000003b9b3e65/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n6&v=3) format("woff"),url(https://use.typekit.net/af/45fe8d/00000000000000003b9b3e65/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n6&v=3) format("opentype");font-weight:600;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/6595ab/00000000000000003b9b3e64/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/6595ab/00000000000000003b9b3e64/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/6595ab/00000000000000003b9b3e64/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/5b9c36/00000000000000003b9b3e61/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n2&v=3) format("woff2"),url(https://use.typekit.net/af/5b9c36/00000000000000003b9b3e61/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n2&v=3) format("woff"),url(https://use.typekit.net/af/5b9c36/00000000000000003b9b3e61/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n2&v=3) format("opentype");font-weight:200;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/54f827/00000000000000003b9b3e66/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/54f827/00000000000000003b9b3e66/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/54f827/00000000000000003b9b3e66/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/9d7b25/00000000000000003b9b3e60/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n1&v=3) format("woff2"),url(https://use.typekit.net/af/9d7b25/00000000000000003b9b3e60/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n1&v=3) format("woff"),url(https://use.typekit.net/af/9d7b25/00000000000000003b9b3e60/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n1&v=3) format("opentype");font-weight:100;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/c297f4/00000000000000003b9b3e62/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n3&v=3) format("woff2"),url(https://use.typekit.net/af/c297f4/00000000000000003b9b3e62/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n3&v=3) format("woff"),url(https://use.typekit.net/af/c297f4/00000000000000003b9b3e62/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n3&v=3) format("opentype");font-weight:300;font-style:normal;font-display:auto;}@font-face{font-family:ibm-plex-sans-hebrew;src:url(https://use.typekit.net/af/3c9ea3/00000000000000003b9b3e67/27/l?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n8&v=3) format("woff2"),url(https://use.typekit.net/af/3c9ea3/00000000000000003b9b3e67/27/d?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n8&v=3) format("woff"),url(https://use.typekit.net/af/3c9ea3/00000000000000003b9b3e67/27/a?primer=f592e0a4b9356877842506ce344308576437e4f677d7c9b78ca2162e6cad991a&fvd=n8&v=3) format("opentype");font-weight:800;font-style:normal;font-display:auto;}</style><script type="text/javascript">
        try {
            Typekit.load();
        } catch (e) {}

    </script>
</head>
<body>
   @yield('content')
</body>
</html>
