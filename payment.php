<?php
if (!session_id()) {
	session_start();
} 
?>
<html>
<h1>Payment Method</h1>
<form method="post" action="ticketConfirmation.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
		<p class="text-danger">All fields have to be filled</p>
		<?php } ?>
        <div class="form-group">
            <label for="card_type" class="col-lg-2 control-label">Type</label>
            <div class="col-md-8 col-lg-8">
              	<select class="form-control" name="card_type">
                  	<option value="VISA">VISA</option>
                  	<option value="MasterCard">MasterCard</option>
                  	<option value="American Express">American Express</option>
              	</select>
            </div>
        </div></br>
        <div class="form-group">
            <label for="card_number" class="col-lg-2 control-label">Number</label>
            <div class="col-md-8 col-lg-8">
              	<input type="text" class="form-control" name="card_number">
            </div>
        </div></br>
        <div class="form-group">
            <label for="card_PID" class="col-lg-2 control-label">CVV</label>
            <div class="col-md-8 col-lg-8">
              	<input type="text" class="form-control" name="card_PID">
            </div>
        </div></br>
        <div class="form-group">
            <label for="card_expire" class="col-lg-2 control-label">Expiry Date</label>
            <div class="col-md-8 col-lg-8">
              	<input type="date" name="card_expire" class="form-control">
            </div>
        </div></br>
        <div class="form-group">
            <label for="card_owner" class="col-lg-2 control-label">Name</label>
            <div class="col-md-8 col-lg-8">
              	<input type="text" class="form-control" name="card_owner">
            </div>
        </div></br>
        <div class="form-group">
            <div class="col-md-8 col-lg-8 col-lg-offset-2">
              	<button type="reset" class="btn btn-default">Cancel</button>
              	<button type="submit" class="btn btn-primary">Purchase</button>
            </div>
        </div>
    </form>
</html>