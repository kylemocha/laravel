<div class="update-box">
    <h1>Share Journal</h1>
     <form action="/view" method="POST">
        @csrf
        <a href="{{ url('home_user') }}" class="btn btn-danger float-end">BACK</a><br>
     
     <label name="title">Title</label><br>
     <input type="text" name="title" value={{$user['title']}} readonly><br>
     
     
     <label name="msg">Message</label><br>
     <input type="text" name="message" value={{$user['message']}} readonly><br>
    
    
     <label name="therapist">Share to:</label><br>
     <select id="therapist" name="therapist"><br>
        
        <option value="">Meep</option>
       
    </select><br>

     <button type="submit">Share</button>
    
     </form>
</div>
    