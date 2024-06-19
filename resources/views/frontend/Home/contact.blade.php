<section id="contact" class="contact section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>Fill out the form below to send us a message.</p>
        </div>

        <div class="row">

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">

            </div>

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="300">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
