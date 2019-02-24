<?php if (empty($review['id']) || $userId == $review['authorId']): ?>
<form action="" method="post">
	<input type="hidden" name="review[id]" value="<?=$review['id'] ?? ''?>">
    <label for="reviewtext">Type your review here:</label>
    <textarea id="reviewtext" name="review[reviewtext]" rows="3" cols="40"><?=$review['reviewtext'] ?? ''?></textarea>
    <input type="submit" name="submit" value="Save">
</form>
<?php else: ?>

<p>You may only edit reviews that you posted.</p>

<?php endif; ?>