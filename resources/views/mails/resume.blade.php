@extends('mails.master')
@section('content')
<h4>Dear Mr./Ms. {{$inbox->name}},</h4>
<br>
<div class="content">
	<p>
		Following up the Resume request that I received from my portfolio at <a href="http://magnificom.dev:8000/dani-lesmiadi">http://magnificom.dev:8000/dani-lesmiadi</a>.
		I am excited to apply to the Web Developer position at your company. <br>
		My background as a Web Developer, along with my education in Information Technology, have allowed me to attain a strong foundation of technical skills. In addition to my Web Development skills, I also possess a great eye for design, and this is what I believe separates me from the rest of the competition.
	</p>
	<p>
		I have set of skills requred to run a web development projects from the Project Management, UI/UX design, Security as well as Back End creation following the required/approved technologies to achieve well coded and tested products. I have over five years of experience with each of these technologies, and I am eager to learn even more technologies to sharpen my skillset. 
	</p>
	<p>
		I'm confident I can be a great addition to your company, and I would love the opportunity to discuss the opportunity with you further. If you have any questions about my background, please do not hesitate to reach out to me at <a class="text-primary" href="mailto:dani.lesmiadi@gmail.com">dani.lesmiadi@gmail.com</a> or +628122443582. I look forward to hearing from you.
	</p>
	<p>
		Sincerely,
	</p>
	<p>
		Dani Lesmiadi.
	</p>
</div>
@stop