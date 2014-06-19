<?php
$path = ".";

$title = "Mandapay - démonstration E-commerceCo";

$noindex = true;

include $path."/haut.php";
?> 

    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3>Register with Mandapay</h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="index.html">Welcome</a></li>
                <li><a href="index.html">E-commerceCo shop</a></li>
                <li class="active">Register with Mandapay</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container shopping-cart">
        <div class="row">
          <div class="col-sm-4">
		  	<h3 class="headline"><span>Order sum-up</span></h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>3 items to buy</th>
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="item">
                      Product Title #1
                    </div>
                  </td>
                  <td>€339,00</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>
                    <div class="item">
                      Product Title #2
                    </div>
                  </td>
                  <td>€210,00</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>
                    <div class="item">
                      Product Title #3
                    </div>
                  </td>
                  <td>€50,00</td>
                  <td>1</td>
                </tr>
              </tbody>
            </table>
            <ul class="text-right checkout">
              <li><strong>Total Price</strong>: €599</li>
              <li><strong>Shipping</strong>: Free</li>
            </ul>
          </div>
          <div class="col-sm-8">
			<h3 class="headline"><span>Pay with a SEPA SDD mandate</span></h3>
			 <div class="row">
			 			     <div class="col-sm-4">
				</div>
			     <div class="col-sm-4">
				<a href="index.html"><img class="img-responsive" src="img/logo.png" alt="..."></a>
								<br/>
								<h4 class="text-center ; color: #e9e9e9">Or</h4>

				</div>
							     <div class="col-sm-4">
				</div>
              <div class="col-sm-6">
                <!-- Panel default -->
                <div class="panel panel-default">
                  <div class="panel-heading">Register with Mandapay</div>
                  <div class="panel-body">
					<form role="form">
					<div class="form-group">
					<input type="prenom" class="form-control" id="name" placeholder="Name" style="width: 280px;">
					</div>
					<div class="form-group">
					<input type="nom" class="form-control" id="surname" placeholder="Surname" style="width: 280px;">
					</div>					
					<div class="form-group">
					<input type="adresse" class="form-control" id="address" placeholder="Address" style="width: 280px;">
					</div>			
					<div class="form-group">
					<input type="cp" class="form-control" id="zipcode" placeholder="Zip code" style="width: 280px;">
					</div>	
					<div class="form-group">
					<input type="ville" class="form-control" id="city" placeholder="City" style="width: 280px;">
					</div>					
					<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Email" style="width: 280px;">
					</div>
					<div class="form-group">
					<input type="mobile" class="form-control" id="cell" placeholder="Cell" style="width: 280px;">
					</div>
            </form>

				  </div>
                </div>
				                <!-- Panel default -->
                <div class="panel panel-default">
                  <div class="panel-heading">Your bank account number</div>
                  <div class="panel-body">
					<form role="form">
					<div class="form-group">
					<input type="BIC" class="form-control" id="BIC" placeholder="BIC" style="width: 280px;">
					</div>
					<div class="form-group">
					<input type="IBAN" class="form-control" id="IBAN" placeholder="IBAN" style="width: 280px;">
					</div>					
              <a href="shopping-cart3.php"  class="btn btn-lg btn-red">Pay</a>	
            </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-6" style="border-left: 1px solid;border-left-color: #e9e9e9;">
                <!-- Panel red -->
				
                <div class="panel panel-default">				
                  <div class="panel-heading">Already registered with Mandapay ?</div>
                  <div class="panel-body">
					<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="Email" style="width: 280px;">
					</div>
					<div class="form-group">
					<input type="mdp" class="form-control" id="mdp" placeholder="Password" style="width: 280px;">
					</div>					
				<a href="shopping-cart3.php"  class="btn btn-lg btn-red">Pay</a>
				
			</form>
                  </div>

                </div>
				 <br/>
				<br/>
				<br/>
				<br/>				
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>				
				<br/>
				<br/>
				<br/>
				<br/>
              </div>
              </div>
              </div>
			  
            </div>
			 <div class="row">
              <div class="col-sm-6">

              </div>
            </div>
			
			
		  </div>
        </div> <!-- / .row -->      
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

<?php
include $path."/bas.php";
?>