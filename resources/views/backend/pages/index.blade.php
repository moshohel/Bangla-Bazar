@extends('backend.layouts.layout')

@section('content')

<div class="row">
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
      <div class="card-body">
        <h2 class="mb-1">71,503</h2>
        <p>Online Signups</p>
        <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas id="barChart" style="display: block; width: 166px; height: 100px;" width="166" height="100" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini  mb-4">
      <div class="card-body">
        <h2 class="mb-1">9,503</h2>
        <p>New Visitors Today</p>
        <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas id="dual-line" width="166" height="100" class="chartjs-render-monitor" style="display: block; width: 166px; height: 100px;"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
      <div class="card-body">
        <h2 class="mb-1">71,503</h2>
        <p>Monthly Total Order</p>
        <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas id="area-chart" width="166" height="100" class="chartjs-render-monitor" style="display: block; width: 166px; height: 100px;"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
      <div class="card-body">
        <h2 class="mb-1">9,503</h2>
        <p>Total Revenue This Year</p>
        <div class="chartjs-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas id="line" width="166" height="100" class="chartjs-render-monitor" style="display: block; width: 166px; height: 100px;"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
      <!-- Recent Order Table -->
      <div class="card card-table-border-none" id="recent-orders">
        <div class="card-header justify-content-between">
          <h2>Recent Orders</h2>
          <div class="date-range-report ">
            <span>Jan 24, 2021 - Feb 22, 2021</span>
          </div>
        </div>
        <div class="card-body pt-0 pb-5">
          <table class="table card-table table-responsive table-responsive-large" style="width:100%">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th class="d-none d-md-table-cell">Units</th>
                <th class="d-none d-md-table-cell">Order Date</th>
                <th class="d-none d-md-table-cell">Order Cost</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>24541</td>
                <td>
                  <a class="text-dark" href=""> Coach Swagger</a>
                </td>
                <td class="d-none d-md-table-cell">1 Unit</td>
                <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                <td class="d-none d-md-table-cell">$230</td>
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
                  <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                </td>
                <td class="d-none d-md-table-cell">2 Units</td>
                <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                <td class="d-none d-md-table-cell">$550</td>
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
                  <a class="text-dark" href=""> Hat Black Suits</a>
                </td>
                <td class="d-none d-md-table-cell">1 Unit</td>
                <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                <td class="d-none d-md-table-cell">$325</td>
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
                  <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                </td>
                <td class="d-none d-md-table-cell">5 Units</td>
                <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                <td class="d-none d-md-table-cell">$200</td>
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
                  <a class="text-dark" href=""> Speed 500 Ignite</a>
                </td>
                <td class="d-none d-md-table-cell">1 Unit</td>
                <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                <td class="d-none d-md-table-cell">$150</td>
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

@endsection