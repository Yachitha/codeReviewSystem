@extends('layouts.app')

@section('content')

    

<div class="container" >
   
    <div class="row">
        <div class="col-md-12" style="width:80% ; position: absolute;">
        <div class="card" style="width: 100%;">
        <div class="card-header">
            <div class="form-group">
            <label for="exampleFormControlSelect1">Select the language</label>
            <select class="form-control" id="langSelect" onclick="langSelect()">
              <option value="javascript">Javascript</option>
              <option value="java">Java</option>
              <option value="c++">C++</option>
              <option value="python">Python</option>
              <option value="c">C</option>
              <option value="php">PHP</option>
              <option value="html">HTML</option>
            </select>
          </div>
          <p id="demo"></p>
          </div>
          <div class="card-body">
             <pre id="editor" style="height: 350px;">
//copy and paste your code here
            </pre>  
          </div>
          <div style="padding-left: 20px; padding-right: 20px; background-color:#000; opacity:0.95 ">
          <button type="submit" class="btn btn-primary mb-2" style="padding-right: 20px; padding-left: 20px" onclick="submit()" >Submit</button>
          </div>
          <div class="form-group" style="padding-right: 20px; padding-left: 20px">
            <label for="exampleFormControlTextarea1"  style="width: 80%" >Result</label>
            <!-- <p id="result"></p> -->
            <textarea class="form-control" id="result" rows="3" ></textarea>
          </div>
        </div>
                     
        </div>
    </div>
</div>
@endsection
