@extends('admin.layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Product Table -->
        <div class="card card-table-border-none" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Manage Products</h2>
            <div class="date-range-report ">
              <span>Jan 25, 2021 - Feb 23, 2021</span>
            </div>
          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Title</th>
                  <th class="d-none d-md-table-cell">Price</th>
                  <th class="d-none d-md-table-cell">Quantity</th>
                  <th class="d-none d-md-table-cell">Date</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                        <a class="text-dark" href="">{{ $product->title }}</a>
                        </td>
                        <td class="d-none d-md-table-cell">{{ $product->price }}</td>
                        <td class="d-none d-md-table-cell">{{ $product->quantity }}</td>
                        <td class="d-none d-md-table-cell">$150</td>
                        <td>
                            @if ( $product->quantity <= 50 )
                                <span class="badge badge-danger">Old Pro</span>
                            @elseif ( $product->quantity > 50 && $product->quantity < 100 )
                                <span class="badge badge-warning">Present Pro</span>
                            @else
                                <span class="badge badge-success">New Pro</span>
                            @endif
                        </td>

                        <td>

                          <a href="{{ route('admin.product.edit', $product->id) }}" class="badge badge-success">Edit</a>
                          <a href="#deleteModal{{ $product->id }}" data-toggle="modal" class="badge badge-danger">Delete</a>

                          <!-- Delete Modal -->
                          <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{!! route('admin.product.delete', $product->id) !!}"  method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>

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
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
@endsection