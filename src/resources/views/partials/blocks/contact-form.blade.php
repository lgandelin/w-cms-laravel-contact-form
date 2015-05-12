<form action="{{ route('contact_form_controller') }}" method="post">
    <p>
        <label for="name">{{ trans('w-cms-laravel-contact-form::contact-form.your_name') }}</label>
        <input type="text" id="name" name="name"/>
    </p>

    <p>
        <label for="mail">{{ trans('w-cms-laravel-contact-form::contact-form.your_email') }}</label>
        <input type="text" id="mail" name="mail"/>
    </p>

    <p>
        <label for="message">{{ trans('w-cms-laravel-contact-form::contact-form.your_message') }}</label>
        <textarea rows="10" id="message" name="message"></textarea>
    </p>

    <input type="submit" value="{{ trans('w-cms-laravel-contact-form::contact-form.send') }}" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>