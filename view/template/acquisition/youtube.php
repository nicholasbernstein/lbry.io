<?php Response::setMetaDescription('YouTuber? Take back control! LBRY allows publication on your terms. It\'s open-source, decentralized, and gives you 100% of the profit.') ?>
<?php Response::setMetaTitle(__('YouTubers! Take back control.')) ?>
<?php echo View::render('nav/_header', ['isDark' => false, 'isAbsolute' => true]) ?>
<main>
  <div class="cover cover-center" style="padding-top: 120px">
    <div class="spacer2">
      <?php echo View::render('acquisition/_claimChannel') ?>
    </div>
  </div>
  <div class="cover   ">
    <div class="content content-light" id="more-words">
      <h2>Join Those That Get It</h2>
      <p>Whether you have 500 followers or 5,000,000, you deserve control.</p>
      <div class="column-fluid" >
        <?php foreach(range(1, 3) as $num): ?>
          <div class="span4">
            <div class="content ">
              <div class="text-center">
                <img src="http://placehold.it/400x300" />
              </div>
              <div>
                <h3>YouTuber <?php echo $num ?></h3>
              </div>
              <p>
                This is a one sentence story about this YouTuber.
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <div class="cover">
    <div class="content content-light" id="more-words">
      <h2>Control What You Earn</h2>
      <p>Receive payments and support from your fans directly into an account only you control.</p>
      <h4>Live Tip Feed</h4>
      <table class="post-content-table full-table">
        <thead>
          <tr>
            <th>Recipient</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <?php foreach([[500, 10000, 50], [5000, 100000, 500], [50000, 1000000, 5000], [500000, 10000000, 50000]] as $rewardTuple): ?>
          <?php list($subscribers, $views, $reward) = $rewardTuple ?>
          <tr>
            <td><?php echo number_format($subscribers) ?></td>
            <td><?php echo number_format($views) ?></td>
            <td><?php echo i18n::formatCredits($reward) ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div>
  <div class="cover   ">
    <div class="content content-light" id="more-words">
      <h2>How This Works</h2>
      <p>
        This is an extremely succinct explanation of how LBRY is a new/protocol/blockchain/thing that puts creators back in control.
        For more technical specifics, <a href="/learn" class="link-primary">go here</a>.
      </p>
      <p>

      </p>
      <ol>
        <li>
          Claim your channel for free, above. Be sure to be the first to claim it!
        </li>
        <li>
          We'll send you details on how to take permanent ownership of your channel via email. Unlike every other way of sharing content,
          <em>only you</em> own your channel. Once your channel is yours, even we can't touch it.
        </li>
        <li>
          Optionally, you can sync all of your YouTube content to the LBRY network. This comes with additional rewards outlined below.
        </li>
      </ol>
    </div>
  </div>
  <div class="cover  ">
    <div class="content  content-light">
      <h2>Sync & Earn</h2>
      <p>LBRY offers a single-click sync process for existing YouTubers.</p>
      <div class="text-center spacer1">
        <a href="/youtube/sync" class="btn-alt btn-large">Sync Now</a>
      </div>
      <h3>Rewards</h3>
      <p>We want creators to control the LBRY network and offering rewards commensurate to your talent.</p>
      <?php echo View::render('acquisition/_syncRewards') ?>
    </div>
  </div>
  <div class="cover cover-light">
  <div class="content content-light">
    <h2>I Need An Adult</h2>
    <p>
      Send <a class="link-primary" href=mailto:reilly@lbry.io?subject=YouTube+Freedom">Reilly</a> all your questions about YouTube Freedom. No dick pics please unless they are especially aesthetic.
    </p>
    <?php echo View::render('content/_bio', ['person' => 'reilly-smith-youtube', 'orientation' => 'horizontal']) ?>
  </div>
</main>
<?php echo View::render('nav/_footer') ?>
