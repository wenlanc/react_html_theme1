<div id="loading">
    @include('partials._body_loader')
</div>
@include('dashboards.rightSidebar')
@include('partials._body_header')



<div class="content-page">
    {{ $slot }}
</div>
@include('dashboards.modal')
@include('partials._body_footer')

@include('partials._scripts')
