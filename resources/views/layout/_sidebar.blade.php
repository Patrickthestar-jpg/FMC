<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('layout.master_layout')}}">
                <img src="{{ URL::asset('img/fmclogo1.png') }}" style="width: 50px;" class="d-inline-block align-top" alt="">
                <!--<div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-concierge-bell"></i>
                </div>-->
                <div class="sidebar-brand-text mx-3">FMC</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class=" nav-item ">
                <a class="nav-link" href="{{route('layout.dashboard.index')}}">
                <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <hr class="sidebar-divider my-0 mb-3">

            <!-- Nav Item - Dashboard -->
            <li class=" nav-item ">
                <a class="nav-link" href="{{route('layout.message.message')}}">
                <i class="fas fa-envelope"></i>
                    <span>Messages</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Reservations</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('layout.reservation.pending')}}">Pending Reservations</a>
                        <a class="collapse-item" href="{{route('confirmed.index')}}">Confirmed Reservations</a>
                        <a class="collapse-item" href="{{route('layout.reservation.ongoing')}}">Ongoing Reservations</a>
                        <a class="collapse-item" href="{{route('layout.reservation.finished')}}">Finished Reservations</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-money-check"></i>
                    <span>Payment</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('layout.payment.pendingpayment')}}">Pending Payments</a>
                        <a class="collapse-item" href="{{route('layout.payment.confirmedpayment')}}">Confirmed Payments</a>
                    </div>
                </div>
            </li>


            <li class=" nav-item ">
                <a class="nav-link" href="{{route('layout.reservation.refused')}}">
                <i class="fas fa-recycle"></i>
                    <span>Refused Reservation</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Manage Website
            </div>
            <li class=" nav-item ">
                <a class="nav-link" href="{{route('events.index')}}">
                <i class="fas fa-calendar-alt"></i>
                    <span>Calendar</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <li class=" nav-item ">
                <a class="nav-link" href="{{route('admin-gallery')}}">
                <i class="fas fa-images"></i>
                    <span>Gallery</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <li class=" nav-item ">
                <a class="nav-link" href="{{route('admin-contact')}}">
                <i class="fas fa-address-card"></i>
                    <span>Contact Details</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
