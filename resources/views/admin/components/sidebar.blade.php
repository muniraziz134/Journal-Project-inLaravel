<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard') ? '' :'collapsed' }}" href="@if (auth()->user()->role == 'admin')
            {{ route('dashboard') }}
        @else
        {{ route('memberdashboard') }}
        @endif">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('journal') ? '' :'collapsed' }}" href="{{ route('journal') }}">
          <i class="bi "></i>
          <span>All Journals</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('editorial_member') ? '' :'collapsed' }}" href="{{ route('editorial_member') }}">
          <i class="bi "></i>
          <span>Editorial Members</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('contact_message') ? '' :'collapsed' }}" href="{{ route('contact_message') }}">
          <i class="bi"></i>
          <span>Contact Messages</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('user') ? '' :'collapsed' }}" href="{{ route('user') }}">
          <i class="bi bi-users"></i>
          <span>Users</span>
        </a>
      </li><!-- End Dashboard Nav -->
    </ul>


  </aside><!-- End Sidebar-->
