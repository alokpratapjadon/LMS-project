<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"href="style.css"/>
    <title>Document</title>
    <head>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    
</head>
<body>
    <!--top navbar start-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
        <!-- navbar- trigger start -->
          <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars"></i>
          </button>
          <!-- navbar trigger end -->
          <a class="navbar-brand fw-bold text-uppercase me-auto href="#">GLA LIBRARY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex ms-auto " role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-secondary text-white" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
            </form>
            <ul class="navbar-nav me-1 mb-lg-0">
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSOHQ9U78Xn1ioaVnrxQdO7NqlWA60QQccpg&s" class="user-icon me-1"> Action
                  </a> 
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
      </nav>
    <!--top navbar end-->

    <!--off-canvas starts-->    
    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-body ">
        <div class="dropdown mt-0">
          <ul class="navbar-nav">
            <li class="nav-item">
           <div class="text-secondary small text-uppercase fw-bold ">core</div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-gauge me-2"></i> Dashboard</a>
            </li>
            
           <li class="nav-item my-0"> 
            <hr/>
           </li>
          <li class="nav-item">
             <div class="text-secondary small text-uppercase fw-bold ">
            inventory
           </div>
          </li>
            <li class="nav-item">
              <a 
              class="nav-link sidebar-link"
              data-bs-toggle="collapse"
              href="#collapseExample"
              role="button" 
               aria-expanded="false"
               aria-controls="collapseExample"
               >
                <i class="fas fa-book me-2"></i>
                Books Management
              <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
              </a>
              <div class="collapse" id="collapseExample">
              <ul class="navbar-nav ps-3">
              <li>
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-plus me-1"></i>
                  Add new</a>
              </li>
              <li>
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-list me-1"></i>
                  Manage all</a>
              </li>
              <li>
                <a href="#" class="nav-link">Addnew</a>
              </li>
            </ul>
          </div>
            </li>
            <li class="nav-item">
              <a 
              class="nav-link sidebar-link"
              data-bs-toggle="collapse"
              href="#booksMgmt"
              role="button" 
               aria-expanded="false"
               aria-controls="booksMgmt"
               >
                <i class="fas fa-user me-2"></i>
                Students
              <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
              </a>
              <div class="collapse" id="booksMgmt">
              <ul class="navbar-nav ps-3">
              <li>
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-plus me-1"></i>
                  Add new</a>
              </li>
              <li>
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-list me-1"></i>
                  Manage all</a>
              </li>
              <li>
                <a href="#" class="nav-link">Addnew</a>
              </li>
            </ul>
          </div>
            </li>
            <li class="nav-item my-0"> 
              <hr/>
             </li>
            <li class="nav-item">
              <div class="text-secondary small text-uppercase fw-bold ">
             business
            </div>
           </li>

           <li class="nav-item">
            <a 
            class="nav-link sidebar-link"
            data-bs-toggle="collapse"
            href="#booksloanMgmt"
            role="button" 
             aria-expanded="false"
             aria-controls="booksloanMgmt"
             >
             <i class="fa-solid fa-book-open-reader me-2"></i>
              Books Loan
            <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
            </a>
            <div class="collapse" id="booksloanMgmt">
            <ul class="navbar-nav ps-3">
            <li>
              <a href="#" class="nav-link">
                <i class="fa-solid fa-plus me-1"></i>
                Add new</a>
            </li>
            <li>
              <a href="#" class="nav-link">
                <i class="fa-solid fa-list me-1"></i>
                Manage all</a>
            </li>
            <li>
              <a href="#" class="nav-link">Addnew</a>
            </li>
          </ul>
        </div>
          </li>
          <li class="nav-item">
            <a 
            class="nav-link sidebar-link"
            data-bs-toggle="collapse"
            href="#subs"
            role="button" 
             aria-expanded="false"
             aria-controls="subs"
             >
             <i class="fa-solid fa-dollar-sign me-2"></i>
              Subscription
            <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
            </a>
            <div class="collapse" id="subs">
            <ul class="navbar-nav ps-3">
            <li>
              <a href="#" class="nav-link">
                <i class="fa-solid fa-plus me-1"></i>
                plans</a>
            </li>
            <li>
              <a href="#" class="nav-link">
                <i class="fa-solid fa-list me-1"></i>
                purchase history</a>
            </li>
            <li>
              <a href="#" class="nav-link">Addnew</a>
            </li>
          </ul>
        </div>
 
         <li class="nav-item my-0"> 
          <hr/>
         </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <i class="fa-solid fa-right-from-bracket me-2"></i>
             Logout</a>
        </li>

          </ul>
        </div>
      </div>
      
      </div>
    <!--off-canvas end -->

    <!-- Main containt start -->
     <main class="mt-1 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4 class="fw-bold text-uppercase">Dashboard</h4>
            <p>Statistics of the system!</p>
          </div>
<!-- cards -->
<div class="col-md-3">
  <div class="card">
    <div class="card-body text-center">
      <h6 class="card-title text-uppercase text-muted">Total books</h6>
      <h1>180</h1>
      <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">View more</a></p>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card">
    <div class="card-body text-center">
      <h6 class="card-title text-uppercase text-muted">Total Students</h6>
      <h1>2245</h1>
      <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">View more</a></p>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card">
    <div class="card-body text-center">
      <h6 class="card-title text-uppercase text-muted">Total Books Loan</h6>
      <h1>168</h1>
      <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">View more</a></p>
    </div>
  </div>
</div>

<div class="col-md-3">
  <div class="card">
    <div class="card-body text-center">
      <h6 class="card-title text-uppercase text-muted">Total Revenue</h6>
      <h1>1.7 Lakh</h1>
      <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">View more</a></p>
    </div>
  </div>
</div>
        </div>
        <!-- cards end -->

        <!-- tabs start -->
         <div class="row mt-5">
          <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase active" id="new-student" data-bs-toggle="tab" data-bs-target="#new-student-pane" type="button" role="tab" aria-controls="new-student-pane" aria-selected="true">New student</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase" id="recent-loans" data-bs-toggle="tab" data-bs-target="#recent-loans-pane" type="button" role="tab" aria-controls="recent-loans-pane" aria-selected="false">Recent Loans</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link text-uppercase" id="recent-subscription" data-bs-toggle="tab" data-bs-target="#recent-subscription-pane" type="button" role="tab" aria-controls="recent-subscription-pane" aria-selected="false">Recent Subscription</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">

              <!-- new student table start -->
              <div class="tab-pane fade show active" id="new-student-pane" role="tabpanel" aria-labelledby="new-student" tabindex="0">
              
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Registered Date</th>
                    <th scope="col">Phone no.</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Riya</td>
                    <td>121236753</td>
                    <td>12/02/2024 </td>
                    <td>9102102024</td>
                    <td>
                      <span class="badge text-bg-success">Active</span></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Sakshi</td>
                    <td>121236943</td>
                    <td>14/12/2023</td>
                    <td>8919102024</td>
                    <td>
                      <span class="badge text-bg-secondary">Inactive</span></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Alok</td>
                    <td>112123237</td>
                    <td>09/10/2023</td>
                    <td>9710102024</td>
                    <td>
                      <span class="badge text-bg-success">Active</span></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Arunesh</td>
                    <td>121239983</td>
                    <td>22/02/2024</td>
                    <td>9312102024</td>
                    <td>
                      <span class="badge text-bg-success">Active</span></td>
                  </tr>
                </tbody>
              </table>
              </div>
              <!-- new student table end -->

               <!-- recent loan table start -->
              <div class="tab-pane fade" id="recent-loans-pane" role="tabpanel" aria-labelledby="recent-loans" tabindex="0">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Laon Date</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Psychology of Money</td>
                        <td>Riya</td>
                        <td>10/10/2024</td>
                        <td>02/10/2024</td>
                        <td>
                          <span class="badge text-bg-warning">Deu</span></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Alice in Wonderland</td>
                        <td>Sakshi</td>
                        <td>12/10/2024</td>
                        <td>19/10/2024</td>
                        <td>
                          <span class="badge text-bg-success">Return</span></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>David Copperfield</td>
                        <td>Alok</td>
                        <td>12/10/2024</td>
                        <td>10/10/2024</td>
                        <td>
                          <span class="badge text-bg-warning">Deu</span></td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>French Revolution</td>
                        <td>Arunesh</td>
                        <td>08/10/2024</td>
                        <td>12/10/2024</td>
                        <td>
                          <span class="badge text-bg-success">Return</span></td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <!-- recent loan table end -->
               <!-- recent subscribtion star -->
              <div class="tab-pane fade" id="recent-subscription-pane" role="tabpanel" aria-labelledby="recent-subscription" tabindex="0">
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Student Name</th>
                      <th scope="col">Member Ship</th>
                      <th scope="col">Starting Date</th>
                      <th>End Dte</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Riya</td>
                      <td>Premium</td>
                      <td>10/10/2024</td>
                      <td>02/10/2024</td>
                      <td>
                        <span class="badge text-bg-danger">End</span></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Sakshi</td>
                      <td>Gold</td>
                      <td>12/10/2024</td>
                      <td>19/10/2024</td>
                      <td>
                        <span class="badge text-bg-success">Active</span></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Alok</td>
                      <td>Premium</td>
                      <td>12/10/2024</td>
                      <td>10/10/2024</td>
                      <td>
                        <span class="badge text-bg-danger">End</span></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Arunesh</td>
                      <td>Silver</td>
                      <td>08/10/2024</td>
                      <td>12/10/2024</td>
                      <td>
                        <span class="badge text-bg-success">Active</span></td>
                    </tr>
                  </tbody>
                </table>
            </div>
              <!--  recent subscribtion end -->
                
             </div>
          </div>
         </div>
      </div>
     </main>
     <!-- Main containt end -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>