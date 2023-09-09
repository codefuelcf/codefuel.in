<footer class="bg-gray-800 py-10 px-6 text-white | md:px-32">
    <div class="grid grid-cols-1 gap-4 | md:grid-cols-4 md:gap-8">
        <div>
            <h4 class="text-xl capitalize font-bold mb-4">Want to reach us?</h4>
            <p>Want to start a project? Want to get a quote? <br />
                You may also ring a bell at <b><a href="tel:+917006100459">+917006100459</a></b> <br />
                or, email us at <b><a href="mailto:hey@codefuel.cf">hey@codefuel.cf</a></b> <br /></p>
        </div>
        <div>
            <h4 class="text-xl capitalize font-bold mb-4">Follow us</h4>
            <ul class="list none capitalize">
                <li><a href="https://github.com/codefuelcf" target="__blank">Github</a></li>
                <li><a href="https://facebook.com/codefuelcf" target="__blank">Facebook</a></li>
                <li><a href="https://instagram.com/codefuelcf" target="__blank">Instagram</a></li>
                <li><a href="https://twitter.com/codefuelcf" target="__blank">Twitter</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl capitalize font-bold mb-4">Company</h4>
            <ul class="list none capitalize">
                <li><a href="{{ route('front.about') }}">About</a></li>
                <li><a href="{{ route('front.privacy-policy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('front.terms-conditions') }}">Terms & Conditions</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xl capitalize font-bold mb-4">Newsletter</h4>
            <p>Register for our newsletter and receive all the latest updates from us</p>
            <div class="mt-4">
                <form action="{{ route('register-for-newsletter') }}" method="post">
                    @csrf
                    <input type="email" class="block w-full text-gray-900 rounded-md" name="email" placeholder="youremail@example.com" />
                    <button type="submit" class="text-white w-full block hover:underline mt-1">Register For Newsletter</button>
                </form>
            </div>
            @if(session('newsletterSignupMessage'))
            <div class="mt-2 text-sm text-center">{{ session('newsletterSignupMessage') }}</div>
            @endif
        </div>
    </div>
    <div class="mt-8 text-center">
        <p class="inline">&copy; 2016 - <span x-data="{}" x-text="new Date().getFullYear()"></span>. All Rights Reserved. <b>Codefuel</b></p>
    </div>
</footer>