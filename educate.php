<!DOCTYPE html>
<html>
<head>
	<title>Reminder</title>
</head>
<style type="text/css">
@font-face{
			font-family: bubblegum;
			src:url('fonts/Bubblegum.ttf');
		}
		@font-face{
			font-family: sketchcollege;
			src:url('fonts/sketchcollege.ttf');
		}
		@font-face{
			font-family: sketch;
			src:url('fonts/sketch.ttf');
		}
		@font-face{
			font-family: strong;
			src:url('fonts/onlytobestrong.ttf');
		}
		@font-face{
			font-family: goodvibes;
			src:url('fonts/Goodvibes.ttf');
		}
		@font-face{
			font-family: goodmorning;
			src:url('fonts/Good Morning.ttf');
		}
			@font-face{
			font-family: snowball;
			src:url('fonts/snowball.ttf');
		}
	.header{
			
			top: 0px;
			width: 100%;
			height: 90px;
			background-color: rgb(0, 120, 179);
			position: fixed;
			z-index: 1;
		}
		.logoclass{
			
			padding-left: 4%; 
			padding-top: 2px;
			border-radius: 5px;
			position: absolute;
			height: 70px;
		}
           /*header*/
header{
    background: #35424a;
    color: white;
    padding-top: 30px;
    min-height: 70px;
    border-bottom:  #00BFFF 3px solid;
    font-family: sans-serif;
    position: fixed;
    top: 0px;
    width: 100%;
	height: 90px;
	z-index: 1;
}

header a{
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
}

header li{
    float: left;
    display: inline;
    padding: 0 20px 0 20px;
}

header #brand{
    float: left;
}

header #brand h1{
    margin: 0;
}

header nav{
    float: right;
    margin-top: 10px;
}
header .highlight, header .current a{
    color:  #00BFFF;
    font-weight: bold;
}

        .cont{
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
		.sidepanel{
			background-color: #00BFFF;
			padding-top: 0px;
			width: 20%;
			height: 100%;
			position: fixed;
			top: 100px;

		}
        .sidepanel ul li a{
            text-decoration: none;
            color: white;
        }
		.sidepanel ul{
			text-decoration: none;
			padding-top: 50px;
			list-style-type: none;

		}
		.sidepanel ul li{
			font-family: sans-serif;
			font-size: 25px;
			text-decoration: none;
			padding: 20px;
            margin: -20px;
		}
		.body{
			position: absolute;
			left: 30%;
			top: 30%;
			
		}
		
		.body p{
			font-family: sans-serif;
			font-size: 20px;
			width: 750px;
			

		}

		a:link {
    
    text-decoration: none;
}
a:visited {
 
    text-decoration: none;
}
a:hover {
  	color:#D6D7D7;
}
a:active {
    
}
#boxes{
    margin-top: 10px;
}

#boxes .box{
    float:left;
    text-align: center;
    width:15%;
    padding:30px;
}

#boxes .box img{
    width:90px;
}
        
#boxes a{
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
    font-family: sans-serif
}

</style>

<body style="background-color: #f4f4f4; margin: 0; padding: 0;">
        <header>
            <div class="cont">
                <div id="brand">
                    <h1><span class="highlight">Site</span> stuff</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="first.htm">Home</a></li>
                        <li><a href="donate.htm">Donate</a></li>
                        <li><a href="maintain.htm">Maintain</a></li>
                        <li><a href="reminder.htm">Reminder</a></li>
                        <li class="current"><a href="educate.htm">Educate</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<div class="sidepanel">
	<ul >
		<li style="font-size: 30px"><a href="reminder.htm"><strong>Diseases</strong></a></li>
		<li><a href="shivam/main%20pg.html">Hepatitis</a></li>
		<li><a href="malaria/medi_ori.html">Malaria</a></li>
		<li><a href="shailesh/medi_ori.html">Cholera</a></li>
        <li><a href="malnutrition/tcoy.html">Malnutrition</a></li>
        <li><a href="shubham/start.html">Cancer</a></li>
        <li><a href="asthama/medi_ori.html">Asthma</a></li>
        <li><a href="typhoid/medi_ori.html">Typhoid</a></li>
        <li><a href="arpit/medi_ori%20.html">Jaundice</a></li>
	</ul>

</div>
<h1 style="position: absolute;left: 30%; top: 15%;font-family: bubblegum;font-size: 50px">Diseases</h1>

<div class="body">
	
<section id="boxes">
            <div class="cont">
                <div class="box">
                    <img src="img/donate.png">
                    <h3><a href="shivam/main%20pg.html">Hepatits</a></h3>
                    </div>
                <div class="box">
                    <img src="img/maint.png">
                    <h3><a href="malaria/medi_ori.html">Malaria</a></h3>
                    </div>
                <div class="box">
                    <img src="img/reminder.png">
                    <h3><a href="shailesh/medi_ori.html">Cholera</a></h3>
                    </div>
                <div class="box">
                    <img src="img/educ.jpg">
                    <h3><a href="malnutrition/tcoy.html">Malnutrition</a></h3>
                    </div>
                <div class="box">
                    <img src="img/maint.png">
                    <h3><a href="shubham/start.html">Cancer</a></h3>
                    </div>
                <div class="box">
                    <img src="img/maint.png">
                    <h3><a href="asthama/medi_ori.html">Asthma</a></h3>
                    </div>
                <div class="box">
                    <img src="img/donate.png">
                    <h3><a href="typhoid/medi_ori.html">Typhoid</a></h3>
                    </div>
                <div class="box">
                    <img src="img/donate.png">
                    <h3><a href="arpit/medi_ori%20.html">Jaundice</a></h3>
                    </div>
            </div>
        </section>

	
</div>

</body>
</html>