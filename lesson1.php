<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<h1>arithmetic operators</h1>
		<table border="1">	
		  <tr>	
		  	<th>Operator</th>
		  	<th>Name</th>
		  	<th>description</th>
		  	<th>Example</th>
		  	<th>Result</th>
		  </tr>
		  <tr>
		  	<td>+</td>
		  	<td>Addition</td>
		  	<td>Sum of $x and $y</td>
		  	<td><?php $code = '<?php $x=10; $y=6; echo $x+$y; ?>';
		  		echo '<pre>' . htmlspecialchars($code) . '</pre>';?>	
		  	</td>
		  	<td><?php $x=10; $y=6; echo $x+$y; ?></td>
		  </tr>
		  <tr>
		  	<td>-</td>
		  	<td>Subtraction</td>
		  	<td>Difference of $x and $y</td>
		  	<td><?php $code='<?php $x=10; $y=6; echo $x-$y; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?>
		  	 </td>
		  	<td><?php $x=10; $y=6; echo $x-$y; ?></td>
		  </tr>
		  <tr>
		  	<td>*</td>
		  	<td>Multiplication</td>
		  	<td>Product of $x and $y</td>
		  	<td><?php $code='<?php $x=7; $y=3; echo $x*$y; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
		  	<td><?php $x=7; $y=3; echo $x*$y; ?></td>
		  </tr>
		  <tr>
		  	<td>/</td>
		  	<td>Division</td>
		  	<td>Quotient of $x and $y</td>
		  	<td><?php $code='<?php $x=16; $y=8; echo $x/$y; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
		  	<td><?php $x=16; $y=8; echo $x/$y; ?></td>
		  </tr>
		  <tr>
		  	<td>%</td>
		  	<td>Modulus</td>
		  	<td>Remainder of $x divided by $y</td>
		  	<td><?php $code='<?php $x=10; $y=3; echo $x%$y; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
		  	<td><?php $x=10; $y=3; echo $x%$y; ?></td>
		  </tr>
		  <tr>
		  	<td>**</td>
		  	<td>Exponentiation</td>
		  	<td>Result of raising $x to the $y'th power</td>
		  	<td><?php $code='<?php $x=2; $y=3; echo $x ** $y; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
		  	<td></td>
		  </tr>
		</table>

		<h1>Assignment Operators</h1>
		<table border="1">
			<tr>
				<th>Operator</th>
				<th>Same as</th>
				<th>description</th>
				<th>example</th>
				<th>result</th>
			</tr>
			<tr>
				<td>x = y</td>
				<td>x = y</td>
				<td>The left operand gets set to the value of the expression on the right</td>
				<td><?php $code='<?php $x=2; $y=3; echo $x; echo $y; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
		       <td><?php $x=2; $y=3; echo $x.'<br>'; echo $y; ?></td>
			</tr>
			<tr>
				<td>x += y</td>
				<td>x = x + y</td>
				<td>Addition</td>
				<td><?php $code='<?php $x=20; $x+=100; echo $x; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
				<td><?php $x=20; $x+=100; echo $x; ?></td>
			</tr>
			<tr>
				<td>x -= y</td>
				<td>x = x - y</td>
				<td>Subtraction</td>
				<td><?php $code='<?php $x=50; $x-=30; echo$x; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
				<td><?php $x=50; $x-=30; echo$x; ?></td>
			</tr>
			<tr>
				<td>x *= y</td>
				<td>x = x * y</td>
				<td>Multiplication</td>
				<td><?php $code='<?php $x=5; $x*=6; echo $x; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
				<td><?php $x=5; $x*=6; echo $x; ?></td>
			</tr>
			<tr>
				<td>x /= y</td>
				<td>x = x / y</td>
				<td>Division</td>
				<td><?php $code='<?php $x=100; $x/=4; echo $x; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
				<td><?php $x=100; $x/=4; echo $x; ?></td>
			</tr>
			<tr>
				<td>x %= y</td>
				<td>x = x % y</td>
				<td>Modulus</td>
				<td><?php $code='<?php $x=15; $x%=4; echo $x; ?>'; 
		       echo '<pre>' . htmlspecialchars($code) . '</pre>'; ?></td>
				<td><?php $x=15; $x%=4; echo $x; ?></td>
			</tr>
		</table>
</body>
</html>