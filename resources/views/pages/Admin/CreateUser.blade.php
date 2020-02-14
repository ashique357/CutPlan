@extends('layouts.main')
@section('main_page')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
          This week
        </button>
      </div>
    </div>

<form action="/user/create" method="post">
    @csrf
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="you@email.com">
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password">
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>
    <div class="mb-3">
        <label for="Department">Department</label>
        <select class="custom-select d-block w-100" name="role" id="state" required="">
            <option>Choose...</option>
            <option value="2">Cutting</option>
            <option value="3">IE</option>
        </select>
        <div class="invalid-feedback">
            Please provide a valid option.
        </div>
    </div>
    
    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
</form>
</main>
@endsection
