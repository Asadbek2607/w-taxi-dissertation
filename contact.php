<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-warning shadow px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="card-body">
                    <div class="container">
                        <h1>Contact Us</h1>
                        <p>For any inquiries or booking by phone, please feel free to contact us at:</p>
                        <a style="text-decoration: none" href="tel:+998932846947" class="phone-info"><i class="fas fa-phone" ></i> +998932846947</a>
                        <br>
                        <form method="post" action="sendEmail.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" value="Submit" class="btn btn-warning">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark  text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>

<style>
    .card-outline {
        border-color: #F7B731;
    }

    .card-warning {
        background-color: #f4f2ff;
    }

    .phone-info {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .btn-warning {
        background-color: #F7B731;
        border-color: #F7B731;
    }

    .btn-warning:hover {
        background-color: #F7B731;
        border-color: #F7B731;
    }
</style>