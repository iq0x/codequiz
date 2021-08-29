<?php
    $thomasclone =5;
?>

<html>
    <head>
         <script>
          var versuche;
		var checked = false;
			
		window.onload = function()
		{
			versuche = 0;
			document.getElementById("versuche_count").innerHTML = versuche;
		}
		function check()
		{
			var r = document.getElementById('input').value;
				
			if (checked == false)
			{
				if (r == '0')
				{
					checked = true;
					document.getElementById("answer").innerHTML = "richtig";
					versuche++;
					document.getElementById("versuche_count").innerHTML = versuche;
					document.getElementById('answer').style.backgroundColor="green";
					document.getElementById('answer').style.display="block";
					document.getElementById('codebox').style.backgroundColor="green";
				}
				else
				{
					document.getElementById("answer").innerHTML = "falsch";
					versuche++;
					document.getElementById("versuche_count").innerHTML = versuche;
					document.getElementById('answer').style.backgroundColor="red";
					document.getElementById('codebox').style.backgroundColor="red";
					document.getElementById('answer').style.display="block";
				}
			}	
		}
		
        </script>
        <style>
     
           body
		{
			font-size:1.2em;
			background-image: url("img/star.gif");
			color: white;
		}
		
		#versuche
		{
		    color:black;
			position: fixed;
			top: 0;
			right: 0;
			font-size:1.5em;
			font-weight: bold;
			width: 200px;
			height: 30px;
			background-color: yellow;
			border: 2px solid black;
			border-radius: 15px;
			padding: 5px;
			margin: 5px;
		}
		
		#answer
		{
			position: fixed;
			top: 0;
			left: 0;
			font-size:2.0em;
			font-weight: bold;
			width: 200px;
			height: 50px;
			background-color: yellow;
			border: 2px solid black;
			border-radius: 15px;
			padding: 5px;
			margin: 5px;
			display: none;
		}
		
		#codebox
		{
		    z-index: 5;
		    position: relative;
			background-color: lightgreen;
			padding: 10px;
			width: 50%;
			margin-left: auto;
			margin-right: auto;
			z-index: 5;
			color: black;
			margin-bottom:20px;
			border: 5px solid white;
			border-radius:15px;
		}
		#header
		{
			padding-bottom: 10px;
			text-align: center;
			margin-bottom: 20px;
		}
		#footer
		{
			margin-top: 20px;
			margin-bottom: 20px;
			padding-top: 20px;
			padding-bottom: 20px;
			text-align: center;
			z-index: 5;
		    position: relative;
		}
		
		#ausgabe
		{
	        z-index: 5;
		    position: relative;
			margin: auto;
			width: 30%;
			padding-top: 2px;
			padding-bottom: 2px;
			text-align: center;
			background-color: black;
			color: white;
			border: 5px solid white;
			border-radius: 10px;
		}
		
		#mybutton
		{
			color: white;
			width:200px
			height: 50px;
			background-color: darkgreen;
			border: 3px solid white;
			border-radius: 10px;
			padding: 10px;
			cursor: pointer;
		}
              <?php
            
            $n = $thomasclone;
            
            while($x<$n)
            {
              $x++;  
              $timer1 = rand(9,65);
              $timer2 = rand(5,45);
              $timer3 = rand(2,35);
              
              $leftR = rand(1, 100);
            ?>
            .centrum<?php echo $x; ?> 
            {
            	height: 6px;
            	left: <?php echo $leftR; ?>px;
            	position: fixed;
            	top: 5%;
            	width: 1150px;
            	animation: fly_horizontal <?php echo $timer1; ?>s ease-in-out 0s infinite;
            	z-index: 0;
    
            }
            
            .moveY<?php echo $x; ?> 
            {
            	height: 550px;
            	position: fixed;
            	top: <?php echo $leftR; ?>%;
            	width: 150px;
            	animation: rotate <?php echo $timer1; ?>s linear 0s infinite;
            	z-index: 0;
          
           }
           
            #bong<?php echo $x; ?> 
            {
            	bottom: 0px;
            	position: fixed;
                background-image: url("img/thomas.png");
                background-repeat: no-repeat;
                width: 120px;
                height: 158px;
                z-index: 0;
            
            }
                    <?php
    }
?>
       
            
             
    @keyframes fly_horizontal 
    {
        0% { left: -100px;}
        50%{ left : 50%;}
        100%{ left: 100%;}
    }
    
    @keyframes fly_vertical
    {
        0%   {bottom: 0;}
        100% {bottom: 100%;}
    }
    
    
    @keyframes rotate 
    {
        100% {transform: rotate(360deg);}
    }

</style>
</head>

    <body>
           <div class="main">
         
         <div id="header">
		<h1>Schreibtisch Test xD</h1>
		<div id="versuche">Versuche: <span id="versuche_count"></span></div>
		<div id="answer"><span id="okok"></span></div>
		<p>welcome to code quiz - test your coding skill and become a champion</p>
	</div>
	
	<div id="codebox">
<pre class="prettyprint">
public class Main
{
	public static void main (String[] args)
	{
		int zahlen[] = {2, 3, 1, 0, 2};		 
 
		int max = zahlen[<input id="input"  size="1"></input>];
		int min = zahlen[0];

		for(int i = 1; i < zahlen.length; i++)
		{
			if (max < zahlen[i])
			{
				max = zahlen[i];
			}
				
			else if (min > zahlen[i])
			{
				min = zahlen[i];
			}		   		   
		}
		System.out.println("max = " + max + " \nmin = " + min);	
	}	
}
</pre>
</div>
	<div id="ausgabe">
		<b>Output:</b> <br>max: 3 <br>min: 0
	</div>
	
	<div id="footer">
		<span id="mybutton" onclick="check()">CHECK</span>
	</div>
         
        
    <?php
    $i = 0;
    $g = $thomasclone;
    while($i<$g)
    {
      $i++;  
?>
 
        <div class="centrum<?php echo $i; ?>"> 
            <span class="moveY<?php echo $i; ?>">
                <span id="bong<?php echo $i; ?>"></span>
            </span>
        </div>
      
        <?php
    }
?>

    </div>
    </body>
</html>

