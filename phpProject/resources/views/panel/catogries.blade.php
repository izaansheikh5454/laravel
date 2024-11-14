@include("components.header")
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row  bg-light rounded mx-0">
                    <div class="col-md-12">
                   
            <!-- Blank End -->
              <!-- Form Start -->
            <h3>Categories</h3>
                            <form method="post" action="{{url('categories')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">name</label>
                                    <input type="text" name="cname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                   
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image</label>
                                    <input type="file" name="cimage" class="form-control" id="exampleInputPassword1">
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Add category</button>
                            </form>
                           </div>
                           </div>
                           </div>
                           @if (session("category"))
                           <script> alert("add Category") </script>
                           @endif
                    <!-- form end -->
             

@include("components.footer")