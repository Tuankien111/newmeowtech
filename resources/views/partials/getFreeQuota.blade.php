<div class="col-xl-5 col-lg-6">
    <div class="contact-form-box shadow-box mb--30">
        <h3 class="title">{{ __('Get a free quote now') }}</h3>
        <form id="form-contact" action="" method="post">
            <div class="form-group">
                <label for="name">{{ __('Name') }}:</label><br>
                <input type="text" id="name" name="name"><br>
            </div>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group mb--40">
                <label for="phone">{{ __('Phone') }}:</label><br>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="company">{{ __('Company') }}:</label><br>
                <input type="text" id="company" name="company">
            </div>
            <div class="form-group mb--40">
                <label>{{ __('How can we help you?') }}</label>
                <textarea name="message" id="message" class="form-control textarea" cols="30" rows="4"></textarea>
            </div>
            <input id="btn_submit_contact" type="submit"
                class="axil-btn btn-fill-primary btn-fluid btn-primary" name="btn_submit_contact"
                value="{{ __('Get Pricing Now') }}" />
            <!-- <p id="add-contact" style="color: green; margin-top: 20px">Email has been sent successfully</p> -->
            <div class="" id="success" style="display:none; margin: 20px; color: green;">
                <a href="{{ route('home') }}" class="close" data-dismiss="alert"
                    aria-label="close">×</a>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#btn_submit_contact').on('click', function() {
                $("#btn_submit_contact").attr("disabled", "disabled");
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var company = $('#company').val();
                var message = $('#message').val();
                if (name != "" && email != "" && phone != "") {
                    $.ajax({
                        url: "../../php/mail.php",
                        type: "POST",
                        data: {
                            name: name,
                            email: email,
                            phone: phone,
                            company: company,
                            message: message,
                        },
                        cache: false,
                        success: function(dataResult) {
                            var dataResult = JSON.parse(dataResult);
                            if (dataResult.statusCode == 200) {
                                $("#btn_submit_contact").removeAttr("disabled");
                                $('#form-contact').find('input:text').val('');
                                $("#success").show();
                                $('#success').html('Email has been sent successfully');
                            } else if (dataResult.statusCode == 201) {
                                alert("Error occured !");
                            }

                        }
                    });
                } else {
                    alert('Please fill all the field !');
                }
            });
        });
    </script>

</div>
