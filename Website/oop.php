<?php include('navbar.html'); ?>

<html lang="en">	
	<body>

		<div class="container-fluid bg-1 text-center">
			<h1 class="margin">Object Oriented Programming</h1>
			<p></p>
		</div>

		<div class="container-fluid bg-1 text-center">
			<div class="row">
				<div class="col-sm-6">
					<b>Encapsulation</b>
                    <p>Encapsulation is one of the fundamental concepts in object-oriented programming (OOP). It describes the idea of wrapping data and the methods that work on data within one unit. This puts restrictions on accessing variables and methods directly and can prevent the accidental modification of data. To prevent accidental change, an object’s variable can only be changed by an object’s method. Those types of variables are known as private variable.</p>
                    <p>In this example the <code>self.values</code> can not be externaly edited and is therefore an encapsulated tuple.</p>
                    <img src="images/inherit_parent.png" width="50%" alt="image"/>
                </div>
				<div class="col-sm-6">
                    <b>Inheritance</b>
				    <p>Inheritance is the capability of one class to derive or inherit the properties from another class.</p>
				    <p>Inheritance represents real-world relationships well. It provides reusability of code so code does not have to be rewritten.<br> Also, it allows us to add more features to a class without modifying it, and because It is transitive in nature all the subclasses of a class would automatically be inherited from a parent class.</p>
                    <div align="left" class="col-sm-6">
                        <p align="center">Parent</p>
                        <p align="center">The parent provides access to different functions and can return values to a child class.</p>
                        <img src="images/inherit_parent.png" width="100%" alt="image"/>
                    </div>
                    <div align="right" class="col-sm-6">
                        <p align="center">Child</p>
                        <p align="center">The child can access data fom the parent using the <code>self.</code> prefix. In this example the get_result function uses the parameter <code>self</code> and uses <code>self.values</code> in the code to requests a tuple of floats from the parent class.</p>
                        <img src="images/inherit_child.png" width="97%" alt="image"/>
                    </div>
                </div>
                <div class=""></div>
				<div class="col-sm-6">
				    <b>Polymorphism</b>
                    <p>In programming, polymorphism means the same function name being used for different types.</p>
                    <p>Polymorphism can be used with class methods, inheritance, functions, and objects</p>
                    <p>In this example both classes have the same <code>get_result(self)</code> function but do two different calculations which demonstrates polymorphism.</p>
                    <div class="col-sm-6">
                        <img src="images/inherit_child.png" width="100%" alt="image"/>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/polymorphism.png" width="100%" alt="image"/>
                    </div>

				</div>
				<div class="col-sm-6">
				    <b>Abstraction</b>
                    <p>An abstract class can be considered a blueprint for other classes. It allows you to create a set of methods that must be created within any child classes built from the abstract class.</p>
                    <p>A class which contains one or more abstract methods is called an abstract class. An abstract method is a method that has a declaration but does not have an implementation. </p>
                    <p>In this example the Subtraction class is completing the abstract method of the Math class . </p>
                    <img src="images/abstraction.png" width="50%" alt="">
				</div>
			</div>
		</div>
	</body>
</html>