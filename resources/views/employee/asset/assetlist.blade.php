@extends('employee.master')  
 @section('assetlist')


        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">

                            <div class="page-title-wrapper">
                                    <div class="page-title-heading">
                                        <h2>Asset List</h2> 
                                     </div>
                                
                                </div>               
                    <div class="app-inner-layout app-inner-layout-page">
                        {{-- table  --}}
                        {{-- @include('table.table') --}}
                    @if(session()->has('success'))
                        <p class="alert alert-success">
                            {{session()->get('success')}}
                        </p>
                    @endif
                    
                    <div class="container" style="width: 100%">
                        <table class="table table-dark table-bordered mt-3">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Asset Image</th>
                                <th scope="col">Asset Name</th>
                                <th scope="col">Action</th>
                                
                                
                              </tr>
                            </thead>
                            <tbody>
                        
                              @foreach ($data as $key=>$item)
                              <tr>
                                {{-- @dd($data)->all(); --}}
                                <td>{{$key+1}}</td>

                                <th>
                                    <img style="border-radius: 8px;" width="60px;" height="60px;"" src=" {{url('/uploads/products/'.$item->image)}}" alt="product">
                                </th>

                                
                                <td>{{$item->asset_name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="#">View</a>
                                    <a class="btn btn-success" href="#">Request</a>
                                </td>
                                
                                
                              </tr>
                              @endforeach 
                            </tbody>
                          </table> 
                        
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
