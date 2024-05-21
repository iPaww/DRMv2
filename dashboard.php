<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <title>DRM Dashboard</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .content-wrapper {
        padding: 20px;
      }
      .info-box {
        padding: 20px;
        background: #f9f9f9;
        border: 1px solid #ddd;
        margin-bottom: 20px;
        border-radius: 5px;
      }
    </style>
</head>
<body>
    <!--Header-->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg bg-success text-white border d-flex align-items-center justify-content-center">
                <a class="navbar-brand ml-3">
                    <img src="CVSU_LOGO.png" alt="logo" style="width: 100px; height: 100px;">
                </a>
                <div>
                    <h3 class="text-center">Department of Computer Study</h3>
                    <p class="text-center">Cavite State University CCAT-Campus</p>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!--SideBar-->
    
    <nav class="navbar bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <a class="navbar-brand text-white">
            <img src="image/DRM.jpg" alt="logo" style="width: 100px; height: 100px;">
        </a>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link text-white" data-toggle="pill" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-toggle="pill" href="profile.html">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-toggle="pill" href="#">Announcement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-toggle="pill" href="#">Event & Aciivity</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-toggle="pill" href="#">Account Security</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-toggle="pill" href="#">Log Out</a>
            </li>
        </ul>
    </nav>



    <!--<div class="container mt-3">
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Notice Board</button>
        <div id="demo" class="collapse">
            <div class="col-lg-4">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        DCIT 21 LAB (Renato Bautista)
                      </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                       WALANG PASOK, MAG SASARA NAPO AKO SCHOOL NATIN. THANK YOU!
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                      ITEC 75 LEC (Micco Amorganda)
                    </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        UNO NAPO LAHAT NG STUDENTS SA SECTION A. TARA SHOTSSS!
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        DCIT 55 LAB (Darwin Paul Charles Prime)
                      </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        OPEN NA ARAT MAG ML!!!
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>



    <div class="col-lg-5 mt-3 mb-1">
        <button type="button" class="btn btn-danger">
          Notifications <span class="badge badge-light">7</span>
        </button>
      </div>
      
      <div class="col-lg-4">
        <div id="accordion">
          <div class="card">
            <div class="card-header bg-secondary">
              <a class="card-link text-white" data-toggle="collapse" href="#collapseOne">
                DCIT 21 LAB (Renato Bautista)
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
               WALANG PASOK, MAG SASARA NAPO AKO SCHOOL NATIN. THANK YOU!
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-secondary">
              <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseTwo">
              ITEC 75 LEC (Micco Amorganda)
            </a>
            </div>
            <div id="collapseTwo" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-secondary">
              <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseThree">
                DCIT 55 LAB (Darwin Paul Charles Prime)
              </a>
            </div>
            <div id="collapseThree" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                OPEN NA ARAT MAG ML!!!
              </div>
            </div>
          </div>
        </div>
      </div>
      
        <div class="col-lg-8 mt-3">
            <div class="card-columns">
                <div class="card bg-success">
                    <a class="navbar-brand ml-3 mt-2 d-flex align-items-center justify-content-center">
                        <img src="student.png" alt="logo" style="width: 50px; height: 50px;">
                    </a>
                    <div class="card-body text-center pt-1">
                        <p class="card-text">Number of Students: <strong>250</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card-columns">
                <div class="card bg-danger">
                    <a class="navbar-brand ml-3 mt-2 d-flex align-items-center justify-content-center">
                        <img src="teacher.png" alt="logo" style="width: 50px; height: 50px;">
                    </a>
                    <div class="card-body text-center pt-1">
                        <p class="card-text">Number of Teachers: <strong>20</strong></p>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="container content-wrapper">
          <div class="row">
            <div class="col-md-3 pt-3">
                <button type="button" class="btn btn-danger">
                  Notifications <span class="badge badge-light">7</span>
                </button>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header bg-secondary">
                      <a class="card-link text-white" data-toggle="collapse" href="#collapseOne">
                        DCIT 21 LAB (Renato Bautista)
                      </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                       WALANG PASOK, MAG SASARA NAPO AKO SCHOOL NATIN. THANK YOU!
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header bg-secondary">
                      <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseTwo">
                      ITEC 75 LEC (Micco Amorganda)
                    </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header bg-secondary">
                      <a class="collapsed card-link text-white" data-toggle="collapse" href="#collapseThree">
                        DCIT 55 LAB (Darwin Paul Charles Prime)
                      </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        OPEN NA ARAT MAG ML!!!
                      </div>
                    </div>
                  </div>
                </div>
                <div class="info-box bg-primary mt-3">
                  <a class="navbar-brand ml-3 mt-2 d-flex align-items-center justify-content-center">
                    <img src="student.png" alt="logo" style="width: 50px; height: 50px;">
                  </a>
                  <div class="card-body text-center pt-1">
                      <p class="card-text">Number of Students: <strong>250</strong></p>
                  </div>
                </div>
                <div class="info-box bg-danger mt-3 mb-3">
                  <a class="navbar-brand ml-3 mt-2 d-flex align-items-center justify-content-center">
                    <img src="teacher.png" alt="logo" style="width: 50px; height: 50px;">
                  </a>
                  <div class="card-body text-center pt-1">
                      <p class="card-text">Number of Teachers: <strong>20</strong></p>
                  </div>
                </div>
            </div> 
            <div class="col-md-9 mt-3 border">
              <div id="calendar"></div>
            </div> 
          </div>
        </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        // Options and events here
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: moment().format('YYYY-MM-DD'),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          {
            title: 'Meeting',
            start: moment().subtract(1, 'days').format('YYYY-MM-DD')
          },
          {
            title: 'Class',
            start: moment().format('YYYY-MM-DD'),
            end: moment().add(1, 'days').format('YYYY-MM-DD')
          }
        ]
      });
    });
  </script>
    


</body>
</html>