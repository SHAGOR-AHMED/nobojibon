
<div class="banner-area">
    <img alt="" src="<?= base_url('assets/frontend/'); ?>images/banner/in-7.png">
    <h1>Contact Us</h1>
</div>

<section class="inner-area">
    <div class="container">
       <div class="inner-box">
	        <div class="col-md-6 col-sm-6 col-xs-12">
	            <div class="contact-text">
	                <h2 class="contact_address">Address</h2>
	                <h5>Contact Person:</h5>
					<p>
						<?= $contactus->contact_person; ?>
					</p>
					<h5>Head Office:</h5>
					<p>
						<?= $contactus->head_office; ?>
					</p>
	            </div>
	        </div>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	            <div class="contact-text">
	                <h2>Contact With Us!</h2>
	                <?php 
					    if(!empty($message)){
					?>
					    <div class="alert alert-block alert-success">
					        <button type="button" class="close" data-dismiss="alert">
					            <i class="ace-icon fa fa-times"></i>
					        </button>

					        <i class="ace-icon fa fa-check green"></i>
					        <?php echo $message; ?>
					    </div>

					<?php } ?>
	                <form method="post" action="<?= base_url('Welcome/sendContactMail');?>" class="form-horizontal" style="margin-top:20px;">
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <input class="form-control con" id="name" name="name" placeholder="Enter Name" type="text">
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <input class="form-control con" id="subject" name="subject" placeholder="Enter Subject" type="text">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <input class="form-control con" id="email" name="email" placeholder="Enter Email" type="email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <textarea rows="3" cols="3" name="comments" class="form-control con" placeholder="Enter Comments"></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="col-sm-12">
	                            <button type="submit" class="btn btn-submit">Submit</button>
	                        </div>
	                    </div>
	                </form>
	             </div>  
	         </div>
	         <div class="col-md-12 col-sm-12 col-xs-12">
	         	<div class="contact-text box">
	            <h2>Geographical Area!</h2>
				<table style="border-color: #120d0d;" cellspacing="0" cellpadding="0" border="2">
					<tbody>
						<tr>
							<td><p><b><strong>District</strong></b></p></td>
							<td><p><b><strong>Upazila</strong></b></p></td>
							<td><p><b><strong>No. of Union</strong></b></p></td>
							<td><p><b><strong>No. of Village</strong></b></p></td>
						</tr>
						<tr>
							<td rowspan="7"><p>Satkhira</p></td>
							<td><p>Satkhira Sadar</p></td>
							<td><p>14</p></td>
							<td><p>121</p></td>
						</tr>
						<tr>
							<td><p>Tala</p></td>
							<td><p>05</p></td>
							<td><p>42</p></td>
						</tr>
						<tr>
							<td><p>Kaligonj</p></td>
							<td><p>02</p></td>
							<td><p>09</p></td>
						</tr>
						<tr>
							<td><p>Assasuni</p></td>
							<td><p>04</p></td>
							<td><p>22</p></td>
						</tr>
						<tr>
							<td><p>Debhata</p></td>
							<td><p>02</p></td>
							<td><p>11</p></td>
						</tr>
						<tr>
							<td><p>Shaymnagor</p></td>
							<td><p>03</p></td>
							<td><p>13</p></td>
						</tr>
						<tr>
							<td><p>Kolaroa</p></td>
							<td><p>03</p></td>
							<td><p>12</p></td>
						</tr>
						<tr>
							<td rowspan="2"><p>Jessore</p></td>
							<td><p>Monirampur</p></td>
							<td><p>01</p></td>
							<td><p>03</p></td>
						</tr>
						<tr>
							<td><p>Keshobpur</p></td>
							<td><p>01</p></td>
							<td><p>03</p></td>
						</tr>
						<tr>
							<td rowspan="2"><p>Khulna</p></td>
							<td><p>Dumuria</p></td>
							<td><p>02</p></td>
							<td><p>06</p></td>
						</tr>
						<tr>
							<td><p>Paikgasa</p></td>
							<td><p>01</p></td>
							<td><p>04</p></td>
						</tr>
						<tr>
							<td rowspan="2"><p>Sylhet</p></td>
							<td><p>Sylhet Sadar</p></td>
							<td><p>04</p></td>
							<td><p>13</p></td>
						</tr>
						<tr>
							<td><p>Jaintapur</p></td>
							<td><p>04</p></td>
							<td><p>15</p></td>
						</tr>
						<tr>
							<td><p>Naogoan</p></td>
							<td><p>Mohadevpur</p></td>
							<td><p>01</p></td>
							<td><p>10</p></td>
						</tr>
						<tr>
							<td rowspan="4"><p>Cox's Bazar</p></td>
							<td><p>Cox's Bazar Sadar</p></td>
							<td><p>02</p></td>
							<td><p>08</p></td>
						</tr>
						<tr>
							<td><p>Ramu</p></td>
							<td><p>01</p></td>
							<td><p>02</p></td>
						</tr>
						<tr>
							<td><p>Ukhia</p></td>
							<td><p>01</p></td>
							<td><p>02</p></td>
						</tr>
						<tr>
							<td><p>Inani</p></td>
							<td><p>01</p></td>
							<td><p>02</p></td>
						</tr>
					</tbody>
				</table>
	         </div>
        </div>
    </div>
</section>