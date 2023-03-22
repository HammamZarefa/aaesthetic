
@include('layouts.header')

<!-- Contact us -->
<div class="contact-us">
	<div class="container">
		<h2 class="main-title">
			<img src="images/icon.png" class="img-responsive">
			<span>Contact Us</span>
		</h2>
		<form class="form-group">
			<div class="group two">
				<input type="text" placeholder="Name" required>
			</div>
			<div class="group two">
				<input type="email" placeholder="Email" required>
			</div>
			<div class="clear"></div>
			<div class="group two">
				<input type="tel" placeholder="Phone" required>
			</div>
			<div class="group two">
				<input type="text" placeholder="Subject" required>
			</div>
			<div class="clear"></div>
			<div class="group">
				<textarea placeholder="Your Message ..." required></textarea>
			</div>
			<div class="group">
				<button type="submit"><i class="fab fa-telegram-plane"></i> Send</button>
			</div>
		</form>
	</div>
</div>
<!-- ./Contact us -->

@include('layouts.footer')