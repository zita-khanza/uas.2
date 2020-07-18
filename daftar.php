<?php 
   session_start();
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrasi</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                           
            
                        
                                            
                                            <div class="form-group">
                                                <label class="small mb-1" >Nama</label>
                                                <input class="form-control py-4"  type="text"  placeholder="Masukan Username " name="username"/>
                                        
                                                </div>
                                                <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4"  type="email" aria-describedby="emailHelp" placeholder="Masukan Email" name="email" />
                                            </div>
                                               
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="masukan password" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                          <input type="submit" class="btn btn-primary btn-block mt-4 mb-0" name="simpan" value="Daftar">
                                        </form>
                                        <?php 
                                        if(isset($_POST['simpan'])){
   
                                            $db->query("INSERT INTO user(nama,email,password)
                                            VALUES('$_POST[username]','$_POST[email]','$_POST[password]')");
                                            echo "<div class='alert alert-info'>daftar sukses</div>";
                                         echo "<meta http-equiv='refresh' content='1;url=index.php?'>";
                                        }
                                        
                                        ?>                                

                                      
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="dist/js/scripts.js"></script>
    </body>
</html>
