<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact Us | Telaverge Communications India</title>
  <meta name="keywords" content="Contact Us | Telaverge Communications India">
  <meta name="description" content="Telaverge Communications India">
  <meta name="author" content="Telaverge Communications India">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include ('include/head.php'); ?>
</head>
<body class="fixed-header">
  <div class="page-box">
    <div class="page-box-content">
      <header class="header header-two">
        <?php include ('include/header.php'); ?>
      </header><!-- .header -->
      <div class="full-width-box" style="padding: 2.5rem 0 3.75rem 0;">
        <div class="fwb-bg cm-gradient">
          <div class="overlay"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="content-box col-sm-6 col-md-6">
              <h4 class="title light white">Contact Us</h4>
              <p class="description white">
                We are ready to help!<br>
              </p>
            </div>
          </div>
        </div>
      </div><!-- .full-width-box -->
      <div class="breadcrumb-box">
        <div class="container">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div><!-- .breadcrumb-box -->
      <div class="clearfix" style="padding-bottom: 1.5625rem;"></div>
      <section id="main">
        <div class="container">
          <div class="row">
            <div class="content col-sm-12 col-md-12">
              <div class="row">
                <div class="col-sm-6 col-md-6 contact-info">
                  <div class="row">
                    <address class="col-sm-6 col-md-6">
                      <div class="title">CUSTOMER SUPPORT</div>
                      <div>Support: <a href="tel:+1-(214)-299-5132">+1-(214)-299-5132</a></div>
                    </address>
                    <address class="col-sm-6 col-md-6">
                      <div class="title">EMAIL ADDRESS</div>
                      <div>Support: <a href="mailto:support@telaverge.com">support@telaverge.com</a></div>
                      <div>Sales: <a href="mailto:sales@telaverge.com">sales@telaverge.com</a></div>
                      <div>Info: <a href="mailto:info@telaverge.com">info@telaverge.com</a></div>
                    </address>
                    <address class="col-sm-6 col-md-6">
                      <div class="title">HEAD OFFICE</div>
                      <div><strong>USA: </strong></div>
                      <div>Telaverge Communications <br />8229 Fountain Ridge,<br />
                        Plano TX,<br />
                        United States</div>
                    </address>
                    <address class="col-sm-6 col-md-6">
                      <div class="title"> R&D CENTER</div>
                      <div><strong>INDIA: </strong></div>
                      <div>Telaverge Communications, <br />Silver Software Campus <br />KIADB Export Promotion
                        Industrial Area, <br />Whitefield, Bengaluru,<br /> Karnataka 560066</div>
                    </address>
                  </div>
                  <hr>
                  <p style="padding-bottom: 1.5rem;">Telaverge is a global communications and technology provider having a team of 100+ Strong
                    Engineering force
                    based out of Dallas, Texas with the India Development Centre in Bangalore.</p>
                </div>
                <div class="col-sm-6 col-md-6 bottom-padding" style="margin-bottom: 1.25rem; margin-top: 2.5rem;">
                  <form action="contact-us.php" class="form-box register-form contact-form" method="post">
                    <h3 class="title"> Contact Us</h3>
                    <label for="name">Name: <span class="required">*</span></label>
                    <input class="form-control" type="text" id="name" name="Name" required>
                    <label for="email">Email: <span class="required">*</span></label>
                    <input class="form-control" type="email" id="email" name="Email" required>
                    <label for="phone">Phone: </label> <span class="required">*</span></label>
                    <input class="form-control" type="tel" id="phone" name="Phone" pattern="[0-9]{10}" required>
                    <label>Comment: <span class="required">*</span></label>
                    <textarea class="form-control" name="comment" required></textarea>
                    <Button class="btn btn-default">Submit</Button>
                  </form>
                </div>
                <div class="map-box col-sm-12 col-md-12" style="margin-bottom: 2.5rem;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62205.79338853484!2d77.68916167365087!3d12.98067149677379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae11f315ad87c9%3A0x2fe6c3b136665877!2sTelaverge%20Communications%20India%20Pvt.%20Ltd.%2C%20KIADB%20Export%20Promotion%20Industrial%20Area%2C%20Whitefield%2C%20Bengaluru%2C%20Karnataka!3m2!1d12.9805902!2d77.72418139999999!5e0!3m2!1sen!2sin!4v1578162275594!5m2!1sen!2sin" width="1000" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
              </div>
            </div>
          </div>
        </div><!-- .container -->
      </section><!-- #main -->
    </div><!-- .page-box-content -->
  </div><!-- .page-box -->
  <footer id="footer">
    <?php include ('include/footer.php'); ?>
  </footer>
  <div class="clearfix"></div>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>