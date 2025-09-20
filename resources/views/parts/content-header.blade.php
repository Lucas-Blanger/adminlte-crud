<div class="app-content-header">
  <div class="row align-items-center">
    <div class="col-sm-8">
        @hasSection('page-title')
      <h3 class="mb-0">@yield('page-title')</h3>
      @endif
    </div>


        
    <div class="class=col-sm-8">
        @isset($breadcrumb)
      <ol class="breadcrumb mb-0">
        @foreach ($breadcrumb as $breadcrumb)
        <li class="breadcrumb-item"><a href="#">{{ $breadcrumb['label'] }}</a></li>
        @endforeach
      </ol>
      @endisset
    </div>

    <div class="col-sm-auto ms-auto text-end">
      @yield('page-actions')
    </div>
  </div>
</div>