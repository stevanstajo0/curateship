@extends('admin::layouts.master')
@section('content')
  @include('post::partials.modals')
  @include('post::partials.edit-modals')
  <section>
    <div class="container max-width-lg margin-top-xs">
      <div class="grid gap-md@md">
        @include('post::partials.sidebar')
        <main class="position-relative padding-top-md z-index-1 col-12@md">
          @include('post::partials.control')
          <div class="bg radius-md padding-md shadow-sm">
            <div id="site-table-with-pagination-container">
              @include('post::partials.table')
            </div><!-- /#site-table-with-pagination-container -->
          </div><!-- /.bg radius-md padding-md shadow-sm -->
        </main>
      </div><!-- /.grid -->
    </div><!-- /.container -->
  </section>
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('post::partials.script-js')
@endpush
