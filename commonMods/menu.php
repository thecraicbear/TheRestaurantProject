<head>

<style type="text/css">

.menuContainer {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	border: thick double #f1dca7;
	height:590px;
	width: 150px;
	position:absolute;
	margin-left:100px;
	color: #f1dca7;
	}
	
.menuContainer ul { 
	display: block;
}

.menuContainer ul li {
	display: block;	
}

.menuContainer ul li ul {
	
	display: none;	
	background: #4d4d4d;
	color: black;
}

.menuContainer ul li ul li {	
	color: #f1dca7;
	font-weight: normal;
}

.menuContainer ul li:hover {
	background:#f1dca7 ;
	color: #4d4d4d;
	cursor:pointer;

}

.menuContainer ul li ul li:hover {
	background:#f1dca7;
	color: #4d4d4d;
	cursor:pointer;
}

.menuContainer ul li:hover ul {
	display: block;
	cursor:pointer;
}
					
		
</style>

</head>

<body>

<div class="menuContainer">

<ul>
	<li>Menu
	<ul>
		<li><a href="Menu_Food.php">Food</a></li>
		<li><a href="Menu_Drinks.php">Drinks</a></li>
	</ul>
	</li>
	<li><a href="Reservations.php">Reservations</a></li>
	<li><a href="Events.php">Events</a></li>
	<li><a href="Find_us.php">Find Us</a></li>
</ul>


</div>


</body>
