
@extends('layout\frontend\app')
 
 
 
@section('title', 'Camer - Home')
 
 
 
@section('content')	
<main class="account-section p-t-100 p-b-100">	
<section class="tg-may-account-wrapp tg clearfix">
        <div class="inner">
            <div class="tg-account">

                <!-- Accont banner start -->
                <div class="account-banner">
                    <div class="inner-banner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 detail">
                                    <div class="inner">
                                        <h1 class="page-title">My Account</h1>
                                        <h3 class="user-name">Hello Yash!</h3>									
                                    </div>
                                </div>
                                <!-- Column end -->
                                <div class="col-md-4 profile">
                                    <div class="profile">
                                        <span class="image">
                                        <img src="https://res.cloudinary.com/templategalaxy/image/upload/v1631257421/codepen-my-account/images/profile_pdpo9w.png" alt="Yash">
                                    </span>
                                    </div>
                                </div>
                                <!-- Column end -->
                            </div>
                            <!-- Row end -->

                            <!-- Navbar Start -->
                            <div class="nav-area">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dashboard-link" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="my-order" data-toggle="tab" href="#my-orders" role="tab" aria-controls="my-orders" aria-selected="false"><i class="fas fa-file-invoice"></i> <span>Orders</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="my-address" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false"><i class="fas fa-map-marker-alt"></i> <span>Address</span></a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="my-address" data-toggle="tab" href="#wishlist" role="tab" aria-controls="address" aria-selected="false"><i class="fa-solid fa-heart"></i> <span>Wishlist</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-detail" data-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false"><i class="fas fa-user-alt"></i> <span>Account Details</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="logout" data-toggle="tab" href="#logout" role="tab" aria-controls="logout" aria-selected="false"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </div>
                </div>
                <!-- Banner end   -->

                <!-- Tabs Content start -->
                <div class="tabs tg-tabs-content-wrapp">
                    <div class="inner">
                        <div class="container">
                            <div class="inner">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-link">
                                        <div class="my-account-dashboard">
										<div id="root">
  <div class="container pt-5">
    <div class="row align-items-stretch">
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Portfolio Balance</h4><span class="hind-font caption-12 c-dashboardInfo__count">€10,500</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Rental income</h4><span class="hind-font caption-12 c-dashboardInfo__count">€500</span><span
            class="hind-font caption-12 c-dashboardInfo__subInfo">Last month: €30</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Available funds</h4><span class="hind-font caption-12 c-dashboardInfo__count">€5000</span>
        </div>
      </div>
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Rental return</h4><span class="hind-font caption-12 c-dashboardInfo__count">6,40%</span>
        </div>
      </div>
    </div>
  </div>
</div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="my-orders" role="tabpanel" aria-labelledby="my-order">
                                        <table id="my-orders-table" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>#8083</td>
                                                    <td>Sep 9, 2021</td>
                                                    <td>Completed</td>
                                                    <td>$350</td>
                                                    <td class="action"><a href="#" class="view-order">View Order</a></td>
                                                </tr>

                                                <tr>
                                                    <td>#8283</td>
                                                    <td>Sep 8, 2021</td>
                                                    <td>Pending</td>
                                                    <td>$190</td>
                                                    <td class="action"><a href="#" class="view-order">View Order</a></td>
                                                </tr>

                                                <tr>
                                                    <td>#8483</td>
                                                    <td>Sep 7, 2021</td>
                                                    <td>Completed</td>
                                                    <td>$399</td>
                                                    <td class="action"><a href="#" class="view-order">View Order</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="my-address">
                                        <div class="address-form">
                                            <div class="inner">
                                                <form class="tg-form" action="" method="">

                                                    <div class="form-group">
                                                        <label for="inputAddress">Address</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Address 2</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputCity">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">State</label>
                                                            <select id="inputState" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option>...</option>
                                                          </select>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="inputZip">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-detail">
                                        <div class="account-detail-form">
                                            <div class="inner">
                                                <form class="tg-form" action="" method="">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputfname">First Name</label>
                                                            <input type="text" class="form-control" id="inputfname" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputlname">Last Name</label>
                                                            <input type="text" class="form-control" id="inputlname" placeholder="Last Name">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="inputdname">Display Name</label>
                                                            <input type="text" class="form-control" id="inputdname" placeholder="Display Name">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="inputEmail4">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="inputdob">Birthdate</label>
                                                            <input type="text" class="form-control" id="inputdob" placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div>


                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection