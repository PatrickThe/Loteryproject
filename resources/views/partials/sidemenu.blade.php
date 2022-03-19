<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/">Synergy Group</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">SG</a>
    </div>
    <ul class="sidebar-menu">
      @if(Auth::User()->is_admin == 1)
      <li class="menu-header">Dashboard</li>
      <li class="nav-item dropdown">
        <a href="/home" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li><a class="nav-link" href="/customers"><i class="fas fa-fire"></i> <span>Manage Customers</span></a></li>
      <li><a class="nav-link" href="/payments"><i class="fas fa-fire"></i> <span>Manage Payments</span></a></li>
      <li><a class="nav-link" href="/add_news"><i class="fas fa-fire"></i> <span>Add News</span></a></li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Reports</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="/paymentsReport">Payments Reports</a></li>
          <li><a class="nav-link" href="customersReport">Customers Report</a></li>
        </ul>
      </li>
    </ul>
    @else
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="/home" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>
    <li class="nav-item dropdown">
      <a href="/news" class="nav-link"><i class="fas fa-fire"></i><span>News</span></a>
    </li>
    <li class="nav-item dropdown">
      <a href="/referrals" class="nav-link"><i class="fas fa-fire"></i><span>Referral Link</span></a>
    </li>
    @endif
  </aside>
</div>