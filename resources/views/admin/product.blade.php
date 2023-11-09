<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
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

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px;">
                <lable>Product title</lable>
                <input style="color:black;" type="text" placeholder="Give a product title"  name="title" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Price</lable>
                <input style="color:black;" type="number" placeholder="Give a price"  name="price" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Description</lable>
                <input style="color:black;" type="text" placeholder="Give a description"  name="des" required="" >
            </div>

            <div style="padding:15px;">
                <lable>Quantity</lable>
                <input style="color:black;" type="text" placeholder="Product Quantity"  name="quantity" required="" >
            </div>

            <div style="padding:15px;">
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