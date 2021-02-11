<!doctype html>
<html>
<head>
      <title>sdusozluk.net </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/9ccc360966.js" crossorigin="anonymous"></script>
    
    
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <style>
        html,body{
            height: 100%;
            width: 100%;
        }
        .fasms{
            
            border: 3px solid #EDEFF2;
border-radius: 31px;
            margin:20%;
            padding: 6px;
            text-align: center;
            
        }
    
    
    </style>
<body>
    <div class="container well">
        <h1 class="center">2 Adımlı Doğrulama</h1>
        <div style="width:50%; margin:10px auto;">
            <center><img src="<?=$link;?>" alt=""></center>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <div class="fasms">
        <p>Telefonunuza gelen 6 haneli kodu giriniz...</p>
     
 <form class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="kodu giriniz..">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Doğrula</button>
</form>
        <hr>
        <div class="alert alert-primary" role="alert">
Doğrulama kodu telefonunuza gönderilmiştir - Kontrol Ediniz!
</div>
        <i class="fas fa-spinner fa-pulse"></i>
    </div>
    
    
    
    
    </body>

</html>