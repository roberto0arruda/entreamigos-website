@extends('layouts.site')

@section('title', 'Contact')

@section('content')
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Contact <small>Me</small></h1>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Home</a>
    </li>
    <li class="breadcrumb-item active">Contact</li>
</ol>

<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d103253.67736221933!2d-59.993382485465595!3d-3.0773937559119955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1545083485106"
            width="100%" height="380px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
            Críciuma 2011<br>
            Manaus, Amazonas - CEP 90210<br>
        </p>
        <p>
            <abbr title="Phone">P</abbr>: (12) 3456-7890
        </p>
        <p>
            <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@entreamigos.com</a>
        </p>
        <p>
            <abbr title="Hours">H</abbr>: Segunda - Sexta: 9:00 AM to 5:00 PM
        </p>
    </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <h3>Send us a Message</h3>
        <form name="sendMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="6" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>

            <div id="success"></div>

            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
        </form>
    </div>
</div>
<!-- /.row -->
@endsection