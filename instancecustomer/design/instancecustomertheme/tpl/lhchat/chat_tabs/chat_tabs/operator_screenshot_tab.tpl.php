<?php include(erLhcoreClassDesign::designtpl('lhchat/chat_tabs/operator_screenshot_tab_pre.tpl.php')); ?>
<?php if ($operator_screenshot_tab_enabled == true && erLhcoreClassUser::instance()->hasAccessTo('lhchat','take_screenshot')) : ?>
<li role="presentation"><a href="#main-user-info-screenshot-<?php echo $chat->id?>" aria-controls="main-user-info-screenshot-<?php echo $chat->id?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/screenshot','Screenshot')?>" role="tab" data-toggle="tab"><i class="icon-picture"></i></a></li>
<?php endif;?>