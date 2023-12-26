<?php



echo "Many developers writing object-oriented applications create one PHP source file per class definition..<br> One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class).<br>

The spl_autoload_register() function registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they are currently not defined.<br> By registering autoloaders, PHP is given a last chance to load the class or interface before it fails with an error.

Any class-like construct may be autoloaded the same way.<br> That includes classes, interfaces, traits, and enumerations.";


?>

<br>
<h2>Example of autoloaded</h2>
<br>
<?php 
	spl_autoload_register(function($className) { 
		$file = $className . '.php'; 
		if (file_exists($file)) { 
			echo "$file included\n"; 
			include $file; 
		} 
		else { 
			throw new Exception("Unable to load $className."); 
		} 
	}); 
	try { 
	$obj1 = new test1(); 
	$obj2 = new test10(); 
	} catch (Exception $e) { 
	echo $e->getMessage(), "\n"; 
	} 
?>


