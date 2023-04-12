<style>
    html {
  height: 100%;
   }
   body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#ABCDEF, #243b55);
  .update-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
} 
.update-box h1 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.update-box .user-box {
  position: relative;
}
.update-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.update-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.update-box .user-box input:focus ~ label,
.update-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}
.button-8 {
  background-color: #e1ecf4;
  border-radius: 3px;
  border: 1px solid #7aa7c7;
  box-shadow: rgba(255, 255, 255, .7) 0 1px 0 0 inset;
  box-sizing: border-box;
  color: #39739d;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI","Liberation Sans",sans-serif;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.15385;
  margin: 0;
  outline: none;
  padding: 8px .8em;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  white-space: nowrap;
}

.button-8:hover,
.button-8:focus {
  background-color: #b3d3ea;
  color: #2c5777;
}

.button-8:focus {
  box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
}

.button-8:active {
  background-color: #a0c7e4;
  box-shadow: none;
  color: #2c5777;
}


}
</style>
<div class="update-box">
<h1>Update Journal</h1>
 <form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$user['id']}}>
<div class="user-box">
 <input type="text" name="title" value={{$user['title']}}>
 <label name="title">Title</label>
</div>
<div class="user-box">
 <input type="text" name="message" value={{$user['message']}}>
 <label name="msg">Message</label>
</div>
 <button type="submit" class="button-8">Update</button>

 </form>
</div>


