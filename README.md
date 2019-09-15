 # PHP Unique Visitor Counter without MySQL

Simple PHP Unique Visitor and Hits Counter without MySQL 

### Features

1. Superfast, no overloading
2. Simple  and Easy to use
3. Tiny Size, less than 1kb 



### Structures

The required files are inside `/counter` folder

- counter.php
- iplist.txt
- hits.txt



### How to use

Learn how to use this counter

#### Installation

Just include or require /counter/counter.php in your homepage or wherever you want . 

```php
<?php 
    require __DIR__. '/counter/counter.php'; 
?>
```



#### Make a Hit

to make hit to your total hit counter, use simply this function 

```php
<?php 
    require __DIR__. '/counter/counter.php'; 
	
	// to make hit
	makeHit();	
?>
```



#### Get Total Hits

```php
<?php 
    require __DIR__. '/counter/counter.php'; 
	
	// to get hit
	echo getHit();
?>
```



#### Unique visitors

First of all you have to use this function to add visitor's ip address into your iplist.txt file . 

```php
<?php 
    require __DIR__. '/counter/counter.php'; 
	
	// to save unique visitors ip
	addUniqueIP();	
?>
```

You can use a parameter inside this functions like

```php
// addUniqueIP(YOUR_IP_ADDRESS);	

addUniqueIP('127.0.0.1');

```



If parameter is `NULL` it will automatically catch the ip address of requested client . 





#### Get Unique Visitors

to get total unique visitors count, simply use this function

```php
<?php 
    require __DIR__. '/counter/counter.php'; 
	
	// to get unique visitors ip
	echo getUniqueVisitor();	
?>
```



NOTE : `getHit()` and `getUniqueVisitor()` just return the value, so you have to must print or echo these . 



### Connect me

If you have any query, feel free to contact me at jafranhasan@outlook.com 

[Jafran Hasan](http://jafran.returnxero.com) 

Dhaka Polytechnic Institute . 

www.btebresults.com

www.returnxero.com

