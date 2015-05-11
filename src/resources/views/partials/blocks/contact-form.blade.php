<form action="{{ route('contact_form_controller') }}" method="post">
    <p>
        <label for="name">Your name</label>
        <input type="text" id="name" name="name"/>
    </p>

    <p>
        <label for="mail">Your email</label>
        <input type="text" id="mail" name="mail"/>
    </p>

    <p>
        <label for="message">Your message</label>
        <textarea rows="10" id="message" name="message"></textarea>
    </p>

    <input type="submit" value="Send" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>