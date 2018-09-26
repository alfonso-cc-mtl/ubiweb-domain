@component('components.contact-form', [
  'site' => $site,
  'attachment' => false,
  'captcha' => true,
  'submitText' => 'Send'
])
<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">
      <i class="fa fa-user"></i><label class="my-0 ml-1" for="formName">{{ $site->trans('Name') }}</label>
    </span>
    <input id="formName" type="text" name="message[Name]" value="" class="form-control" required/>
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon">
      <i class="fa fa-envelope"></i><label class="my-0 ml-1" for="formEmail">{{ $site->trans('Email') }}</label>
    </span>
    <input id="formEmail" type="email" name="message[Email]" value="" class="form-control" required/>
  </div>
</div>
<div class="form-group">
  <label class="sr-only" for="formMessage">{{ $site->trans('Message') }}</label>
  <textarea id="formMessage" name="message[Message]" class="form-control" rows="5" placeholder="{{ $site->trans("Your message...") }}" required></textarea>
</div>
@endcomponent
