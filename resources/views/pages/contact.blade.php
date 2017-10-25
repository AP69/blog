  @extends('pages.main')
  @section('content')
  @section('title', '|Contact')
  
					<div class="row">
					<div class="col-md-12">
					<h1>Contact Me!xxxx</h1>
					<hr>
					<form>
					<div class="form-group">
						<label name="email">Email:</label>
						<input id="email" name="Email" class="form-control">
					</div>
					<div class="form-group">
						<label name="subject">Subject:</label>
						<input id="subject" name="Subject" class="form-control">
					</div>
					<div class="form-group">
						<label name="Message">Message!:</label>
						<textarea id="message" name="Message=" class="form-control">Type your message........here</textarea>
					</div>
						
						<input type="submit" value="Send Message" class="btn btn-success">
					</form>
				</div>
				</div>
@endsection