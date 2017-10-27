<div class="content content-light">
  <form class="form--single-row">
    <div class="step step1">
      <?php /*
      <div class="text-center">
        <h2>What If YouTubers Ran YouTube?</h2>
        <p>Claim your identity on the world's first user-controlled blah blah blah.</p>
      </div> */ ?>
      <span class="input-group-large">@</span>
      <input type="text" class="input-large" placeholder="yourchannel" />
      <a href="javascript:;" class="btn-primary btn-large claim-step-button" data-step="2">Claim Now</a>
    </div>
    <div class="step step2 input-width hide">
      <h2>Claim @XYZ</h2>
      <p>Reserve your channel on the LBRY network and receive X welcome credits!</p>
      <?php echo View::render('form/_formRow', [
        'field'    => 'youtube_url',
        'label'    => __('Channel URL'),
        'attributes' => ['placeholder' => 'youtube.com/user/you']
      ]) ?>
      <?php echo View::render('form/_formRow', [
        'field'    => 'email',
        'label'    => __('Email'),
        'attributes' => ['placeholder' => 'you@youremail.com']
      ]) ?>
      <div class="spacer-half">
        <a href="javascript:;" class="btn-primary claim-step-button" data-step="3">Send Welcome Wallet</a>
      </div>
      <div class="meta">
        <a href="javascript:alert('because motherfucker (we need to email you wallet)')" class="link-primary">Why do you need this?</a>
      </div>
    </div>
    <div class="step step3 hide content content-tile">
      <h2>Welcome to Content Freedom!</h2>
      <p class="notice notice-success">Channel @XYZ has been claimed in transaction 123.</p>
      <p>An email will be sent to you shortly, containing your private key that grants you and only you permanent control over your digital content.</p>
      <p>Additionally, you can receive even more LBC for making your content available to hundreds of thousands of LBRY users.</p>
      <a href="/youtube/sync" class="btn-primary">Sync Now</a>
    </div>
  </form>
  <?php js_start() ?>
    $('.claim-step-button').click(function() {
       var form = $(this).closest('form');
       form.find('.step').hide();
       form.find('.step' + $(this).data('step')).show();
    });
  <?php js_end() ?>
</div>