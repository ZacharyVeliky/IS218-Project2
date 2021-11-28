<?php include('navbar.html'); ?>

<html lang="en">
	<body>
		<div class="container-fluid bg-1 text-center">
			<h1>What is AAA Testing?</h1>
			<p>AAA Testing stands for Arrange, Act, and Assert testing. This is the process of testing code to ensure it behaves as expected.<br> AAA testing is important because it ensures the code works with a verity of different parameters. </p>
		</div>

		<div class="container-fluid bg-1 text-center">
			<div class="row">
				<div class="col-sm-4">
					<b>Arrange</b>
                    <p>The first step of a unit test application. Here we will arrange the test, in other words we will do the necessary setup of the test. For example, to perform the test we need to create an object of the targeted class, if necessary, then we need to create mock objects and other variable initialization, something like this.</p>
                </div>
				<div class="col-sm-4">
                    <b>Act</b>
				    <p> This is the middle step of a unit test application. In this step we will execute the test. In other words we will do the actual unit testing and the result will be obtained from the test application. Basically we will call the targeted function in this step using the object that we created in the previous step.</p>
                </div>
				<div class="col-sm-4">
				    <b>Assert</b>
                    <p>This is the last step of a unit test application. In this step we will check and verify the returned result with expected results.</p>
				</div>
			</div>
            <div>
                <div>
                    <b>Examples</b>
                </div>
                <div class="col-sm-6">
                    <b>Simple unit test</b>
                    <p></p>
                    <div>
                        <img src="images/add_test.png" width="75%" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <b>Unit Test Using External data</b>
                    <div>
                        <img src="images/add_test_ext.png" width="75%" alt="">
                    </div>
                </div>
            </div>
		</div>
	</body>
</html>