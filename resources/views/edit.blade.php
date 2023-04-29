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

     <title>Update Journal Page</title>
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
<h1>Update Journal

<a href="{{ url('home_user') }}" class="btn btn-primary float-end">BACK</a>

</h1>

 <form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$user['id']}}>
<div class="form-group">
  <label name="title" class="control-label col-sm-2">Title</label>
 <input type="text" name="title" class="form-control" value={{$user['title']}}>
</div>

<div class='form-group'>
 <label name="msg" class="control-label col-sm-2">Message</label>
 <input type="text" name="message" class="form-control" value={{$user['message']}}>
</div>

 <button type="submit" class="btn btn-default" >Update</button>

 </form>

</div>

</body>
</html>


