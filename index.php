<?php
 // this can include header.php file in here
 include('include/header.php');
  ?>
  <div class="cstm-tab cstm-margin-top-medium cstm-margin-bottom-medium">
	  	<div class="container">
	  	<div class="row">
	  		<div class="col-md-8">
			  			<!-- quick tabs -->
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs justify-content-md-center" role="tablist">
			    <li class="nav-item">
			      <a class="nav-link " data-toggle="tab" href="#home">Basic Profile</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link active" data-toggle="tab" href="#menu1">Education</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-toggle="tab" href="#menu2">PREFERENCES</a>
			    </li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div id="home" class="container tab-pane fade"><br>
			      <h3>Basic Profile</h3>
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    </div>
			    <div id="menu1" class="container tab-pane active"><br>
			       
					<div class="bg-contact2">
					<div class="container-contact2">
					<div class="wrap-contact2">
					<form class="contact2-form validate-form">
						<span class="contact2-form-title">
							Post Graducation
						</span>
						<div class="wrap-input2 validate-input" data-validate="University is required">
							<input class="input2" type="text" name="name">
							<span class="focus-input2" data-placeholder="UNIVERSITY"></span>
						</div>
						<div class="row">
						<div class="col-4">
						<div class="wrap-input2 validate-input" data-validate="Degree is required">
							<!-- <input class="input2" type="text" name="name">
							<span class="focus-input2" data-placeholder="UNIVERSITY"></span> -->
							 <div class="select">
							 	<select   class="form-control input2 validate-input"  name="degree">
								 <option class="focus-input2"></option>	
								 <option value="1">BCA</option>
	                             <option value="2">BBA</option>
	                             </select>
	                             <span class="focus-input2" data-placeholder="Degree"></span>
							 </div>
						</div>
					
					  </div>
					  <div class="col-8">
						<div class="wrap-input2 validate-input" data-validate="Specialization is required">
							<input class="input2" type="text" name="specitalization">
							<span class="focus-input2" data-placeholder="Specialization"></span>
						</div>
					    </div>
						</div>
						<div class="row">
						<div class="col-8">
						<div class="wrap-input2 validate-input" data-validate="Place is required">
							<input class="input2" type="text" name="place">
							<span class="focus-input2" data-placeholder="Place"></span>
						</div>
					   </div>
					  </div>
					  <div class="row">
					  	<div class="col-6">
						  <div class="wrap-input2 validate-input" data-validate="Date is required">
					  	    <label>From</label>
							<input class="input2" type="date" name="from" >
						</div>
					  	</div>
					  	<div class="col-6">
						<div class="wrap-input2 validate-input" data-validate="Date is required">
					  	    <label>To</label>
							<input class="input2" type="date" name="To" >
						</div>
					  	</div>
					  </div>

						<div class="wrap-input2 validate-input" data-validate="Sample is required">
							<input class="input2" type="text" name="To" >
							<span class="focus-input2" data-placeholder="Sample Text"></span>
						</div>
<!-- 
						<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input2" type="text" name="email">
							<span class="focus-input2" data-placeholder="EMAIL"></span>
						</div> -->
<!-- 
						<div class="wrap-input2 validate-input" data-validate = "Message is required">
							<textarea class="input2" name="message"></textarea>
							<span class="focus-input2" data-placeholder="MESSAGE"></span>
						</div> -->
                       <div class="overflow">
							<div class="">
								<span>
								<button class="cstm-btn">
								<i class="cstm-font-plus"></i>
								<span class="btn-txt">Add-Post-Graduation</span></button>
							</div>
						</div>		
					</form>
					<!-- next -->
						<form class="contact2-form validate-form cstm-margin-top-large">
						<span class="contact2-form-title">
							Work Experience
						</span>
						<div class="wrap-input2 validate-input" data-validate="Organization is required">
							<input class="input2" type="text" name="organization">
							<span class="focus-input2" data-placeholder="Organization"></span>
						</div>
						<div class="wrap-input2 validate-input" data-validate="Designation is required">
							<input class="input2" type="text" name="designation">
							<span class="focus-input2" data-placeholder="Designation"></span>
						</div>
						<div class="row">
						<div class="col-8">
						<div class="wrap-input2 validate-input" data-validate="Place is required">
							<input class="input2" type="text" name="place">
							<span class="focus-input2" data-placeholder="Place"></span>
						</div>
					   </div>
					  </div>
					  <div class="row">
					  	<div class="col-6">
						  <div class="wrap-input2 validate-input" data-validate="Date is required">
					  	    <label>From</label>
							<input class="input2" type="date" name="from" >
						</div>
					  	</div>
					  	<div class="col-6">
						<div class="wrap-input2 validate-input" data-validate="Date is required">
					  	    <label>To</label>
							<input class="input2" type="date" name="To" >
						</div>
					  	</div>
					  </div>
                       <div class="overflow">
							<div class="">
								<span>
								<button class="cstm-btn">
								<i class="cstm-font-plus"></i>
								<span class="btn-txt">Add-Work-Experience</span></button>
							</div>
						</div>		
						<div class="container-contact2-form-btn">
							<div class="wrap-contact2-form-btn">
								<div class="contact2-form-bgbtn"></div>
								<button class="contact2-form-btn">
									Update
								</button>
							</div>
						</div>
					</form>
					</div>
					</div>
					</div>

			    </div>
			    <div id="menu2" class="container tab-pane fade"><br>
			      <h3>PREFERENCES</h3>
			      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
			    </div>
			  </div>
	  		</div>
	  		<!-- next hide show -->
	  		<div class="col-md-4">
			  <div class="cstm-accordion">
			  	<button class="accordion active">Reviews</button>
				<div class="panel panel-active" >
                 <div class="e-box -background-light -radius-bottom h-p2">
			      <div class="media fixed-layout">
			        <div class="media__item">
			              <img alt="Creation-Studio" src="https://s3.envato.com/files/236985902/Creation%20Circle(1).png" width="50" height="50">

			        </div>
			        <div class="media__body">
			          <p class="t-body h-mb1"><strong>Anushal Ghupta</strong></p>
			          <p class="t-body h-my1">Hi Brettonye, Sorry for the inconvenience. We were fixing lots of the bugs in the templates since it release 2 years ago. Almost all common bugs were fixed. If you have any new found please email support@amazingsurge.com, we are here to help. Thank you.</p>
			        </div>
			      </div>

			     </div>
			     <!-- next -->
			     <hr>
			     <div class="e-box -background-light -radius-bottom h-p2">
			      <div class="media fixed-layout">
			        <div class="media__item">
			              <img alt="Creation-Studio" src="https://s3.envato.com/files/236985902/Creation%20Circle(1).png" width="50" height="50">

			        </div>
			        <div class="media__body">
			          <p class="t-body h-mb1"><strong>Anushal Ghupta</strong></p>
			          <p class="t-body h-my1">Hi Brettonye, Sorry for the inconvenience. We were fixing lots of the bugs in the templates since it release 2 years ago. Almost all common bugs were fixed. If you have any new found please email support@amazingsurge.com, we are here to help. Thank you.</p>
			        </div>
			      </div>

			     </div>
			     <hr>
			      <a href="" class="cstm-view-btn">(View more)</a>
			      
				</div>

				<button class="accordion">Section 2</button>
				<div class="panel">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>

				<button class="accordion">Section 3</button>
				<div class="panel">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			  	
			  </div>
	  		</div>
	  	</div>
	  </div>
  </div>
  <?php
 // this can include footer.php file in here
 include('include/footer.php');
 ?>