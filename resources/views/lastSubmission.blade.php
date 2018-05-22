@extends('layouts.app')

@section('content')

    

<div class="container" >
   
    <div class="row">
        <div class="col-md-12" style="width:80% ; position: absolute;">
        <div class="card" style="width: 100%;">
        <div class="card-header">
            <div class="form-group">
           
          </div>
       

          </div>
          <div class="card-body">
             
              <textarea class="form-control" id="result" rows="8" style="padding-bottom: 20px" ></textarea>
          </div>
          <div style="padding-top:10px; padding-left: 20px; padding-right: 20px; background-color:#000; opacity:0.95 ">
          </div>
          <div class="form-group" style="padding-right: 20px; padding-left: 20px; padding-bottom: 20px">
            <label for="exampleFormControlTextarea1"  style="width: 80%" >Result</label>
            <!-- <p id="result"></p> -->
            <textarea class="form-control" id="result" rows="3" style="padding-bottom: 20px" ></textarea>
            <div style="padding-top: 20px">
             <a class="btn btn-primary mb-2" style="padding-top:10px; padding-right: 20px; padding-left: 20px"  href="/home" >Editor</a>
             </div>
          </div>
        </div>
                     
        </div>
    </div>
</div>
@endsection
