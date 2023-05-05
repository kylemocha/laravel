<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--<link href="css/admin.css" rel="stylesheet" type="text/css">-->

     <title>Edit Therapist Page</title>
   </head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
  
</style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Update Therapist Profile
                        <a href="{{ url('therapist') }}" class="btn btn-primary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-therapist/'.$users->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$users->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Job Title</label>
                            <input type="text" name="email" value="{{$users->type}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{$users->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phonenumber" value="{{$users->phonenumber}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{$users->address}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>