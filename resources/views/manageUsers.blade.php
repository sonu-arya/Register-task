<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    @include('layouts.css')
</head>
<body>
<main id="main" class="py-5">
      <div class="container" data-aos="fade-up">
         <div class="row">
           <div class="col-md-12">
            <table class="table table-striped">
             <thead>
               <tr>
                 <th scope="col">Id</th>
                 <th scope="col">Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">Gender</th>
                 <th scope="col">Password</th>
                 <th>Action</th>
              </tr>
             </thead>
             <tbody>
                 @foreach($users as $user)
                 <tr>
                     <th scope="row">{{$user->id}}</th>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->gender}}</td>
                     <td>{{$user->password}}</td>
                     <td>
                     <a  class="btn btn-primary" data-toggle="modal" data-target="#editUser" id="{{$user->id}}" onclick="idupdate(this.id)"> Edit</a>
                         <a href="{{url('user/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
                     </td>      
                 </tr>
                 @endforeach
             </tbody>
         </table>
        </div>
      </div>
    </div>
  
 </main>


 <!-- The Modal for edit users-->
 <div class="modal fade" id="editUser">
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Edit User</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
       @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br>
    @endif
         <form method="post" action="{{route('user.edit')}}">
         @csrf
         <input type="hidden" name="id" id="id" />
              <div class="form-group">    
                 <label for="editName">Name</label>
                 <input type="text" id="editName" class="form-control" name="editName" />
              </div>
              <div class="form-group">    
                 <label for="editEmail">Email</label>
                  <input type="email" id="editEmail" class="form-control" name="editEmail" />
              </div>
              <div class="form-group"> 
                         <label>Gender</label>
                          <div class="col-md-6">
                           <input type="radio" name="editGender" value="male"> Male
                            <input type="radio" name="editGender" value="female"> Female<br>              
                          </div>
                     </div>
              <div class="form-group">    
                     <label for="password">Password</label>
                     <input type="password" id="password" class="form-control" name="password" />
                    </div>
                   

         <input type="submit" name="send" value="Edit" class="btn btn-primary">
         </form>
       </div>
     </div>
   </div>
 </div>
 <!---model end of edit users-->

 <script >
function idupdate(userId){
 document.getElementById('id').value=userId;
}
</script>

</body>
</html>