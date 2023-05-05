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

     <title>Add User Page</title>
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
                    <h4>Add User
                        <a href="{{ url('admin') }}" class="btn btn-primary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ url('add_user/'.$users->id) }}" >
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group mb-3">
                            <label for="">Role</label>
                            <input type="text" name="is_admin" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>