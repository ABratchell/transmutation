<div class="container content-lg">
    <div class="title-v1">
        <h2>Contact Us</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
            It has been the industry's standard dummy text.</p>
    </div>

    <div class="row contacts-in">
        <div class="col-md-6 md-margin-bottom-40">
            <ul class="list-unstyled">
                <li><i class="fa fa-home"></i> 5B Streat, City 50987 New Town US</li>
                <li><i class="fa fa-phone"></i> 1(800) 220 084</li>
                <li><i class="fa fa-envelope"></i> <a href="info@example.com">info@example.com</a></li>
                <li><i class="fa fa-globe"></i> <a href="http://htmlstream.com">www.htmlstream.com</a></li>
            </ul>
        </div>

        <div class="col-md-6">
            <form action="{{URL::to('resources/assets/php/sky-forms-pro/demo-contacts-process.php')}}" method="post" id="sky-form3" class="sky-form contact-style">
                <fieldset>
                    <label>Name</label>
                    <div class="row">
                        <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                            <div>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Email <span class="color-red">*</span></label>
                    <div class="row">
                        <div class="col-md-7 margin-bottom-20 col-md-offset-0">
                            <div>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Message</label>
                    <div class="row">
                        <div class="col-md-11 margin-bottom-20 col-md-offset-0">
                            <div>
                                <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <p><button type="submit" class="btn-u btn-brd btn-brd-hover btn-u-dark">Send Message</button></p>
                </fieldset>

                <div class="message">
                    <i class="rounded-x fa fa-check"></i>
                    <p>Your message was successfully sent!</p>
                </div>
            </form>
        </div>
    </div>
</div>