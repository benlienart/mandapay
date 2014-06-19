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
              <h3>Shopping cart</h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="index.html">Welcome</a></li>
                <li><a href="index.html">E-commerceCo shop</a></li>
                <li class="active">Shopping cart</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container shopping-cart">
        <div class="row">
          <div class="col-sm-12">
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
                    <img class="img-responsive" src="img/imac.png" alt="...">
                    <div class="item">
                      Product Title #1
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    </div>
                  </td>
                  <td>€339,00</td>
                  <td><input type="number" name="pcs" value="1" class="form-control"></td>
                </tr>
                <tr>
                  <td>
                    <img class="img-responsive" src="img/macbook.png" alt="...">
                    <div class="item">
                      Product Title #2
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    </div>
                  </td>
                  <td>€210,00</td>
                  <td><input type="number" name="pcs" value="1" class="form-control"></td>
                </tr>
                <tr>
                  <td>
                    <img class="img-responsive" src="img/ipad.png" alt="...">
                    <div class="item">
                      Product Title #3
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    </div>
                  </td>
                  <td>€50,00</td>
                  <td><input type="number" name="pcs" value="1" class="form-control"></td>
                </tr>
              </tbody>
            </table>
            <ul class="text-right checkout">
              <li><strong>Total Price</strong>: €599</li>
              <li><strong>Shipping</strong>: Free</li>
              <li><a href="shopping-cart2.php" class="btn btn-lg btn-red">Pay with MandaPay</a></li>
            </ul>
          </div>
        </div> <!-- / .row -->      
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

<?php
include $path."/bas.php";
?>