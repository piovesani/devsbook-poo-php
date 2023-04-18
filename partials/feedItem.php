<?php
$actionPhrase = '';

switch($item->type){
    case 'text':
        $actionPhrase = 'fez um post';
    break;

    case 'photo':
        $actionPhrase = 'postou uma foto';
    break;
}

?>


<div class="box feed-item">
    <div class="box-body">
        <div class="feed-item-head row mt-20 m-width-20">
            <div class="feed-item-head-photo">
                <a href="<?php echo $base; ?>/perfil.php?id=<?php echo $item->user->id; ?>">
                <img src="<?php echo $base; ?>/media/avatars/<?php echo $item->user->avatar; ?>" /></a>
            </div>
            <div class="feed-item-head-info">
                <a href="<?php echo $base; ?>/perfil.php?id=<?php echo $item->user->id; ?>">
                <span class="fidi-name"><?php echo $item->user->name; ?></span></a>
                <span class="fidi-action"><?php echo $actionPhrase; ?></span>
                <br/>
                <span class="fidi-date">
                    
                <?php echo date('d/m/Y', strtotime($item->createdAt)); ?>
                </span>
            </div>
            <div class="feed-item-head-btn">
                <img src="<?php echo $base; ?>/assets/images/more.png" />
            </div>
        </div>
        <div class="feed-item-body mt-10 m-width-20">
        <?php echo nl2br($item->body); ?>
        </div>
        <div class="feed-item-buttons row mt-20 m-width-20">
            <div class="like-btn <?php echo $item->liked ? 'on' : ''; ?>">
            <?php echo $item->like; ?></div>
            <div class="msg-btn"><?php echo count($item->comments); ?></div>
        </div>
        <div class="feed-item-comments">
            
            <div class="fic-item row m-height-10 m-width-20">
                <div class="fic-item-photo">
                    <a href=""><img src="media/avatars/avatar.jpg" /></a>
                </div>
                <div class="fic-item-info">
                    <a href="">Bonieky Lacerda</a>
                    Comentando no meu próprio post
                </div>
            </div>

            <div class="fic-item row m-height-10 m-width-20">
                <div class="fic-item-photo">
                    <a href=""><img src="media/avatars/avatar.jpg" /></a>
                </div>
                <div class="fic-item-info">
                    <a href="">Bonieky Lacerda</a>
                    Muito legal, parabéns!
                </div>
            </div>

            <div class="fic-answer row m-height-10 m-width-20">
                <div class="fic-item-photo">
                    <a href="<?php echo $base; ?>/perfil.php; ?>">
                    <img src="<?php echo $base; ?>/media/avatars/<?php echo $userInfo->avatar; ?>" /></a>
                </div>
                <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
            </div>

        </div>
    </div>
</div>