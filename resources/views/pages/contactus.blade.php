@extends('layout.app',['title' => 'About Us'])

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="display-5">Contact Us</h2>
        <p class="lead mb-5">We’re here to assist you with any queries or concerns.</p>
    </div>
    <div class="row">
        <div class="col-md-6 info-heading">
            <h4>Our Contact Information</h4>
            <p><strong>Email:</strong> <a style="color: #6a0dad" href="mailto:support@alwaysapply.com">support@alwaysapply.com</a></p>
            <p><strong>Phone:</strong> +123-456-7890</p>
            <p class="break"><strong>Address:</strong> 456 Chandni Chowk Street, Near Red Fort, <br>Old Delhi, New Delhi, Delhi 110006, India</p>
        </div>
        <div class="col-md-6">
            <h4 >Contact Form</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter the subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Write your message"></textarea>
                </div>
                <button type="submit" class="btn contact-btn">Send Message</button>
            </form>
        </div>
    </div>
</div>


@endSection
