     <body class="bg-gradient-primary">

         <div class="container">

             <!-- Outer Row -->
             <div class="row justify-content-center">

                 <div class="col-lg-6">

                     <div class="card o-hidden border-0 shadow-lg my-5">
                         <div class="card-body p-0">
                             <!-- Nested Row within Card Body -->
                             <div class="row">
                                 <div class="col">
                                     <div class="p-5">
                                         <div class="text-center">
                                             <h1 class="h4 text-gray-900 mb-4">Silakan Login</h1>
                                         </div>
                                         <form class="user">
                                             <div class="mb-3">
                                                 <input type="text" class="form-control" id="username" placeholder="Masukan username">
                                             </div>

                                             <div class="mb-3">
                                                 <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" id="password">
                                             </div>

                                             <a class="btn btn-warning btn-block text-dark" type="button" id="btn-login" onclick="login()">
                                                 Log In
                                             </a>
                                         </form>
                                         <hr>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>

             </div>

         </div>

         <script>
             function login() {
                 var username = $("#username").val()
                 var password = $("#password").val()
                 $.ajax({
                     type: 'POST',
                     data: {
                         username: username,
                         password: password
                     },
                     url: 'http://localhost:2000/sign-in',
                     dataType: 'JSON',
                     success: function(data) {
                         if (data.status == true) {
                             $.ajax({
                                 type: 'POST',
                                 data: data,
                                 url: 'Auth/session',
                                 dataType: 'JSON',
                                 success: function(params) {
                                     console.log(params)
                                     if (params.status == "true") {
                                         window.location.href = "http://localhost/rpp-kpu/admin"
                                     }
                                 }
                             })
                         }
                     }
                 })
             }
         </script>