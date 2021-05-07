@extends('clean-blog.welcome')

@section('content')

<!-- Main Content-->
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as
                possible!</p>
            <form id="contactForm" name="sentMessage" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Name" required
                            data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input class="form-control" id="email" type="email" placeholder="Email Address" required
                            data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required
                            data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Message" required
                            data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br />
                <div id="success"></div>
                <button class="btn btn-primary" id="sendMessageButton" type="submit">Send</button>
            </form>
        </div>
    </div>

@endsection
