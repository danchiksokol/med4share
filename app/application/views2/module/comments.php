<?php
    $contr = new \Controller_Comment();
    $data = $contr->getComments($controller, $subject_id);

    if( $data === false ) {
        return;
    }
    if( ! Auth::instance()->logged_in('login') ) { // без авторизации не показывать
        return;
    }

    $countComment = count($data) - 1;

/*
    $is_comments
    0 - выключино полностью
    1 - только просмотр
    2 - просмотр и добавление
*/
?>

<?
    $firstID = $data[0]->id;
    $scopeID = $data[0]->scope;


    $countCommentHTML = 0;
    $buf = '';
    $idn = 0;
    $c = 0;
    for($i = 1; $i <= $countComment; $i++) {  // Начнём со второго комметария первый системный
        $s = $data[$i];

        if( $s->is_active == 0 && ! Auth::instance()->logged_in('comment') ) {
            break;
        }

        $countCommentHTML++;

        if ($s->level > $idn) {
            for ($j = $s->level - $idn; $j >= 1; $j--) {
                $buf .= '' . "\n";
            }

            $idn = $s->level;
        } elseif ($s->level < $idn) {
            for ($j = $idn - $s->level; $j >= 1; $j--) {
                if ($c > 1) {
                    $buf .= '        </div>' . "\n";
                }
                if ($c) {
                    if ($c == 1) {
                        $buf .= '        </div>' . "\n";
                    }

                    $c--;
                }
            }
            $idn = $s->level;
        } elseif ($s->level == $idn) {
            //$buf .= '        </div>'."\n";
        }

        $FIO = $s->author_id > 0 ? ORM::factory('user', $s->author_id)->fio : '';

        $buf .= '        <div class="comment clearfix">' . "\n";
        $buf .= '            <div class="comment-content clearfix">' . "\n";
        if( $s->is_active == 0 ) {
            $buf .= '                <h4 class="not-active">'. $s->title . '</h4>' . "\n";
            $buf .= '                <div class="comment-meta not-active" id="comment-author-'.$s->id.'">Добавил(а) '.$FIO.' | '.$s->date_create.'</div>';
            $buf .= '                <p class="not-active" id="comment-text-'.$s->id.'">' . $s->text . '</p>' . "\n";
        } else {
            $buf .= '                <h4>' . $s->title . '</h4>' . "\n";
            $buf .= '                <div class="comment-meta" id="comment-author-'.$s->id.'">Добавил(а) '.$FIO.' | '.$s->date_create.'</div>';
            $buf .= '                <p id="comment-text-'.$s->id.'">' . $s->text . '</p>' . "\n";
        }

        if( $is_comments == 2 || Auth::instance()->logged_in('comment') ) {
            $buf .= '                <a href="#" class="btn btn-gray more pull-right" onclick="replyComment(\'' . $s->id . '\'); return false;"><i class="fa fa-reply"></i> Ответить</a>' . "\n";
        }

        if( Auth::instance()->logged_in('comment') ) {

            $buf .= '                <a href="#" class="btn btn-danger more pull-right" onclick="adminComment(\'delete\', \''.$s->id.'\'); return false;"><i class="fa fa-adn"></i>Удалить</a>' . "\n";
            if( $s->is_active == 0 ) {
                $buf .= '                <a href="#" class="btn btn-success more pull-right" onclick="adminComment(\'show\', \''.$s->id.'\'); return false;"><i class="fa fa-adn"></i>Показывать</a>' . "\n";
            } else {
                $buf .= '                <a href="#" class="btn btn-gray more pull-right" onclick="adminComment(\'hide\', \''.$s->id.'\'); return false;"><i class="fa fa-archive"></i>Спрятать</a>' . "\n";
            }
        }

        $buf .= '            </div>' . "\n";


        if (!isset($data[$i + 1]) || (isset($data[$i + 1]) && $data[$i + 1]->level <= $s->level)) {
            $buf .= '        </div>' . "\n";
        } else {
            $c++;
        }

        if (!isset($data[$i + 1]) && $s->level != 2) {
            $buf .= '        </div>' . "\n";
        }

    } //endfor;

    for($j = $s->level; $j >= 1; $j--)
    {
        //$buf .= '</div>';
        if($c)
        {
            $buf .= '        </div>'."\n";
            $c--;
        }
    }

?>

<div id="comment">
<? if( ( $is_comments > 0 || Auth::instance()->logged_in('comment') ) && $is_comments != 0  ) { ?>
    <div class="comments">

        <? if( Auth::instance()->logged_in('comment') ) {?>
            <div class="clear">
                <? if( $is_comments == 0 ) { ?>
                    <!--<div class="alert alert-warning" role="alert">
                        <strong>Внимание!</strong> Показ и добавление комментариев отключено
                    </div>-->
                <? } elseif ( $is_comments == 1 ) { ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>Внимание!</strong> Включен только показ комментариев
                    </div>
                <? } elseif ( $is_comments == 2 ) { ?>
                    <div class="alert alert-warning" role="alert">
                        <strong>Внимание!</strong> Включен показ и добавление комментариев
                    </div>
                <? } ?>
            </div>
        <? } ?>

        <h2 class="title"><?=$countCommentHTML.' '.TEXT::pluralForm($countCommentHTML, 'комментарий', 'комментария', 'комментариев')?> <small><a href='javascript:void(0)' class="comment-meta" id="h2Comment">Написать</a></small></h2>
        <?=$buf; // Все комментарии ?>
    </div> <!-- end comments -->
<? } ?>
</div> <!-- id = comment -->


<? if( ( $is_comments == 2 || Auth::instance()->logged_in('comment') ) && $is_comments != 0 && $refresh != true ) { ?>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success hidden" id="commentSuccess">
                <h3>Ваш комментарий отправлен на модерацию</h3>
                <p></p>
            </div>
            <div class="alert alert-error hidden" id="commentError"></div>
        </div>

        <div class="col-lg-2 col-md-offset-5">
            <a href="#" class="btn btn-success more pull-right" onclick="refreshComment('<?=$controller?>', '<?=$subject_id?>', '<?=$is_comments?>'); return false;"><i class="fa fa-refresh"></i> Обновить комментарии</a>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <!-- comments form start -->
            <div class="comments-form">
                <h3 class="title">Написать комментарий</h3>
                <div id="reply-comment-text" class="hidden"></div>
                <form role="form" id="comment-form">
                    <input type="hidden" id="scope" name="scope" value="<?=$scopeID?>" />
                    <input type="hidden" id="reply" name="reply" value="<?=$firstID?>" />
                    <input type="hidden" id="firstID" firstID="<?=$firstID?>" />

                    <div class="form-group has-feedback">
                        <label for="subject4">Тема</label>
                        <input type="text" class="form-control" id="commentTitle" placeholder="" name="commentTitle">
                        <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="message4">Сообщение</label>
                        <textarea class="form-control" rows="8" id="commentText" placeholder="" name="commentText" required></textarea>
                        <i class="fa fa-envelope-o form-control-feedback"></i>
                    </div>
                    <input type="submit" value="Написать" class="btn btn-default pull-right">
                </form>
            </div>
            <!-- comments form end -->
        </div>
    </div>

<? } ?>