<?php include('navbar.html'); ?>

<html lang="en">	
	<body>
		<div class="container-fluid text-center">
			<img src="images/pylint.svg" class="img-responsive" style="display:inline" alt="Pylint">
		</div>
		<div class="container-fluid bg-1 text-center">
			<h3 class="margin">What is Pylint?</h3>
			<p>Pylint is a program that examins python code to ensure it folows the PEP8 standard. It also helps with error detection and refactoring help</p>
		</div>
		<div class="container-fluid bg-1 text-center">
			<div class="row">
				<div class="col-sm-4">
					<b>How to install Pylint</b>
					<br>	    
                    <p>Pylint can be installed on windows with the command <code>pip install pytest-pylint</code> (which is the command used in the examples) or <code>pip install pylint</code></p>	
                </div>
				<div class="col-sm-4">
                    <b>How to use Pylint</b>
				    <p>Pylint can be run in the terminal of Pycharm using the command <code>pytest --pylint</code> as shown in the example below</p>
                <img src="images/pylint.png" width="100%" alt="image"/>
                </div>
				<div class="col-sm-4">
				    <b>OOP Terms</b>
                    <p>Instantiation - The realization of a predefined object</p>
                    <p>Object - This is the basic unit of object-oriented programming. It is both data and function that operate as a unit.</p>
                    <p>Class - A blueprint that defines the nature of a future object. Classes are used to create and manage new objects and support inheritance</p>
                    <p>Namespace - A namespace is a declarative region that provides a scope to the identifiers (the names of types, functions, variables, etc) inside it.</p>
                    <p>Constructor - A special type of subroutine called to create an object. It prepares the new object for use, often accepting arguments that the constructor uses to set required member variables.</p>
                    <p>Fixture - A feature of Pytest that are functions attached to the tests which run before the test function is executed.</p>
                    <p>Type hint - A formal solution to statically indicate the type of a value within your code</p>
                    <p>Type cast - The process of converting one data structure into another.</p>
                    <p>Unit test - Unit tests are automated tests written and run by software developers to ensure that a section of an application behaves as intended.</p>
                    <p>Static - An attribute assigned to functions taht can provide functionality related to an a particular class without requiring the programmer to first create an instance of that class.</p>
                    <p>Class method - The actions that perform operations on a variable. A method accepts parameters as arguments, manipulates these, and then produces an output when the method is called on an object.</p>
                    <p>Facade - An object that serves as a front-facing interface masking more complex underlying or structural code</p>
                    <p>Design patterns - Reusable solutions to commonly occuring problems in the context of software design. </p>
                    <p>Method - THe equivalent of a function in object-oriented programming</p>
                    <p>Property - Describes the characteristics of an object.</p>
				</div>
			</div>
            <div>
                <div>
                    <b>Examples</b>
                </div>
                <div class="col-sm-6">
                    <b>Working Pylint Test</b>
                    <div>
                        <img src="images/pylint.png" width="75%" alt="working pylint">
                    </div>
                </div>
                <div class="col-sm-6">
                    <b>Broken Pylint Test</b>
                    <div>
                        <img src="images/badpylint.png" width="75%" alt="broken pylint">
                    </div>
                </div>
                
            </div>
		</div>

		<footer class="container-fluid bg-1 text-center">
			<p><a href="https://git-scm.com/book/en/v2">Get Pylint here</a></p>
		</footer>
	</body>
</html>