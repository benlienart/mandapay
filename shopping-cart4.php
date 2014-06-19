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
              <h3>Order confirmation</h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="index.html">Welcome</a></li>
                <li><a href="index.html">E-commerceCo shop</a></li>
                <li class="active">Order confirmation</li>
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
			<h3 class="headline"><span>Order confirmation</span></h3>
			 <div class="info-board info-board-blue">
<h4>Your order is confirmed !</h4>
</div>
			 

            </div>	
        </div> <!-- / .row -->      
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

<?php
include $path."/bas.php";
?>