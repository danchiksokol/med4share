<!-- main start -->
<!-- ================ -->
<div class="main col-md-12">

    <!-- page-title start -->
    <!-- ================ -->
    <h1 class="page-title">Contact Us</h1>
    <!-- page-title end -->
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>
            <div class="alert alert-success hidden" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>
            <div class="alert alert-error hidden" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
            </div>
            <div class="contact-form">
                <form id="contact-form" role="form">
                    <div class="form-group has-feedback">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                        <i class="fa fa-envelope form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="subject">Subject*</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                        <i class="fa fa-navicon form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="message">Message*</label>
                        <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                        <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-default">
                </form>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
<!-- main end -->



<script>
    // Contact forms validation
    //-----------------------------------------------
    if($("#contact-form").length>0) {
        $("#contact-form").validate({
            submitHandler: function(form) {

                var submitButton = $(this.submitButton);
                submitButton.button("loading");

                $.ajax({
                    type: "POST",
                    url: "php/contact-form.php",
                    data: {
                        "name": $("#contact-form #name").val(),
                        "email": $("#contact-form #email").val(),
                        "subject": $("#contact-form #subject").val(),
                        "message": $("#contact-form #message").val()
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data.response == "success") {

                            $("#contactSuccess").removeClass("hidden");
                            $("#contactError").addClass("hidden");

                            // Reset Form
                            $("#contact-form .form-control")
                                .val("")
                                .blur()
                                .parent()
                                .removeClass("has-success")
                                .removeClass("has-error")
                                .find("label")
                                .removeClass("hide")
                                .parent()
                                .find("span.error")
                                .remove();

                            if(($("#contactSuccess").position().top - 80) < $(window).scrollTop()){
                                $("html, body").animate({
                                    scrollTop: $("#contactSuccess").offset().top - 80
                                }, 300);
                            }

                        } else {

                            $("#contactError").removeClass("hidden");
                            $("#contactSuccess").addClass("hidden");

                            if(($("#contactError").position().top - 80) < $(window).scrollTop()){
                                $("html, body").animate({
                                    scrollTop: $("#contactError").offset().top - 80
                                }, 300);
                            }

                        }
                    },
                    complete: function () {
                        submitButton.button("reset");
                    }
                });
            },
            // debug: true,
            errorPlacement: function(error, element) {
                error.insertBefore( element );
            },
            onkeyup: false,
            onclick: false,
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please specify your name",
                    minlength: "Your name must be longer than 2 characters"
                },
                email: {
                    required: "We need your email address to contact you",
                    email: "Please enter a valid email address e.g. name@domain.com"
                },
                subject: {
                    required: "Please enter a subject"
                },
                message: {
                    required: "Please enter a message",
                    minlength: "Your message must be longer than 10 characters"
                }
            },
            errorElement: "span",
            highlight: function (element) {
                $(element).parent().removeClass("has-success").addClass("has-error");
                $(element).siblings("label").addClass("hide");
            },
            success: function (element) {
                $(element).parent().removeClass("has-error").addClass("has-success");
                $(element).siblings("label").removeClass("hide");
            }
        });
    };
</script>