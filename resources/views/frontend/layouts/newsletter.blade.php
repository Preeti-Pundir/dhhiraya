
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <h4>Get the latest property news</h4>
                        <p> Strategy startup research & development equity burn rate validation customer vesting period infrastructure seed round bandwidth ecosystem infographic market.</p>
                        <form action="{{route('subscribe')}}" method="post" class="newsletter-inner">
                            @csrf
                            <input name="email" placeholder="Your e-mail here" required="" type="email">
                            <button class="btn" type="submit">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
