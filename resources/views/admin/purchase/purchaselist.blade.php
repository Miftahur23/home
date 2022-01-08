@extends('master')  
    @section('content')
        
   
           
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                 <h2>Purchases</h2> 
                                </div>   
                                
                                <div class="page-title-actions"> 
                                    <a href="{{route('create.purchase')}}" type="button" class="btn btn-success">
                                        + Purchase Extra Assets
                                    </a>
                                </div> 
                                
                            </div>
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
                                <th scope="col">Asset Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                                <th scope="col">Status</th>
                                
                              </tr>
                            </thead>
                            {{-- <tbody>
                        
                              @foreach ($departments as $key=>$item)
                              <tr>
                                
                                <td>{{$key+1}}</td>
                                <td>{{$item->dname}}</td>
                                
                              </tr>
                              @endforeach 
                            </tbody> --}}
                        </table> </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    
