<!DOCTYPE html> 
<html> 
<head>
    <title>Biodata Saya</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>01</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="button.css" />
        <link rel="stylesheet" href="sosmedd.css" />
    <style>
body { 
background-image: url(padek.jpg);
background-size: cover;
background-repeat: no-repeat;
text-align: center;
} 
img {

height: 200px;
margin-bottom: 20px;

}

h1 {
font-size: 32px;
margin-bottom: 30px;
margin-top: 70px;
}


p {
font-size: 18px;
width: 80%;
margin: 0 auto;
padding: 0%;

}


a{
 display: flex;
  	justify-content: center;
  	align-items: center;
  	margin-top: 10px;
  	}

    </style>
    </head> 
    <body> 
    
        <nav class="navbar container">
            <a href="#" class="logo">DAMAR</a>
            <input type="checkbox" id="toggler" />
            <label for="toggler"><i class="ri-menu-line"></i></label>
            <div class="menu">
                <ul class="list">
                <li><a href="index.html">HOME</a></li>
                    <li><a href="http://127.0.0.1:5500/mybio/mybio.html">Mybio</a></li>
                    <li><a href="https://instagram.com/raf.lnn?igshid=ZDdkNTZiNTM=/">Contact</a></li>
                      
                    </ul>
                </div>
            </nav>

            
              
              
              
    
    <h1>Welcome!</h1> 
    <center>
    <table align="center">
    <tr>
        <td> Nama</td>
        <td> : </td>
        <td> <?php echo $_POST ["nama"]?> </td>

    </tr>
    <tr>
        <td> Tempat Lahir</td>
        <td> : </td>
        <td>  <?php echo $_POST ["ttl"]?></td>

    </tr>
    <tr>
        <td> Tanggal Lahir</td>
        <td> : </td>
        <td>  <?php echo $_POST ["tl"]?></td>
    <tr>
        <td> Alamat</td>
        <td> : </td>
        <td>  <?php echo $_POST ["alamat"]?> </td>
    <tr>
        <td> Kota</td>
        <td> : </td>
        <td>  <?php echo $_POST ["Kota"]?> </td>
    <tr>
        <td> Jenis Kelamin</td>
        <td> : </td>
        <td>  <?php echo $_POST ["j"]?> </td>
    <tr>
        <td> Hobby</td>
        <td> : </td>
        <td>  <?php echo $_POST ["hb"]?>
             </td>
             
    </tr>
</table>
    </center>
    <a href="index.html" target="_blank">
        <button class="myButton">HOME</button>
        
      </a>
    
    
    
    
    </body> 
    </html>