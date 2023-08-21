@include('site.layouts.header')
{{-- Start Navbar --}}
@include('site.inc.nav')
{{-- End Navbar --}}

<div class="contact-us">
    <div class="container">
        <div class="header">
            <h4 class="title">CONTACT US</h4>
        </div>
        <section class="sec4">
            <div class="www">

                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="name" id="name" class="form-control input-use"
                            placeholder="Name" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" id="phone" class="form-control input-use"
                            placeholder="Phone Num" aria-describedby="helpId" maxlength="11" minlength="11">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control input-use"
                            placeholder="Enter Email" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" id="address" class="form-control input-use"
                            placeholder="Address" aria-describedby="helpId">
                    </div>
                    <div class="qw">
                        <button type="submit" class="btns">submit</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</div>

{{-- Start Contact --}}
@include('site.inc.contact')
{{-- End Contact --}}

{{-- Start Footer --}}
@include('site.inc.footer')
{{-- End Footer --}}
@include('site.layouts.footer')
