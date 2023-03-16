<?php
$firstName = explode(" ", $userInfo->name);
?>

<div class="box feed-new">
    <div class="box-body">
        <div class="feed-new-editor m-10 row">
            <div class="feed-new-avatar">
                <img src="<?php echo $base; ?>/media/avatars/<?php echo $userInfo->avatar; ?>" />
            </div>
            <div class="feed-new-input-placeholder">O que você está pensando, 
                <?php echo $firstName[0]; ?>?</div>
            <div class="feed-new-input" contenteditable="true"></div>
            <div class="feed-new-send">
                <img src="<?php echo $base; ?>/assets/images/send.png" />
            </div>
        </div>

        <form class="feed-new-form" method="POST" action="<?php echo $base; ?>/feedEditorAction.php">
            <input type="hidden" name="body" />
        </form>
    </div>
</div>

<script>
let feed = document.querySelector('.feed-new-input');
let submit = document.querySelector('.feed-new-send');
let form = document.querySelector('.feed-new-form');

submit.addEventListener('click', () => {
    let value = feed.innerText.trim();

    form.querySelector('input[name=body]').value = value;
    form.submit();
});
</script>