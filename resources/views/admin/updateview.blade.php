<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">


   @include('admin.css')

   <style type="text/css">
     .title{
          
        color:white;
      padding-top:25px;
       font-size:25px;

     }
     lable{
        display: inline-block;
        width: 200px;
     }

    </style>


  </head>
  <body>
    
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
               
            <h1 class="title">Add Product</h1>

             @if(session()->has('message'))

               <div class="alert alert-success">

             <button type="button" class="close" data-dismiss="alert">x</button>

             {{session()->get('message')}}


    </div>
             @endif

            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
                <lable>Product title</lable>
                <input style="color:black;" type="text" value="{{$data->title}}"  name="title" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Price</lable>
                <input style="color:black;" type="number" value="{{$data->price}}"  name="price" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Description</lable>
                <input style="color:black;" type="text" value="{{$data->description}}"  name="des" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Quantity</lable>
                <input style="color:black;" type="text" value="{{$data->quantity}}"  name="quantity" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Old Image</lable>
                <img height="100" width="100" src="/productimage/{{$data->image}}">
            </div>  

            <div style="padding:15px;">
                 <lable>Change The Image</lable>
                <input type="file"   name="file"  >
            </div>

            <div style="padding:15px;">
                <input class="btn btn-success" type="submit"  name=""  >
            </div>

    </form>

            </div>

</div>

          <!-- partial -->
       @include('admin.script')
  </body>
</html>