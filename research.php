<?php require_once('header.php'); ?>
            <article id="research">
              <header class="article-header">
                <h1>Motorcycle Buyer's Guide</h1>
                <p class="subtitle h4">Find your perfect ride fast and easy!</p>
              </header>

              <section>
                <h2>Research by Type</h2>

                
                <div class="type-list">
                  <?php require_once('research-type.php'); ?>
                </div>
                
              </section>
              
              <section>
                <h2>Research by Make</h2>
                
                <div class="make-list">
                  <?php require_once('research-make.php'); ?>
                </div>
                
              </section>
            </article>
        
<?php require_once('footer.php'); ?>