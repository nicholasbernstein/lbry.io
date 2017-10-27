<?php Response::setMetaDescription('YouTuber? Take back control! LBRY allows publication on your terms. It\'s open-source, decentralized, and gives you 100% of the profit.') ?>
<?php Response::setMetaTitle(__('YouTubers! Take back control.')) ?>
<?php echo View::render('nav/_header', ['isDark' => false, 'isAbsolute' => true]) ?>
<main>
  <div class="cover cover-full cover-light-alt cover-light-alt-grad cover-center" style="padding-top: 96px">
    <div class="content content-light content-text">
      <h1>YouTube Sync</h1>
      <p>Click below to sync your YouTube channel to the LBRY network.</p>
      <div class="spacer1 text-center">
        <a href="https://api.lbry.io/yt/connect" class="btn-primary btn-large">Sync Now</a>
      </div>
      <p class="meta">By clicking sync now, you agree and acknowledge that you understand the <a href="/termsofservice" class="link-primary">unique properties of the LBRY network</a>.</p>
    </div>
    <div class="content content-light content-text">
      <h3>Sync Rewards</h3>
      <p>Syncing your channel to LBRY offers the following LBC rewards.</p>
      <?php echo View::render('acquisition/_syncRewards') ?>
    </div>
  </div>
</main>
<?php echo View::render('nav/_footer') ?>
