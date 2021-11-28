<?php include('navbar.html'); ?>
<html lang="en">
	<body>
		<div class="container-fluid bg-1 text-center">
			<h3 class="margin">Separation of Concerns</h3>
			<p>The most important principle in Software Engineering is the Separation of Concerns.<br> This is the idea that a software system must be decomposed into parts that overlap in functionality as little as possible.</p>
			<p>Separation of concerns tries to reduce coupling and increase cohesion. Information Hiding reduces coupling by isolating the details of the implementation of state.<br> Object Oriented Programming adds another step in the reduction of coupling with the enforcement of encapsulation and the introduction of dynamic binding and polymorphism.<br> Inheritance allows us to increase cohesion by defining hierarchies based on generalization and specialization, in which we can separate the functionality that belongs to the superclass from its subclasses.</p>
		</div>

		<div class="container-fluid bg-1 text-center">
			<div class="row">
				<div class="col-sm-6">
					<b>Coupling</b>
					<br>	    
                    <p> The degree of dependency between two modules. It is best practice to try to have low coupling.</p>
                    <p>This example shows the deependancy of a superclass </p>
                </div>
				<div class="col-sm-6">
                    <b>Cohesion</b>
				    <p>The measure of how strongly-related is the set of functions performed by a module. It is best practice to try to have high cohesion.</p>
                </div>
				<div class="col-sm-12">
				    <b>Example</b>
				    <p>This example shows a good practice of cohesion by using an inherited superclass. This reduces coupling because the function is performed by a module.</p>
                    <img src="images/inherit_child.png" width="25%" alt="image"/>

				</div>
			</div>
		</div>
	</body>
</html>