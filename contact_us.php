<?php
$this_page = $_GET['book'] ? 'book' : 'contact';
require_once 'header.php';

$header = 'Contact Us';

if($_POST)
{
    $data = $_POST;
    if($data['name'] && $data['email'] && $data['message'])
    {
      nl2br("You will find the \n newlines in this string \r\n on the browser window.");
        $msg = $data['message'] . ' From: ' . $data['name'].' - '.$data['email'];
        $sent = mail($email, 'Incoming from site!', $msg);
        $success_msg = $sent;
    }
}
?>

<?if($success_msg || $_GET['success']):?>
    <div class="success-container border" style="">
        Dear <?=$data['name']?>,<br>
        Thank you for contacting me.<br> 
        I will get back to you shortly.
        <br><br>
        Have a great <?= (date('H') > 20) ? 'evening' : 'day'?>!
    </div>
<?endif;?>

<div class="contact-section" id="contact">
  <h2 class="mb-4"><?=$header?></h2>

    <div class="contact-us-form">
      
      <div class="contact-us-left">
        <form class="contact-form d-flex flex-column align-items-center" action="" method="POST">
          <div class="form-group w-75">
            <input type="name" class="form-control" placeholder="Name" name="name" required/>
          </div>
          <div class="form-group w-75">
            <input type="tel" class="form-control" placeholder="Phone #" name="phone_number" required/>
          </div>
          <div class="form-group w-75">
            <input type="email" class="form-control" placeholder="Email" name="email"/>
          </div>
          <div class="form-group w-75">
            <textarea class="form-control" type="text" placeholder="Message" rows="7" name="message" required></textarea>
          </div>
          <button type="submit" class="btn btn-submit btn-info w-75">Submit</button>
        </form>
      </div>

      <div class=" contact-us-right border-left">
          <ul class="fa-ul contact-us-icons">
              <li id="mail-address">
                  <i class="fas fa-envelope-open mr-2 contact-icons"></i>
                  <span><?=$email?></span>
              </li>
              <li>
                  <i class="fas fa-mobile-alt mr-2 contact-icons"></i>
                  <span><?=$phone_number?></span>
              </li>
              <li>
                  <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>
                  <a data-fancybox data-type="iframe" style="text-decoration: none" data-src="<?=$google_maps_link?>" href="javascript:;">
                      Ramat Beit Shemesh, Israel
                  </a>
              </li>
          </ul>
      </div>
      
    </div>
  </div>

<?php require_once 'footer.php'?>