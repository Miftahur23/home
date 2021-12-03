
@extends('master')  
@section('dashboard')
    

       
    <div class="app-main">
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="container fiori-container">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                             <h1>Add New Assets</h1> 
                            </div>
                        </div>
                    </div>
                </div>               
                <div class="app-inner-layout app-inner-layout-page">

  @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p>
  @endif

  @if ($errors->any())
              <div class="alert alert-warning" role="alert">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>   
                  @endforeach
                </ul>
              </div>
  @endif

                  <form action="{{route('Create.asset')}}" method="POST" class="row" enctype="multipart/form-data">
                    @csrf
                      <div class="col-6 mt-3">
                          <label for="inputAssetname" class="form-label"><h5>Asset Name</h5></label>
                          <input name="asset_name" type="name" class="form-control" id="inputAssetname" >
                        </div>
                        <div class="col-6 mt-3">
                          <label for="inputAssetid" class="form-label"><h5>Asset ID</h5></label>
                          <input name="asset_id" type="number" class="form-control" id="inputAssetid" >
                        </div>
                      
                  

                      {{-- relation --}}
                      
                    <div class="col-12 mt-3">
                      <select name="categoriesid" class="form-control form-control-md">
                        <option>Select Category</option>
                  
                        @foreach ($category as $item)
                        <option  value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                  
                      </select>
                    </div>
                  
                      <div class="col-6 mt-3">
                        <label for="inputQuantity" class="form-label"><h5>Quantity</h5></label>
                        <input name="quantity" type="number" class="form-control" id="inputQuantity" >
                      </div>
                      <div class="col-6 mt-3">
                          <label for="inputCost" class="form-label"><h5>Cost</h5></label>
                          <input name="cost" type="number" class="form-control" id="inputCost" >
                        </div>
                      
                      <div class="col-6 mt-3">
                        <label for="inputSerialno" class="form-label"><h5>Serial No</h5></label>
                        <input name="serial_no" type="number" class="form-control" id="inputSerialno" >
                      </div>

                      <div class="form-group m-3">
                        <label for="inputImage"><h5>Select Asset Image</h5></label>
                        <input type="file" name='product_image' class="form-control-file" id="inputImage">
                      </div>

                      <div class="col-12 mt-1">
                        <label for="inputDescription" class="form-label" ><h5>Description</h5></label>
                        <input name="description" type="text" class="form-control" style="height:100px" id="inputDescription" >
                      </div>

                      
                        
                      <div class="m-auto pt-5">
                      <button type="submit" class="btn btn-success">Create</button>
                    </div>  
                    
                  </div> 
                  </form>
                    {{-- table  --}}
                </div>
            </div>
        </div>
    </div>
@endsection


