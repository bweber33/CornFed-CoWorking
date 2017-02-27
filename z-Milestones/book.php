<?php include('includes/heading.inc.php')?>

<body>
<!-- Brandon Weber
     default.html
     INFO2900.6A
     Brown, Rosas, Paschall, McCune
     12/30/16
      
-->
	
	<?php include('includes/navOther.inc.php');?>
	
	<main class="panel padding border">
	 <form name="bookReq" action="/z-Milestones/_scripts/book_script.php" method="POST">
		<div class="sample col=md=12">
			<section class="row">
				<div class="col-md-12">	
					<h2>Book a Room...</h2>
				</div>
			</section>
			<hr>
			<section class="row">
				<div class="col-lg-6">
					<h3>Room:</h3>
					
						<input type="radio" name="room" id="conRoom1" value="C1"> Conference Room 1<br>
						<input type="radio" name="room" id="conRoom2" value="C2"> Conference Room 2<br>
						<input type="radio" name="room" id="conRoom3" value="C3"> Conference Room 3<br>
						<div id="room_err" class="val_err"></div>
					
				</div>
				<div class="col-lg-6">
					<h3>Will you need...</h3>
					<div class="col-md-6">
						<input type="checkbox" name="Smartboard" id="Smartboard" value="Y"> Smartboard<br>
						<input type="checkbox" name="tv" id="tv" value="Y"> Television<br>
						<input type="checkbox" name="projector" id="projector" value="Y"> Projector<br>
					</div>
					<div class="col-md-6">
						<input type="checkbox" name="phone" id="phone" value="Y"> Telephone<br>
						<input type="checkbox" name="Laptops" id="Laptops" value="Y"> Laptops 
						<br />
						<i>*please indicate the number of laptops needed in the comments section</i><br>
					</div>
					
				</div>
			</section>
			<section class="row">
				<div class="col-lg-6">
					<h3>When:</h3>
					<label class="col-sm-2">Date: </label>
					<select class="control-label col-sm-3" id="month" name="month" size="1">
						  <option> </option>
						  <option>January</option>
						  <option>February</option>
						  <option>March</option>
						  <option>April</option>
						  <option>May</option>
						  <option>June</option>
						  <option>July</option>
						  <option>August</option>
						  <option>September</option>
						  <option>October</option>
						  <option>November</option>
						  <option>December</option>
						</select>
					  
					  <select class="control-label col-sm-2" id="day" name="day">
					   <!---->
						  <option> </option>
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						  <option>6</option>
						  <option>7</option>
						  <option>8</option>
						  <option>9</option>
						  <option>10</option>
						  <option>11</option>
						  <option>12</option>
						  <option>13</option>
						  <option>14</option>
						  <option>15</option>
						  <option>16</option>
						  <option>17</option>
						  <option>18</option>
						  <option>19</option>
						  <option>20</option>
						  <option>21</option>
						  <option>22</option>
						  <option>23</option>
						  <option>24</option>
						  <option>25</option>
						  <option>26</option>
						  <option>27</option>
						  <option>28</option>
						  <option>29</option>
						  <option>30</option>
						  <option>31</option>
						</select>
						
						<select class="control-label col-sm-2" id="year" name="year">
						  <option> </option>
						  <option>2017</option>
						  <option>2018</option>
						</select>
					<br />
					<label class="col-sm-2-push-0">Time: </label>
					<select name="timeStart" id="timeStart"  class="control-label col-sm-2-pull-0" >
						<option value="8a">8a</option>
						<option value="9a">9a</option>
						<option value="10a">10a</option>
						<option value="11a">11a</option>
						<option value="12a">12a</option>
						<option value="1p">1p</option>
						<option value="2p">2p</option>
						<option value="3p">3p</option>
						<option value="4p">4p</option>
						<option value="5p">5p</option>
						<option value="6p">6p</option>
						<option value="7p">7p</option>
						<option value="8p">8p</option>
					</select>
					<select name="timeEnd" id="timeEnd"  class="control-label col-sm-2-push-0" >
						<option value="9a">9a</option>
						<option value="10a">10a</option>
						<option value="11a">11a</option>
						<option value="12a">12a</option>
						<option value="1p">1p</option>
						<option value="2p">2p</option>
						<option value="3p">3p</option>
						<option value="4p">4p</option>
						<option value="5p">5p</option>
						<option value="6p">6p</option>
						<option value="7p">7p</option>
						<option value="8p">8p</option>
						<option value="9p">9p</option>
					</select>
				</div>
				<div class="col-md-6">	
					<h3>Who is Reserving the Room?</h3>
					<div class="form-group" id="userInfo">
						<label class="col-md-3">First Name</label><input type="text" name="F_Name" id="F_Name" autofocus="autofocus" class="col-md-10" >
							<div id="F_Name_err" class="val_err"></div>
						<label class="col-md-3">Last Name</label><input type="text" name="L_Name" id="L_Name" class="col-md-10" >
							<div id="L_Name_err" class="val_err"></div>
						<label class="col-md-3">Email*</label><input type="email" name="email" id="email" class="col-md-10" >
							<div id="email_err" class="val_err"></div>
					</div>
				</div>
			</section>
			<section class="row">
				<div class="col-md-6">	
					<h3>Comments:</h3>
					<textarea name="comments" id="comments" rows="6" class="col-md-12"></textarea>
					<i>max 1000 characters</i>
				
				<div class="col-md-3 pull-right">	
	        <button type="submit" class="btn btn-lgBule" value="send" onclick="validateForm()">Submit <i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i></button>
				</div>	
				<div class="col-md-3 pull-right">
					<button type="reset" class="btn btn-default">Reset <i class="fa fa-refresh" aria-hidden="true"></i></button>
				</div>
				</div>
				<div class="col-md-6">
					<img alt="Brand" src="images/logoBust.png" height="375" width="258" class="flip pull-right img-responsive"/>
				</div>
			</section>
		</div>
	 </form>
	</main>
	
	<?php include('includes/footer.inc.php')?>
</body>
</html>