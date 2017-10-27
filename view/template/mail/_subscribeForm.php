<?php $error = $error ?? null ?>
<form action="/list/subscribe" class="form--single-row" method="POST" novalidate>

  <?php if ($error): ?>
    <div class="notice notice-error spacer1"><?php echo $error ?></div>
  <?php endif ?>

  <div class="spacer-half">
    <input type="hidden" name="returnUrl" value="<?php echo $returnUrl ?>"/>
    <input type="email" name="email" class="required email" placeholder="{{email.placeholder}}">
    <input type="submit" value="<?php echo $submitLabel ?? __('email.subs') ?>" name="subscribe" class="<?php echo $btnClass ?>">
  </div>
  <div class="meta">{{email.disclaimer}}</div>
</form>