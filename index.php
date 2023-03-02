<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/jpg" href="./utilities/images/admin/ADMIN.ico" ; />
  <!-- start: Icons -->
  <script src="https://kit.fontawesome.com/71692e25c7.js" crossorigin="anonymous"></script>
  <!-- start: Icons -->
  <!-- start: CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../utilities/styles/style.css" />

  <!-- end: CSS -->
  <title>Admin | Dashboard</title>
</head>

<body>
  <!-- ? SIDEBAR | start -->
  <?php
  include("./php/layout/sidebar.php");
  ?>
  <!--? SIDEBAR | end -->

  <!--? MAIN | start  -->
  <div class="main-dashboard-page">
    <?php
    include("./php/layout/navbar.php");
    ?>

    <div class="container">
      <div class="row news text-white">
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card card-custom h-100 w-100" style="width: 18rem">
            <div class="card-body bg-primary.bg-gradient">
              <h5 class="card-title">Products Sold</h5>
              <h5 class="card-subtitle mb-2">7863</h5>
              <p class="card-text text-white">Jan - March 2023</p>
              <i class="fa-solid fa-cart-shopping fa-2xl"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card card-custom h-100 w-100" style="width: 18rem">
            <div class="card-body">
              <h5 class="card-title">Net Profit</h5>
              <h5 class="card-subtitle mb-2">$ 12093</h5>
              <p class="card-text text-white">Jan - March 2023</p>
              <i class="fa-solid fa-chart-line fa-2xl"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card card-custom h-100 w-100" style="width: 18rem">
            <div class="card-body">
              <h5 class="card-title">New Customers</h5>
              <h5 class="card-subtitle mb-2">1424</h5>
              <p class="card-text text-white">Jan - March 2023</p>
              <i class="fa-solid fa-users fa-2xl"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card card-custom h-100 w-100" style="width: 18rem">
            <div class="card-body">
              <h5 class="card-title">Customer Satisfaction</h5>
              <h5 class="card-subtitle mb-2">92 %</h5>
              <p class="card-text text-white">Jan - March 2023</p>
              <i class="fa-solid fa-hand-holding-heart fa-2xl"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="row product-sales mb-4">
        <div class="col">
          <div class="card graph text-white w-100 h-100">
            <div class="card-body pb-0 d-flex justify-content-between rounded-top" style="background-color: rgb(10, 16, 22)">
              <div>
                <h4 class="mb-1">Product Sales</h4>
                <p>Total Earnings of the Month</p>
                <h3 class="m-0">$ 12 123</h3>
              </div>
              <div>
                <ul>
                  <li class="d-inline-block mr-3">
                    <a href="" class="text-white text-decoration-none">Day</a>
                  </li>
                  <li class="d-inline-block mr-3">
                    <a href="" class="text-white text-decoration-none">Week</a>
                  </li>
                  <li class="d-inline-block">
                    <a href="" class="text-white text-decoration-none">Month</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="graph-picture rounded-bottom" style="height: 500px; background-color: rgb(10, 16, 22)">
              Graph
            </div>
          </div>
        </div>
      </div>

      <div class="row company-team text-white mb-4">
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card w-100 h-100 pt-md-3">
            <div class="card-body pt-4">
              <div class="text-center">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogodix.com%2Flogo%2F1070633.png&f=1&nofb=1&ipt=fd979d934b20a304e507e74315ee3d3056e756ccd8b5d79262711ff33e3f37ff&ipo=images" alt="" />
                <h5>Ana Liem</h5>
                <p>Senior Manager</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card w-100 h-100 pt-md-3">
            <div class="card-body pt-4">
              <div class="text-center">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogodix.com%2Flogo%2F1070633.png&f=1&nofb=1&ipt=fd979d934b20a304e507e74315ee3d3056e756ccd8b5d79262711ff33e3f37ff&ipo=images" alt="" />
                <h5>Ana Liem</h5>
                <p>Senior Manager</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card w-100 h-100">
            <div class="card-body pt-4">
              <div class="text-center">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogodix.com%2Flogo%2F1070633.png&f=1&nofb=1&ipt=fd979d934b20a304e507e74315ee3d3056e756ccd8b5d79262711ff33e3f37ff&ipo=images" alt="" />
                <h5>Ana Liem</h5>
                <p>Senior Manager</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4 d-flex justify-content-center">
          <div class="card w-100 h-100 pt-md-3">
            <div class="card-body pt-4">
              <div class="text-center">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogodix.com%2Flogo%2F1070633.png&f=1&nofb=1&ipt=fd979d934b20a304e507e74315ee3d3056e756ccd8b5d79262711ff33e3f37ff&ipo=images" alt="" />
                <h5>Ana Liem</h5>
                <p>Senior Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row customers-activity mb-4">
        <div class="col-lg-12">
          <div class="card card-table-border-none recent-orders" id="recent-orders">
            <div class="card-header justify-content-between">
              <h2 class="ml-5 mt-4 text-white">Recent Orders</h2>
              <div class="date-range-report">
                <span></span>
              </div>
            </div>
            <div class="card-body pt-0 pb-5">
              <table class="table card-table table-responsive table-responsive-large px-5" style="width: 100%">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>
                    <th class="d-none d-lg-table-cell">Units</th>
                    <th class="d-none d-lg-table-cell">Order Date</th>
                    <th class="d-none d-lg-table-cell">Order Cost</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>24541</td>
                    <td>
                      <a class="text-decoration-none" href="">
                        Coach Swagger</a>
                    </td>
                    <td class="d-none d-lg-table-cell">1 Unit</td>
                    <td class="d-none d-lg-table-cell">Oct 20, 2018</td>
                    <td class="d-none d-lg-table-cell">$230</td>
                    <td>
                      <span class="badge badge-success">Completed</span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a href="#">View</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>24541</td>
                    <td>
                      <a class="text-decoration-none" href="">
                        Toddler Shoes, Gucci Watch</a>
                    </td>
                    <td class="d-none d-lg-table-cell">2 Units</td>
                    <td class="d-none d-lg-table-cell">Nov 15, 2018</td>
                    <td class="d-none d-lg-table-cell">$550</td>
                    <td>
                      <span class="badge badge-warning">Delayed</span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                          <li class="dropdown-item">
                            <a href="#">View</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>24541</td>
                    <td>
                      <a class="text-decoration-none" href="">
                        Hat Black Suits</a>
                    </td>
                    <td class="d-none d-lg-table-cell">1 Unit</td>
                    <td class="d-none d-lg-table-cell">Nov 18, 2018</td>
                    <td class="d-none d-lg-table-cell">$325</td>
                    <td>
                      <span class="badge badge-warning">On Hold</span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                          <li class="dropdown-item">
                            <a href="#">View</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>24541</td>
                    <td>
                      <a class="text-decoration-none" href="">
                        Backpack Gents, Swimming Cap Slin</a>
                    </td>
                    <td class="d-none d-lg-table-cell">5 Units</td>
                    <td class="d-none d-lg-table-cell">Dec 13, 2018</td>
                    <td class="d-none d-lg-table-cell">$200</td>
                    <td>
                      <span class="badge badge-success">Completed</span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                          <li class="dropdown-item">
                            <a href="#">View</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>24541</td>
                    <td>
                      <a class="text-decoration-none" href="">
                        Speed 500 Ignite</a>
                    </td>
                    <td class="d-none d-lg-table-cell">1 Unit</td>
                    <td class="d-none d-lg-table-cell">Dec 23, 2018</td>
                    <td class="d-none d-lg-table-cell">$150</td>
                    <td>
                      <span class="badge badge-danger">Cancelled</span>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                          <li class="dropdown-item">
                            <a href="#">View</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row links mb-4">
        <div class="col-lg-3 col-md-6 my-4">
          <div class="card w-100">
            <div class="social-graph-wrapper widget-facebook">
              <span class="s-icon"><i class="fa fa-facebook"></i></span>
            </div>
            <div class="row">
              <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">89k</h4>
                  <p class="m-0">Friends</p>
                </div>
              </div>
              <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">119k</h4>
                  <p class="m-0">Followers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4">
          <div class="card w-100">
            <div class="social-graph-wrapper widget-linkedin">
              <span class="s-icon"><i class="fa fa-linkedin"></i></span>
            </div>
            <div class="row">
              <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">89k</h4>
                  <p class="m-0">Friends</p>
                </div>
              </div>
              <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">119k</h4>
                  <p class="m-0">Followers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4">
          <div class="card w-100">
            <div class="social-graph-wrapper widget-google">
              <span class="s-icon"><i class="fa fa-youtube"></i></span>
            </div>
            <div class="row">
              <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">89k</h4>
                  <p class="m-0">Friends</p>
                </div>
              </div>
              <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">119k</h4>
                  <p class="m-0">Followers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 my-4">
          <div class="card w-100">
            <div class="social-graph-wrapper widget-twitter">
              <span class="s-icon"><i class="fa fa-twitter"></i></span>
            </div>
            <div class="row">
              <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">89k</h4>
                  <p class="m-0">Friends</p>
                </div>
              </div>
              <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                  <h4 class="m-1">119k</h4>
                  <p class="m-0">Followers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="py-3">
        <div class="container text-center">
          <p class="my-0">&copy; 2023 Admin Panel. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </div>
  <!--? MAIN | end  -->

  <!-- start: JS -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>

  <script src="../utilities/js/index.js"></script>
  <script src="./utilities/js/sidepanel.js"></script>
  <script src="./utilities/js/settings.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- end: JS -->
</body>

</html>