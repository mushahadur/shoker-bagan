
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('user.orderList')}}">
              <i class="bi bi-circle"></i><span>Order List</span>
            </a>
          </li>
          <li>
            <a href="{{route('user.orderHistory')}}">
              <i class="bi bi-circle"></i><span>Order History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Order Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-customer-service-2-line"></i><span>Consultants</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('user.contactConsultants')}}">
              <i class="bi bi-circle"></i><span>Contact</span>
            </a>
          </li>
          <li>
            <a href="{{route('user.contactConsultantsHistory')}}">
              <i class="bi bi-circle"></i><span>Contact History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Consultants Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.profile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('user.faq')}}">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->