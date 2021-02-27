@extends('layouts.client_user.client-contentLayoutMaster')

@section('title','Client Order Manage')

@section('custom-style')
  <link href="{{asset('client_user/client/css/custom.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="box_general">
    <div class="header_box">
      <h2 class="d-inline-block">Orders List</h2>
      <div class="filter">
        <select name="orderby" class="selectbox">
          <option value="Any status">Any status</option>
          <option value="Completed">Completed</option>
          <option value="Pending">Pending</option>
          <option value="Cancelled">Cancelled</option>
        </select>
      </div>
    </div>
    <div class="list_general">
      {{--<div class="box_general box padding_bottom text-center">
          <div class="row h-100">
            <div class="col-sm-12 my-auto">
              <div class="mx-auto">
                <div class="align-middle">
                  <span class="font-weight-bolder text-dark font-large-30 ">You haven't get any order yet!!</span>
                </div>
              </div>
            </div>
          </div>
        </div>--}}
      <ul>
        <li>
          <figure><img src="{{asset('client_user/client/img/avatar.jpg')}}" alt=""></figure>
          <h4>Dusting <i class="pending">Pending</i></h4>
          <ul class="booking_list">
            <li><strong>Order ID</strong> 784569853215</li>
            <li><strong>Booking date</strong> 8 May 2020</li>
            <li><strong>Booking time</strong> 09.30am</li>
            <li><strong>City</strong> Mahesana</li>
            <li><strong>Address</strong> 20, Madhuvan Complex, Radhanpur Cross road, Mahesana-2</li>
          </ul>
          <p><a href="#viewordermodal" data-toggle="modal" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> View Order</a>
          </p>
          <ul class="buttons">
            <li><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-envelope mr-1"></i>Send Email</a></li>
          </ul>
        </li>
        <li>
          <figure><img src="{{asset('client_user/client/img/avatar.jpg')}}" alt=""></figure>
          <h4>Plumbing <i class="cancel">Cancelled</i></h4>
          <ul class="booking_list">
            <li><strong>Order ID</strong> 784569853215</li>
            <li><strong>Booking date</strong> 8 May 2020</li>
            <li><strong>Booking time</strong> 09.30am</li>
            <li><strong>City</strong> Mahesana</li>
            <li><strong>Address</strong> 20, Madhuvan Complex, Radhanpur Cross road, Mahesana-2</li>
          </ul>
          <p><a href="#viewordermodal" data-toggle="modal" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> View Order</a>
          </p>
          <ul class="buttons">
            <li><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-envelope mr-1"></i>Send Email</a></li>
          </ul>
        </li>
        <li>
          <figure><img src="{{asset('client_user/client/img/avatar.jpg')}}" alt=""></figure>
          <h4>Electrical <i class="approved">Completed</i></h4>
          <ul class="booking_list">
            <li><strong>Order ID</strong> 784569853215</li>
            <li><strong>Booking date</strong> 8 May 2020</li>
            <li><strong>Booking time</strong> 09.30am</li>
            <li><strong>City</strong> Mahesana</li>
            <li><strong>Address</strong> 20, Madhuvan Complex, Radhanpur Cross road, Mahesana-2</li>
          </ul>
          <p><a href="#viewordermodal" data-toggle="modal" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> View Order</a>
          </p>
          <ul class="buttons">
            <li><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-envelope mr-1"></i>Send Email</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /box_general-->
  <nav aria-label="...">
    <ul class="pagination pagination-sm add_bottom_30">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
  <!-- /pagination-->

  <div class="modal fade custom-modal" id="viewordermodal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Order Details</h4>
          <button class="close " type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="font-large-20"><i class="fa fa-fw fa-close"></i></span>
          </button>
        </div>
        <div class="modal-body container-fluid">
          <div class="row">
            <div class="box_general m-4 w-100 pb-4 viewservicespan">
              <div class="header_box version_2">
                <h2><i class="fa fa-file text-pink"></i>Order Info</h2>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span>
                    <label>Order ID: </label><label>784569853215</label>
                  </span>
                </div>
                <div class="col-md-6">
                  <span>
                    <label>Status: </label><label><i class="font-size-small approved">Completed</i></label>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span>Service Name: </span>
                  <span>Dusting</span>
                </div>
                <div class="col-md-6">
                  <span>
                    <label>Booking Date: </label><label>Cleaning</label>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span>
                    <label>Booking Date: </label><label>8 may 2020</label>
                  </span>
                </div>
                <div class="col-md-6">
                  <span>
                    <label>Booking Time: </label><label>09:30 PM</label>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <span><label>Address: </label><label>20, Madhuvan Complex, Radhanpur Cross road, Mahesana-2</label></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span>
                    <label>City: </label><label>Mahesana</label>
                  </span>
                </div>
                <div class="col-md-6">
                  <span>
                    <label>Mobile No.: </label><label>7845123698</label>
                  </span>
                </div>
              </div>
              <div class="header_box version_2 mt-4">
                <h2><i class="fa fa-user text-pink"></i>User Info</h2>
              </div>
              <div class="row">
                <div class="col">
                  <span>
                    <label>Name: </label><label>Maheshbhai Patel</label>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <span>
                    <label>Mobile No.: </label><label>7846325984</label>
                  </span>
                </div>
              </div>
              <div class="header_box version_2 mt-4">
                <h2><i class="fa fa-file text-pink"></i>Client Info</h2>
              </div>
              <div class="row">
                <div class="col-12">
                  <span>
                    <label>Name: </label><label class="ml-3">M.K. Claners</label>
                  </span>
                </div>
                <div class="col-12">
                  <span>
                    <label>Address: </label><label
                      class="ml-3">M.K. Claners,Gopi Complex, Modera Cross Road, Mahesana-2</label>
                  </span>
                </div>
                <div class="col-12">
                  <span>
                    <label>Mobile No.: </label><label class="ml-3">9865745712</label>
                  </span>
                </div>
              </div>
              <div class="header_box version_2 mt-4">
                <h2><i class="fa fa-dollar text-pink"></i>Pricing</h2>
              </div>
              <div class="row">
                <div class="col">
                  <span>
                    <label>Payment Status: </label><label><i class="font-size-small pending">Panding</i></label>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span><label>1: </label><label> 1 BHK home</label></span>
                </div>
                <div class="col-md-6 text-md-right">
                  <span><label>Price: </label><label> 100 ₹</label></span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span><label>2: </label><label> 10 sq feet Garden</label></span>
                </div>
                <div class="col-md-6 text-md-right">
                  <span><label>Price: </label><label> 150 ₹</label></span>
                </div>
              </div>
              <div class="row">
                <div class="col text-md-right border-top">
                  <span><label class="font-weight-bold">Grand Total: </label><label
                      class="font-weight-bold"> 250 ₹</label></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>  
  </div>
@endsection

@section('page-script')
        <script src="{{asset('client_user/client/js/page-scripts/client-order-manage.js')}}"></script>
        <script src="{{ asset('js/scripts/extensions/sweetalert2.js')}}"></script>
@endsection
