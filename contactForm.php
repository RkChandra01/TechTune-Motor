<style>
  /* Define a custom class for the light shade color */
  .light-shade {
    background-color: #f2f2f2 !important; /* Use !important to ensure the style takes precedence */
  }
</style>

<div class="col-md-8"> <!-- start 1st column-->
  <form action="" method="POST">
    <input type="text" class="form-control light-shade" name="name" placeholder="Name"><br>
    <input type="text" class="form-control light-shade" name="subject" placeholder="Subject"><br>
    <input type="email" class="form-control light-shade" name="email" placeholder="Email"><br>
    <textarea class="form-control light-shade" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
    <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
  </form>
</div> <!-- End of 1st column-->
