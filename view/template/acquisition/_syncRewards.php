<table class="post-content-table full-table">
  <thead>
    <tr>
      <th>Subscribers</th>
      <th>Views</th>
      <th>Rewards</th>
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
<div class="meta">
  Rewards are distributed per month over 36 months. Rewards are no longer offered if content is withdrawn.
</div>