@extends('client.layouts.main')

@section('content')
<body class="shoe">
<!-- ==========Preloader========== -->
<div class="loader"><span>Cartify...</span></div>
<!-- ==========Preloader========== -->
<!--===scroll bottom to top===-->
<a href="#0" class="scrollToTop"><i class="flaticon-up-arrow"></i></a>
<!--===scroll bottom to top===-->

<div id="app"></div>
</body>
<script>
    window.authUser = @json(Auth::check() ? Auth::user() : null);
</script>
@endsection
