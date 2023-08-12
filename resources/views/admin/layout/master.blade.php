<!DOCTYPE html>
<html lang="en">
@include('admin.components.head')
<body>
    @include('admin.components.header')
    @include('admin.components.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
          <h1>@yield('section-title')</h1>
        </div><!-- End Page Title -->

        <section class="section">
          @yield('section-content')
        </section>
    </main>

    @include('admin.components.footer')
    @include('admin.components.scripts')

    @yield('custom-script')
</body>
</html>
