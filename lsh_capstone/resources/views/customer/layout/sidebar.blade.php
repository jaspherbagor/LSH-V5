<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand py-1">
            <a href="{{ route('customer_home') }}">
                <img src="{{ asset('uploads/logo.png') }}" alt="" class="logo py-1">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('customer_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('customer/home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('customer_home') }}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('customer/order/view') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_order_view') }}"><i class="fa fa-list-alt"></i> <span>Completed Bookings</span></a></li>

            <li class="{{ Request::is('customer/pending-order/view') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_pending_order_view') }}"><i class="fa fa-clock-o"></i> <span>Pending Bookings</span></a></li>

            <li class="{{ Request::is('customer/declined-order/view') ? 'active' : '' }}"><a class="nav-link" href="{{ route('customer_declined_order_view') }}"><i class="fa fa-times"></i> <span>Declined Bookings</span></a></li>

            <li class="{{ Request::is('customer/accommodations/view') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('customer_accommodation_view') }}"><i class="fa fa-building"></i> <span>Add Accommodation Review</span></a>
            </li>

            <li class="{{ Request::is('customer/review/view') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('customer_review_view') }}"><i class="fa fa-star"></i> <span>My Reviews</span></a>
            </li>

            <li class="{{ Request::is('customer/edit-profile') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('customer_profile') }}"><i class="fa fa-user"></i> <span>Edit Profile</span></a>
            </li>

            <li>
                <a class="nav-link" href="{{ route('home') }}" target="_blank"><i class="fa fa-home" aria-hidden="true"></i> <span>Visit Website</span></a>
            </li>
            
        </ul>
    </aside>
</div>