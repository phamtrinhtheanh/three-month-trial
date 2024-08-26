@extends("Layout::frontend.index")
@section("body")
<div class="body-wrapper">
    @include("Layout::frontend.parts.header")
    @yield("content")
    @include("Layout::frontend.parts.footer")
</div>
@endsection
