<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @include('layouts.css')
</head>
<body style="background-color:powderblue;">
 <main id="main" class="py-5">
  
   <div class="row">
   <div class="col-sm-4" > </div>
    <div class="col-sm-4" >
      <div class="container">
         <div class="card bg-gray" style="width:355px; height:475px">
            <div class="card-header">Register</div>
              <div class="card-body">
                 <form method="POST" action="{{route('register.store')}}" >
                   @csrf
                    <div class="form-group">    
                     <label for="name">Name</label>
                     <input type="text" id="name" class="form-control" name="name" required/>
                    </div>
                    <div class="form-group">    
                     <label for="email">Email</label>
                     <input type="email" id="email" class="form-control" name="email" required />
                    </div>
                    <div class="form-group"> 
                         <label>Gender:</label>
                          <div class="col-md-6">
                           <input type="radio" name="gender" value="male"> Male
                            <input type="radio" name="gender" value="male"> Female<br>              
                          </div>
                     </div>
                    <div class="form-group">    
                     <label for="password">Password</label>
                     <input type="password" id="password" class="form-control" name="password" required/>
                    </div>
                    <input type="submit" name="send" value="Register" class="btn btn-primary">
                 </form>
              </div> 
           </div>
        </div>
      </div>  
 </main>
    
</body>
</html>