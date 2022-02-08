<?php require '../nonpublic/utils/pdo.php'?>
<?php require '../nonpublic/utils/functions.php'?>


<section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product Pricing</h2>
          <p>
            Here at Philip's Cheese we pride ourselves in our pricing for our products as we thrive to be the best on the market in this area
          </p>
        </div>

        <div class="row">
        <?php
        $products = findAll($pdo, 'items');
        foreach($products as $product){
          echo '<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">';
          echo '<div class="box">';
          echo '<h3>'.$product['name'].'</h3>';
          echo '  <h4><sup>£</sup>'.$product['price'].'<span>per/kg</span></h4>';
          echo '<ul>';
          echo '<li><i class="bx bx-check"></i> '.$product['description'].'</li>';
          // echo '<li><i class="bx bx-check"></i> Fermented in Northampton</li>';
          // echo '<li><i class="bx bx-check"></i> Aged to at least 6 months</li>';
          echo '</ul>';
          echo '<a href="#" class="buy-btn">Purchase</a>';
          echo '</div>';
          echo '</div>';




          
        }
        
        ?>





          

          

        </div>

      </div>
    </section>