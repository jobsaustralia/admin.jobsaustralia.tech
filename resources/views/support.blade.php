@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p class="page-heading"><strong><i class="fa fa-life-ring" aria-hidden="true"></i> Support - Employers FAQ</strong></p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">	Setting An Account</div>
                <div class="panel-body">
                    <p><strong>I forgot my password. What could I do ?</strong></p>
                    <p>Don't worry, it happens to everyone. Click the ‘Forgot Your Password?’ link at the sign in section to enter your email and we'll send you a link to reset your password.</p><br>
                    <p><strong>How do I update my information ?</strong></p>
                    <p>Once you have logged in to your account, click on the drop down arrow next to your name in the top right of the page, and select Settings.</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"> Job Posting</div>
                <div class="panel-body">
                    <p><strong>I am a new user. How do I post an ad ?</strong></p>
                    <p> Before posting your jobs, you will need to create an Employer account with a username and password.</p><br>
                    <p><strong>How do I update my information ?</strong></p>
                    <p> Your ad will appear online right after you finish updating</p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"> Technical Issues</div>
                <div class="panel-body">
                    <p><strong>Getting an error message or having trouble loading a page?</strong></p>
                    <p>Try clearing your browsing history following <a href="https://kb.iu.edu/d/ahic">these instructions</a></p>
                    <p>Also, ensure your <a href="https://updatemybrowser.org/">browser is up to date</a>.</p><br>
                    <p><strong>How can I enable JavaScript ?</strong></p>
                    <p>JobsAustralia.tech requires JavaScript to perform matchmaking, and various other site functions.</p>
                    <p>Follow <a href="http://www.enable-javascript.com/">these instructions</a> to enable JavaScript.</p></br>
                    <p><strong>Tried everything and still having trouble?</strong></p>
                    <p><a href="contact">Contact us</a> to let us know what is going on. Be sure to include as much information about the issue as you can, including: your operating system, web browser and version, anti-virus software you have installed and the page that you encountered the error on.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
