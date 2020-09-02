@extends ('layout.main')




<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Check your free test now</h2>
						</header>
			
									<form  method="POST" action="{{route('checkemail')}}">
										@csrf 
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
                                        <p></p>        
                                        </div>
											<div class="col-12 col-12-xsmall">
											<h3> Email</h3>
												<input type="email" name="email"0 id="email" value="" placeholder="Email" />
											</div>

											
											
											
											

											<!-- Break -->
											<div class="col-12">
											
</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Get your link now " class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
					</div>
				</div>
			</section>
