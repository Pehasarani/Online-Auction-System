
<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset='UTF-8'>
    <title>Admin Dashboard Auction system </title> 

    
    <link rel='shortcut icon' type='x-icon' href='images/logotransparent.png'>
    <meta name='viewport' content='width = device-width, initial-scale=1.0'>
    
    <!--MATERIALS-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0' />

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap' rel='stylesheet'>

    
    <!--- Custom CSS -->
    <link rel = 'stylesheet' href = 'css/Admin.css'>
 
<!--FORM STYLING-->
<style>
   

input[type=text], select {
 width: 100%;
 padding: 5px 20px 2px;
 margin: 8px 0;
 border: 3px solid blue;
 background-color: lightcyan;
 border-radius: 4px;
 box-sizing: border-box;
}

input[type=submit] {
 width: 20%;
 background-color: blue;
 color: White;
 padding: 16px 32px;
 text-decoration:none;
 margin: 2px 2px;
 border-radius: 3px;

}

input[type=reset] {
 width: 20%;
 background-color: blue;
 color: White;
 padding: 16px 32px;
 text-decoration:none;
 margin: 2px 2px;
 border-radius: 3px;

}

input[type=update] {
 width: 20%;
 background-color: blue;
 color: White;
 padding: 16px 32px;
 text-decoration:none;
 margin: 2px 2px;
 border-radius: 3px;

}

input[type=submit]:hover {
 background-color: lightblue;
}

div {
 border-radius: 5px;
 padding: 20px;
}


</style>

   
   
</head>

<body>
    
<div class='grid-container'>
    

     <!-- header -->
<header class = 'header'>
    
    <div class='header-left'>
        <span class='material-symbols-outlined'>
            account_circle
            </span>
    </div>
    <div class='header-right'>
        
            <span class='material-symbols-outlined'>
                mail
                </span>
            <span class='material-symbols-outlined'>
                    notifications
                </span>
    </div>
    

</header>

    


 

    <!-- main -->
<main class='main-container'>
<div class='main-title'>

    <h1>DASHBOARD</h1>


</div>
<h2>List of accounts </h2>
<div class='main-cards'>

    <div class='card'>
        <div class='card-inner'>
            <h3>Dillon</h3>
            <h3>UID = #25</h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date registered : xx/xxxx/xxx</p>
     </div>

     <div class='card'>
        <div class='card-inner'>
            <h3> Vishwa </h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date Registered : xx/xxxx/xxxx</p>
     </div>

     <div class='card'>
        <div class='card-inner'>
            <h3> Sarala </h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date registered : xx/xxxx/xxx</p>
     </div>

     <div class='card'>
        <div class='card-inner'>
            <h3>Kavishna</h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date registered : xx/xxxx/xxx</p>
     </div>

</div>

<div class='main-cards'>

    <div class='card1'>
        <div class='card-inner1'>
            <h3>Bill Gates </h3>
            <h3>UID = #25</h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date registered : xx/xxxx/xxx</p>
     </div>

     <div class='card'>
        <div class='card-inner'>
            <h3> Christopher Nolan </h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date Registered : xx/xxxx/xxxx</p>
     </div>

     <div class='card'>
        <div class='card-inner'>
            <h3> Scott adkins </h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date registered : xx/xxxx/xxx</p>
     </div>

     <div class='card'>
        <div class='card-inner'>
            <h3> Pasindu </h3>
            <span class='material-symbols-outlined'>
                face
                </span>
        </div>
        <p>Date registered : xx/xxxx/xxx</p>
     </div>

</div>

<div class='charts'>

    <div class='charts-card'>
        <h2 class='chart-title'>Sales </h2>
        <div id='line-chart'>

        </div>
    </div>

    <div class='charts-card'>
        <h2 class='chart-title'> Reach </h2>
        <div id='pie-chart'>
            
        </div>
    </div>


</div>





</main>

<!----End Main---->
</div>



<!------Apex Library------>
<script src='https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.0/apexcharts.min.js' integrity='sha512-NpRqjS1hba1uc6270PmwsKwQti3CSCDkZD9/dlen3+ytOUb/azIyuaGtyewUkjazLMSdl7Zy2CVWMvGxR6vFWg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
  
 <!--- Custom JS -->
 <script  src = 'js/Admin.js'></script>
  
 <div class="signout">
        <form action = "php/signout.php" method = "post">
        <p> <b>Sign out from your account</b></p>
        <input type = "submit" class = "signout-btn" name = "signout" value= "signout">
        </form>
        </div>


</body>
</html>


  

