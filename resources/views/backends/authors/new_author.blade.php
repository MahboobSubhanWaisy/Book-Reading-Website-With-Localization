<section id="floating-label-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card" style="height: 100%;">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" action=" {{ route('insert_author')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-label-group position-relative has-icon-left">
                                            <input type="text" required="" id="first-name-floating-icon" class="form-control" name="fname" placeholder="First Name">
                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                            <label for="first-name-floating-icon">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group position-relative has-icon-left">
                                            <input type="text" required="" id="first-name-floating-icon" class="form-control" name="lname" placeholder="Last Name">
                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                            <label for="first-name-floating-icon">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group position-relative has-icon-left">
                                            <input type="email" required="" id="email-id-floating-icon" class="form-control" name="email" placeholder="Email">
                                            <div class="form-control-position">
                                                <i class="feather icon-mail"></i>
                                            </div>
                                            <label for="email-id-floating-icon">Email</label>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group position-relative has-icon-left">
                                            <input type="number" required="" id="contact-floating-icon" class="form-control" name="phone" placeholder="Mobile">
                                            <div class="form-control-position">
                                                <i class="feather icon-smartphone"></i>
                                            </div>
                                            <label for="contact-floating-icon">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group position-relative has-icon-left">
                                            <input type="text" required="" id="contact-floating-icon" class="form-control" name="address" placeholder="Address">
                                            <div class="form-control-position">
                                                <i class="feather icon-smartphone"></i>
                                            </div>
                                            <label for="contact-floating-icon">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <fieldset class="form-group">
                                            <textarea class="form-control" name="bio" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">Please choose authors image</label>
                                            <div class="custom-file">
                                                <input type="file" required="" name="photo" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    //Custom File Input
    $(".custom-file input").change(function (e) {
      $(this)
        .next(".custom-file-label")
        .html(e.target.files[0].name);
    });
</script>