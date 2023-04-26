<div class="update-box">
    <h1>Share Journal</h1>
     <form action="/view" method="POST">
        @csrf
        <input type="hidden" name="id" value={{$user['id']}}>
   
     <input type="text" name="title" value={{$user['title']}} readonly>
     <label name="title">Title</label>
   
     <input type="text" name="message" value={{$user['message']}} readonly>
     <label name="msg">Message</label>
    
     <label name="therapist">Share to:</label>
     <select id="therapist" name="therapist">
        
        <option value="">Meep</option>
       
    </select>

     <button type="submit">Share</button>
    
     </form>
</div>
    