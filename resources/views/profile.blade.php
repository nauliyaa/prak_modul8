@extends('layouts.app')
@vite('resources/sass/app.scss')
@section('content')

      <div class="container">
      <br>
      <div class="row">
         <div class="col-sm-3">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">
                     <img src="{{ Vite::asset('resources/images/photo.jpg') }}" class="rounded-circle" >
                  </div>
                  <h5>About me</h5>
                  <hr>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vehicula, nunc et faucibus maximus, ligula enim lacinia magna, sed ultrices erat est sed libero. Duis velit est, condimentum in erat tempus, semper efficitur nulla.</p>
               </div>
            </div>
         </div>
         <div class="col-sm-9">
            <div class="card mb-5">
               <div class="card-body">
                  <h5>My Profile</h5>
                  <table class="table">
                  <thead>
                     <tr>
                        <th>Kategori</th>
                        <th>Isi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Fullname</td>
                        <td>Naura Auliya A</td>
                     </tr>
                     <tr>
                        <td>Nickname</td>
                        <td>Naura</td>
                     </tr>
                     <tr>
                        <td>NIM</td>
                        <td>1204200068</td>
                     </tr>
                     <tr>
                        <td>Major</td>
                        <td>Information System</td>
                     </tr>
                     <tr>
                        <td>Skills</td>
                        <td>
                           <ul class="list-group">
                              <li class="list-group-item">
                                 Analysis
                                 <div class="progress">
                                    <div class="progress-bar" style="width:30%"></div>
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 Programming
                                 <div class="progress">
                                    <div class="progress-bar" style="width:60%"></div>
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 Design
                                 <div class="progress">
                                    <div class="progress-bar" style="width:50%"></div>
                                 </div>
                              </li>
                           </ul>
                        </td>
                     </tr>
                     <tr>
                        <td>Contact Me</td>
                        <td><button type="button" class="btn btn-success">WhatsApp</button></td>
                     </tr>
                     </table>
               </div>
            </div>
         </div>
      </div>
      </div>
</body>
@endsection


