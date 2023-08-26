@include('site.layouts.header')
{{-- Start Navbar --}}
@include('site.inc.nav')
{{-- End Navbar --}}

<div class="contact-us">
    <div class="container">
        <div class="header">
            <h4 class="title">@lang('CONTACT US')</h4>
        </div>
        <section class="sec4">
            <div class="www">
                @if (session()->has('success'))
                    <div class="alert alert-success"
                        style="display:flex;justify-content:space-between;align-items:center;flex-direction: {{ app()->getLocale() == 'ar' ? '' : 'row' }}">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close close-alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('contact-us.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" id="name"
                            class="form-control input-use @error('name') is-invalid @enderror" placeholder="Name"
                            aria-describedby="helpId">
                        @error('name')
                            <p class="text-danger {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="phone" id="phone"
                            class="form-control input-use @error('phone') is-invalid @enderror" placeholder="Phone Num"
                            aria-describedby="helpId" maxlength="11" minlength="11">
                        @error('phone')
                            <p class="text-danger {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email"
                            class="form-control input-use @error('email') is-invalid @enderror"
                            placeholder="Enter Email" aria-describedby="helpId">
                        @error('email')
                            <p class="text-danger {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" id="address"
                            class="form-control input-use @error('address') is-invalid @enderror" placeholder="Address"
                            aria-describedby="helpId">
                        @error('address')
                            <p class="text-danger {{ app()->getLocale() == 'ar' ? 'text-end' : 'text-start' }}">
                                {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="qw">
                        <button type="submit" class="btns">@lang('Submit')</button>
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
