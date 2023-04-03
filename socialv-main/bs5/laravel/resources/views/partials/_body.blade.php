<div id="loading">
    @include('partials._body_loader')
</div>
@include('dashboards.rightSidebar')
@include('partials._body_header')

@include('partials._body_sidebar')


<div class="content-page">
    {{ $slot }}
</div>
@include('dashboards.modal')
@include('partials._body_footer')

@include('partials._scripts')
