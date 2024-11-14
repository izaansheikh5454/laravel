@include("components.header")
 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light  mx-0">
                    <div class="col-md-12">
                        <h3>All categories</h3>
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">name</th>
                                        <th scope="col">image</th>
                                        <th scope="col" colspan="2">action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($allcat as $values)
                                    <tr>
                                        <th scope="row">{{$values['name']}}</th>
                                        <td><img src="assets/img/categories/{{$values['image']}}" width="90px" alt=""></td>
                                        <td><button >edit</button></td>
                                        <td><button>delete</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
@include("components.footer")