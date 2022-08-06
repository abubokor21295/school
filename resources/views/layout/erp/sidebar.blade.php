<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: SlateGrey;">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{asset('img/school.jpg')}}">
          </div>
          <div class="user-name">
              MotherHood Public School
          </div>
          <div class="user-designation">
              Educational Institution
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/home')}}">
              <i class="icon-monitor menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#admission" aria-expanded="false" aria-controls="admission">
              <i class="icon-marquee-plus menu-icon"></i>
              <span class="menu-title">Admission</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="admission">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admissions.create')}}">New Admission</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/admissions')}}">Admission Manage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#payment" aria-expanded="false" aria-controls="payment">
              <i class="icon-file-add menu-icon"></i>
              <span class="menu-title">Payment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payment">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/accounts')}}">Accounts</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/payments')}}">Payment Manage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Exam" aria-expanded="false" aria-controls="Exam">
              <i class="icon-box  menu-icon"></i>
              <span class="menu-title">Exams</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Exam">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/tries')}}">Admitcard</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/exams')}}">Exam Routins</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/results')}}">Results</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Class" aria-expanded="false" aria-controls="Class">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Classs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Class">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/clases')}}">Classes</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/routins')}}">Class Routin</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/subjects')}}">Subjects</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/rooms')}}">Rooms</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/attendences')}}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Attendence</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/teachers')}}">
              <i class="icon-star menu-icon"></i>
              <span class="menu-title">Teachers</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/students')}}">
              <i class="icon-sun menu-icon"></i>
              <span class="menu-title">Students</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Inventory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/users')}}"> User </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Role </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/resultTypes')}}">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">try</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('signout')}}">
              <i class="icon-power menu-icon"></i>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
        </ul>
      </nav>