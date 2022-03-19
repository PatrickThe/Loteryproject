<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>AddNews &mdash; Synergy</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>

                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::User()->name}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            @include('partials.sidemenu')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>ADD NEWS PAGE </h1>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-header-action">
 <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">Edit News <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                  
                                <div class="card-header">
                                    <h4>News Already Created</h4>
                                   
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive table-invoice">
                                    <table class="table table-striped">
                                            <tr>
                                                
                                                <th></th>
                                                <th>Image Name</th>
                                                <th>Headline</th>
                                                <th>Details</th>
                                                <th>Status</th>
                                                <th>Date posted</th>
                                            
                                            </tr>
                                           
                                          
                                            <tr>
                                                <td><img alt="image" src="../assets/img/{{$data->image}}" widht="30px" height="30px"></td>
                                                <td class="font-weight-600">{{$data->image}}</td>
                                                <td class="font-weight-600">{{$data->headline}}</td>
                                                <td class="font-weight-600">{{$data->details}}</td>
                                                <td>{{$data->status}}</td>
                                                <td>{{$data->created_at}}</td>
                                            </tr>
                                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
        @include('partials.footer')
    </div>
    </div>


   
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add News <span id="loader" style="Visibility:hidden; width:2%"><i class="fa fa-spinner fa-2x fa-spin"></i></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/edit" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Headline</label>
                            <input type="text" class="form-control amount" id="headline" name="headline" value="{{$data->headline}}">
                        </div>

                        <div class="form-group">
                            <label>Details </label>
                            <input type="text" class="form-control amount" id="details" name="details" value="{{$data->details}}">
                        </div>
                        <div class="form-group">
                            <label>status </label>
                            <p>visible<input type="radio" id="status" name="status" value="1"></p>
                            <p>invisible<input type="radio"  id="status" name="status" value="0"></p>
                        </div>
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="form-control amount" id="image" name="image" >
                        </div>
                        <div class="form-group">
                        <input class="btn btn-primary btnsave" style="color:white" id="" value="SUBMIT" type="submit">
                    </form>
                </div>

            </div>
        </div>
    </div>    











   
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {

            $('#btnsave').on('click', function() {
                var headline = $('#headline').val();
                var details = $('#details').val();
                var image = $('#image').val();


                if (headline == "" && details == "") {
                    alert('Please fill all the field');
                } else {
                    //   $("#butsave").attr("disabled", "disabled");
                   
                        $.ajax({
                            url: "/save_news",
                            type: "POST",
                            data: {
                                _token: $("#csrf").val(),
                                image: image,
                                headline: headline,
                                details: details
                            },
                            beforeSend: function() {
                                $('#loader').css("visibility", "visible");
                            },
                            cache: false,
                            success: function(dataResult) {
                                console.log(dataResult);
                                alert("saved !");

                            }
                        });
                    
                }
            });
        });
    </script>
   
   
</body>

</html>