<?php include('head.php'); ?>
<body>
  <div class="geo-framework">
    <?php include('nav.php'); ?>
    <main class="geo-framework__content">
      <?php include('header.php'); ?>

      <div class="geo-content">
        <div class="geo-content__row geo-row--title">
          <h1>Alerts</h1>
        </div>
        <div class="geo-content__row">
          <h2>Sweet Alert</h2>
            <a class="geo-button" onclick='swal("Your message here")'>Simple message</a>
            <a class="geo-button geo-button--action" onclick='swal("Good job!", "You clicked the button!", "success")'>Success message</a>
            <a class="geo-button geo-button--error" onclick='swal({   title: "Are you sure?",   text: "You will not be able to recover this imaginary file!",   type: "warning",   showCancelButton: true,   confirmButtonText: "Yes, delete it!",   closeOnConfirm: false }, function(){   swal("Deleted!", "Your imaginary file has been deleted.", "success"); });'>Confirmation message</a>
          </div>
        </div>
      </main>
    </div>
  </body>