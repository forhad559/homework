<section class="page-section {{$calucateProperty()}}" id="contact">
	<div class="container">
		<!-- Contact Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Contact Section Form-->
		<div class="row justify-content-center mb-4">
			<div class="col-lg-8 col-xl-7">
				
				<x-form action="" method="POST">
					<!-- Name input-->
					<x-InputField classes="form-control" id="name" type="text" placeholder="Enter your name..." label="Full name"></x-InputField>
					
					<!-- Email address input-->
					<x-InputField classes="form-control" id="email" type="email" placeholder="name@example.com" label="Email address"></x-InputField>
					<!-- Phone number input-->
					<x-InputField classes="form-control" id="phone" type="tel" placeholder="(123) 456-7890" label="Phone number"></x-InputField>
					<!-- Message input-->
					<x-TextArea classes="form-control" id="phone" type="tel" placeholder="Enter your message here..." label="Message"></x-TextArea>
					
					<!-- Submit Button-->
					<x-SubmitButton classes="btn btn-primary btn-xl disabled" id="submitButton" type="submit" label="Submit"></x-SubmitButton>
				</x-form>
			</div>
		</div>
	</div>
</section>