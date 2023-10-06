<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card card-body shadow">

                    <?php 
                    if (session('success')): ?>
    
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-inner--text"><strong>Success!</strong> {{ session('success') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        
                    <?php 
                        
                        endif;
                    ?>
                    <form action="{{ route('user#update', $user->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="txtname" placeholder="Enter your name" id="name" value="{{ old('txtname',$user->name) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtemail" placeholder="Enter your email" id="email" value="{{ old('txtemail', $user->email) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtphone" placeholder="Enter your Phone" id="phone" value="{{ old('txtphone', $user->phone) }}" class="form-control">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-dark">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>