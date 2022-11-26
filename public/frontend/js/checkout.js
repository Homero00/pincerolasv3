$(document).ready(function () {
    $('.razorpay_btn').click(function (e){
        e.preventDefault();
        var firstname = $('.firstname').val();
        var lastname = $('.lastname').val();
        var email = $('.email').val();
        var phone = $('.phone').val();
        var address1 = $('.address1').val();
        var address2 = $('.address2').val();
        var city = $('.city').val();
        var state = $('.state').val();
        var country = $('.country').val();
        var pincode = $('.pincode').val();
        if(!firstname)
        {
            fname_error = "Se requiere el nombre";
            $('#fname_error').html('');
            $('#fname_error').html(fname_error);
        }
        else
        {
            fname_error = "";
            $('#fname_error').html('');
        }
        if(!lastname)
        {
            lname_error = "Se requieren los apellidos";
            $('#lname_error').html('');
            $('#lname_error').html(lname_error);
        }
        else
        {
            lname_error = "";
            $('#lname_error').html('');
        }
        if(!email)
        {
            email_error = "Se requiere el mail";
            $('#email_error').html('');
            $('#email_error').html(email_error);
        }
        else
        {
            email_error = "";
            $('#email_error').html('');
        }
        if(!phone)
        {
            phone_error = "Se requiere el telefono";
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        }
        else
        {
            email_error = "";
            $('#phone_error').html('');
        }
        if(!address1)
        {
            address1_error = "Se requiere la calle 1";
            $('#address1_error').html('');
            $('#address1_error').html(address1_error);
        }
        else
        {
            address1_error = "";
            $('#address1_error').html('');
        }
        if(!address2)
        {
            address2_error = "Se requiere la calle 2";
            $('#address2_error').html('');
            $('#address2_error').html(address2_error);
        }
        else
        {
            address2_error = "";
            $('#address2_error').html('');
        }
        if(!city)
        {
            city_error = "Se requiere la ciudad";
            $('#city_error').html('');
            $('#city_error').html(city_error);
        }
        else
        {
            city_error = "";
            $('#city_error').html('');
        }
        if(!state)
        {
            state_error = "Se requiere el estado";
            $('#state_error').html('');
            $('#state_error').html(state_error);
        }
        else
        {
            state_error = "";
            $('#state_error').html('');
        }
        if(!country)
        {
            country_error = "Se requiere el pais";
            $('#country_error').html('');
            $('#country_error').html(country_error);
        }
        else
        {
            country_error = "";
            $('#country_error').html('');
        }
        if(!pincode)
        {
            pincode_error = "Se requiere el Codigo Postal";
            $('#pincode_error').html('');
            $('#pincode_error').html(pincode_error);
        }
        else
        {
            pincode_error = "";
            $('#pincode_error').html('');
        }
        if(fname_error !== '' || lname_error != '' || email_error != '' || phone_error != ''
        || address1_error != '' || address2_error != '' || city_error != '' || state_error != ''
        || country_error != '' || pincode_error != '')
        {
            return false;
        }
        else
        {   
            var data = {
                 'firstname':firstname,
                 'lastname':lastname,
                 'email':email,
                 'phone':phone,
                 'address1':address1,
                 'address2':address2,
                 'city':city,
                 'state':state,
                 'country':country,
                 'pincode':pincode
            }
            
            $.ajax({
                method: "POST",
                url: "/proceed-to-pay",
                data: data,
                success: function (response) {
                    //alert(response.total_price)   


                    var options = {
                        "key": "YOUR_KEY_ID", // Enter the Key ID generated from the Dashboard
                        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://example.com/your_logo",
                        "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
                        "prefill": {
                            "name": "Gaurav Kumar",
                            "email": "gaurav.kumar@example.com",
                            "contact": "9999999999"
                        },
                        "notes": {
                            "address": "Razorpay Corporate Office"
                        },
                        "theme": {
                            "color": "#3399cc"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                        rzp1.open();
                }
            });
        }
    });
});