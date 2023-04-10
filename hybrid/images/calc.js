function calcthis(a)
{ 
var perc = document.getElementById("percent").value;

if (a==1) { 
if (perc == "perc1") {document.getElementById('ress').innerHTML="Your <b>Profit</b> after 1 day";};


}













var planperc=new Array(0,0,0,0,0,0);
var depo = document.getElementById("deposit").value;


if (perc == "perc1") {planperc=Array(150 , 150 , 150 , 150 , 150 , 150);



if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $50")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo > 499)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 999)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 4999)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 9999)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc2") {planperc=Array(200 , 200 , 200 , 200 , 200 , 200);


if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >499)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 999)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 4999)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 9999)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc3") {planperc=Array(250 , 250 , 250 , 250 , 250 , 250);
if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >499)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 999)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 4999)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 9999)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc4") {planperc=Array(300 , 300 , 300 , 300 , 300 , 300);
if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >499)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 999)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 4999)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 9999)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc5") {planperc=Array(500 , 500 , 500 , 500 , 500 , 500);
if ( depo <10)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $10")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >499)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 999)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 4999)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 9999)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};
if (perc == "perc6") {planperc=Array(111 , 111 , 111 , 111 , 111 , 111);
if ( depo <1)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $1")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >1)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 1)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 1)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 1)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc7") {planperc=Array(240 , 240 , 240 , 240 , 240 , 240);
if ( depo <3000)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $3000")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >3000)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 30000)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 30000)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 30000)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc8") {planperc=Array(777 , 777 , 777 , 777 , 777 , 777);
if ( depo <777)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $777")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >777)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 777)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 777)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 777)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 7777)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $7777")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc9") {planperc=Array(1000 , 1000 , 1000 , 1000 , 1000 , 1000);
if ( depo <500)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $500")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >500)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 500)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 500)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 500)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};

if (perc == "perc10") {planperc=Array(2500 , 2500 , 2500 , 2500 , 2500 , 2500);
if ( depo <100)
  {
	document.getElementById("inpvar1").innerHTML = "n/a";
	document.getElementById("inpvar2").innerHTML = "n/a";						
	alert ("Minimal deposit is $100")	
  }  
	else
	  {
	  document.getElementById("inpvar1").innerHTML = planperc[0];
	  document.getElementById("inpvar2").innerHTML = planperc[0] * depo / 100;
	  }
	
	if ( depo >100)
	  {
		document.getElementById("inpvar1").innerHTML = planperc[1];
		document.getElementById("inpvar2").innerHTML = planperc[1] * depo / 100;
		if ( depo > 100)
		  {
			document.getElementById("inpvar1").innerHTML = planperc[2];
			document.getElementById("inpvar2").innerHTML = planperc[2] * depo / 100;
			if ( depo > 100)
			  {
				document.getElementById("inpvar1").innerHTML = planperc[3];
				document.getElementById("inpvar2").innerHTML = planperc[3] * depo / 100;
				if ( depo > 100)
				  {
					document.getElementById("inpvar1").innerHTML = planperc[4];
					document.getElementById("inpvar2").innerHTML = planperc[4] * depo / 100;
					if ( depo > 50000)
					  {
						document.getElementById("inpvar1").innerHTML = "n/a";
						document.getElementById("inpvar2").innerHTML = "n/a";
						alert ("Maximal deposit is $50000")						
					  }
					else
					  {
						document.getElementById("inpvar1").innerHTML = planperc[5];
						document.getElementById("inpvar2").innerHTML = planperc[5] * depo / 100;
					  }
				  }
			  }
		 
		  }
	  }

};


};
 

