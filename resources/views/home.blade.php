@extends('layouts.app')


@section('add')

<meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{url('boot/css/bootstrap.min.css')}}" />
    <script type="text/javascript" src="{{url('boot/js/jquery.js')}}" ></script>
    <script type="text/javascript" src="{{url('boot/js/bootstrap.min.js')}}" ></script>
@endsection



@section('billa')

<h4 style="font-weight: bold;">{{ config('app.name', 'laravel') }}</h4>

@endsection

@section('content')

<div class="container ">
    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                          
                      </div>
                  @endif

                    You are logged in!
                </div>

                <div class="panel-footer">
                  check
                </div>
            </div>
        </div>
    </div>-->


    <div class="container-fluid" style="width: 60%;border: 0px solid;height: auto;background-color:rgba(255,255,255, 0.8);border-radius: 1%">
      
        <div class="panel" style="background-color:  rgba(255, 0, 0, 0.7)">
        <div class="panel-heading">
          <h4 style="font-size: 25px;color: white;font-weight: bolder;font-family:cursive;text-align: center">Form</h4>
        </div> 
        </div>



        <form class="form-horizontal" method="post" action="{{route('login')}}" id="add">
         {{ csrf_field() }}



          <div class="form-group row">
              <label class="col-md-4 control-label" style="font-size: 18px;color: black;font-weight: bold;">Name of Patient</label>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="name">
                      </div>
          </div>

          <div class="form-group row">
              <label class="col-md-4 control-label" style="font-size: 18px;color: black;font-weight: bold;">Phone no.</label>

                      <div class="col-md-7">
                        <input class="form-control" type="number" name="number">
                      </div>
          </div>

          <div class="form-group row">
              <label class="col-md-4 control-label" style="font-size: 18px;color: black;font-weight: bold;">Gender</label>
                       <div class="col-md-7">
                        <label class="radio-inline"><input  type="radio" name="gender">male</label>
                        <label class="radio-inline"><input  type="radio" name="gender">Female</label>
                      </div>
          </div>

          <div class="form-group row">
            <label class="col-md-4 control-label" style="font-size: 18px;color: black;font-weight: bold;">How are you Feelling?</label>
            <div class="col-md-7">
              <input id="disease" type="text" name="disease" class="form-control">
            </div>
          </div>

        
          <div id="showhid" class="row">

            <button onclick="show()" type="button" class="btn col-md-3 col-md-offset-5"    style="background-color: blue;color: white">More <span class="caret"></span></button>
          </div>


          <div id="unhid" class="form-group row"   style="display: none">
            
            <label class="col-md-4 control-label" style="font-size: 18px;color: black;font-weight: bold;">Symptoms</label>

                          <div id="care" class="col-md-8">
  
                          </div>

                       
            
          </div>

<br>




           <div class="row">

            <input type="submit" class="btn col-md-7 col-md-offset-3" value="Result" style="background-color: green;color: white">
          </div>

<br>


        </form>





</div>



 <script type="text/javascript">
  
    

    function show()
    {

                  $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


      var a=document.getElementById('disease').value;
      //alert(a);
      
       
        $.ajax({  type:'POST',url:'/getmsg',data:{'id':a} , success:function(data){
                                                                       $("#msg").html(data.msg[0]);
                                                                       count=data.msg.length;
                                                                

 




var i,addd,make1;



for(i=0;i<count;i++)
{

  document.getElementById("unhid").style.display="block";
  
  document.getElementById("showhid").style.display="none";
  make1="lab_add"+i;
  
   
   var lab = document.createElement("LABEL");
   var node = document.createTextNode(data.msg[i]);
   
   //lab.setAttribute("id",make );   //both ways to assign id is correct
   lab.id=make1;
   lab.appendChild(node);


   addd = document.getElementById("care");
   //getElementsByClassName()

   
   addd.appendChild(lab);


    check = document.getElementById(make1);
    make2="check_add";
    var checkbox = document.createElement("input"); 
    checkbox.setAttribute("type", "checkbox");
    checkbox.setAttribute("value", "ff");
    checkbox.id=make2;

    check.appendChild(checkbox);

    
    
    
}

                }});


    }




</script>
@endsection
