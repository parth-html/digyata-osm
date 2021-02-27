
@extends('layouts/contentLayoutMaster')

@section('title', 'Service Catalog')

@section('vendor-style')
        {{-- vendor files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')) }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/service-catalog.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/validation/form-validation.css')) }}">
@endsection

@section('content')
{{-- Data list view starts --}}
<section id="data-list-view" class="data-list-view-header">
    <div class="action-btns d-none">
      <div class="btn-dropdown mr-1 mb-1">
        <div class="btn-group dropdown actions-dropodown">
          <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Actions
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item action-delete-group"><i class="feather icon-trash"></i>Delete</a>
            <a class="dropdown-item service-enable-group"><i class="feather icon-archive"></i>Enable</a>
            <a class="dropdown-item service-disable-group"><i class="feather icon-minus-circle"></i>Disable</a>
          </div>
        </div>
      </div>
    </div>

    {{-- DataTable starts --}}
    <div class="table-responsive">
      <table class="table data-list-view" id="ServiceCatlogTable">
        <thead>
          <tr>
            <th></th>
            <th>TITLE</th>
            <th>CATEGORY</th>
            <th>PRICE RANGE</th>
            <th>STATUS</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
              <td></td>
              <td class="product-name">{{$service->serviceName}}</td>
            <td class="product-category">{{$service->serviceCategory}}</td>
            <td class="product-price">{{$service->serviceMinPrice}} - {{$service->serviceMaxPrice}}</td>
              <td>
                <div class="service-status chip {{(($service->serviceStatus)?"chip-success":"chip-danger")}}" data-id="{{$service->id}}">
                  <div class="chip-body">
                  <div class="chip-text">{{(($service->serviceStatus)?"Active":"Inactive")}}</div>
                  </div>
                </div>
              </td>
              <td class="product-action">
              <span class="action-edit" data-id="{{$service->id}}" data-service="{{$service->serviceName}}" data-category="{{$service->serviceCategory}}" data-desc="{{$service->serviceDescription}}" data-min="{{$service->serviceMinPrice}}" data-max="{{$service->serviceMaxPrice}}"><i class="feather icon-edit"></i></span>
              <span class="action-delete" data-id="{{$service->id}}"><i class="feather icon-trash"></i></span>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    {{-- DataTable ends --}}

    {{-- add new sidebar starts --}}
    <div class="add-new-data-sidebar">
      <div class="overlay-bg"></div>
      <div class="add-new-data">
      <form action="{{route('service-store')}}" id="addServiceForm" method="POST" novalidate>
          @csrf
          <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
            <div>
              <h4 class="text-uppercase">Add New Service</h4>
            </div>
            <div class="hide-data-sidebar">
              <i class="feather icon-x"></i>
            </div>
          </div>
          <div class="data-items pb-3">
            <div class="data-fields px-2 mt-1">
              <div class="row">
                <div class="col-sm-12 data-field-col form-group">
                  <label for="service-name">Service Name</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="serviceName" id="service-name" placeholder="add service name" data-validation-required-message="This field is required" aria-invalid="false">
                  </div>
                </div>
                <div class="col-sm-12 data-field-col Controls">
                  <label for="service-category"> Category </label>
                  <select class="form-control" name="serviceCategory" id="service-category" data-validation-required-message="This field is required" aria-invalid="false">
                    <option value="Cleaning">Cleaning</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Fitness">Fitness</option>
                    <option value="Finance">Finance</option>
                    <option value="HealthCare">HealthCare</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Events">Events</option>
                    <option value="Transportation">Transportation</option>
                  </select>
                </div>
                <div class="col-sm-12 data-field-col form-group">
                  <label for="service-desc">Description</label>
                  <div class="controls">
                    <textarea class="new-todo-item-desc form-control" id="service-desc" name="serviceDescription" rows="3" placeholder="Add Service description"  data-validation-required-message="This field is required" aria-invalid="false"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 data-field-col">
                  <label>Price Range</label>
                  <div class="row">
                    <div class="col-sm-6 data-field-col form-group">
                      <div class="controls">
                        <input type="text" id="service-min" class="form-control" name="serviceMinPrice" placeholder="Min Price" data-validation-containsnumber-regex="^[0-9]+(\.[0-9]{1,2})?$" data-validation-required-message="This field is required" data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                      </div>
                    </div>
                    <div id="div-service-max" class="col-sm-6 data-field-col form-group">
                      <div class="controls">
                          <input type="text" id="service-max" class="form-control" name="serviceMaxPrice" placeholder="Max Price" data-validation-containsnumber-regex="^[0-9]+(\.[0-9]{1,2})?$" data-validation-required-message="This field is required"  data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
            <div class="add-data-btn">
              <button type="submit" id="service-submit" data-action="insert" class="btn btn-primary">Add Service</button>
            </div>
            <div class="cancel-data-btn">
              <input type="reset" class="btn btn-outline-danger" value="Cancel">
            </div>
          </div>
        </form>
      </div>
    </div>
    {{-- add new sidebar ends --}}
  </section>
  {{-- Data list view end --}}
@endsection
@section('vendor-script')
{{-- vendor js files --}}
        <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.select.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/forms/validation/form-validation.js')) }}"></script>
        <script src="{{ asset(mix('js/scripts/ui/service-catalog.js')) }}"></script>
        <script src="{{ asset('js/scripts/extensions/sweetalert2.js')}}"></script>

@endsection

