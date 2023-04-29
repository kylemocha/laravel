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

     <title>Share Journal Page</title>
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
    <h1>Share Journal
    
        <a href="{{ url('home_user') }}" class="btn btn-primary float-end">BACK</a><br>

    </h1>

      <form action="{{ url('insertjournal/'.$users->id) }}" method="POST">
         @csrf
     
    <div class="form-group">
     <label name="title">Title</label><br>
     <input type="text" name="title" value={{$users['title']}} class="form-control" readonly><br>
    </div>

    <div class="form-group">
     <label name="msg">Name</label><br>
     <input type="text" name="User_name" value={{$users['User_name']}} class="form-control" readonly><br>
    </div>
  
    <div class="form-group">
     <label name="msg">Message</label><br>
     <input type="text" name="message" value={{$users['message']}} class="form-control"readonly><br>
    </div>

    <div class="form-group">
     <label name="date">Date created</label><br>
     <input type="text" name="JournalDate" value={{$users['JournalDate']}} class="form-control" readonly><br>
    </div>
    
    <div class="form-group">
     <label name="therapist">Share to:</label><br>
     <select id="therapist" name="therapist"><br>
      @foreach ($meeps as $meep)  
        <option value="{{ $meep->id }}, {{ $meep->name }}">{{ $meep->name }}</option>
      @endforeach 
    </select><br>
    </div>

     <button type="submit" class="btn btn-default">Share</button>
    
     </form>
</div>

</body>
</html>
    