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

<form action="" method="">
    @csrf
    <table class="table table-bordered" id="table_id">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Table No</th>
          <th scope="col">Buyer</th>
          <th scope="col">Style</th>
          <th scope="col">Cutting Part</th>
          <th scope="col">Spreading Qty</th>
          <th scope="col">Cutting Qty</th>
          <th scope="col">Status</th>
          <th scope="col">Remaining Balance</th>
        </tr>
        <tbody>
          <tr>
            <div>
            <th name="add_row" rowspan="1" scope="row">1</th>
            <td rowspan="1"><input type="name" name="table" class="form-control" id="table" placeholder=""></td>
            <div id="row_id">
              <td><input type="name" name="buyer" class="form-control" id="buyer" placeholder=""></td>
            <td><input type="name" name="style" class="form-control" id="style" placeholder=""></td>
            <td><input type="name" name="cutting_part" class="form-control" id="cutting_part" placeholder=""></td>
            <td><input type="name" name="spreading_qty" class="form-control" id="spreading_qty" placeholder=""></td>
            <td><input type="name" name="cutting_qty" class="form-control" id="cutting_qty" placeholder=""></td>
            <td><input type="name" name="status" class="form-control" id="status" placeholder=""></td>
            <td><input type="name" name="remaining_balance" class="form-control" id="remaining_balance" placeholder=""></td>
            </div>
            </div>
          </tr>

          {{-- <tr>
            <td><input type="name" name="buyer" class="form-control" id="buyer" placeholder=""></td>
            <td><input type="name" name="style" class="form-control" id="style" placeholder=""></td>
            <td><input type="name" name="cutting_part" class="form-control" id="cutting_part" placeholder=""></td>
            <td><input type="name" name="spreading_qty" class="form-control" id="spreading_qty" placeholder=""></td>
            <td><input type="name" name="cutting_qty" class="form-control" id="cutting_qty" placeholder=""></td>
            <td><input type="name" name="status" class="form-control" id="status" placeholder=""></td>
            <td><input type="name" name="remaining_balance" class="form-control" id="remaining_balance" placeholder=""></td>
          </tr> --}}
        </tbody>
      </thead>
    </table>
   <button class="btn btn-secondary btn-small" type="button" onclick="addTable()">Add Table</button>
    <button class="btn btn-primary btn-small" type="button" onclick="addColumn()">Add Row</button>
    <br>
    <br>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
</form>
</main>
@endsection

<script>
  function addTable(){
    // var v=document.getElementById("table_id");
    var x=["table_no","buyer","style","cutting_part","spreading_qty","cutting_qty","status","remaining_balance"]
    var table = document.getElementById("table_id");
    var row = table.insertRow(2);
    for(i=0;i<9;i++){
      var tag=document.createElement("input");
      var cell=row.insertCell([i]);
      cell.append(tag)
      
    }
    
  }
</script>