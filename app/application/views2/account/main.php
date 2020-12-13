<h2><?=$InstUser->data->username?></h2>
<img src="<?=$InstUser->data->profile_picture;?>" class="img-circle">

<p>Постов: <?=$InstUser->data->counts->media ?></p>
<p>followed_by: <?=$InstUser->data->counts->followed_by ?></p>
<p>follows: <?=$InstUser->data->counts->follows ?></p>


<? foreach($InstUserMedia->data as $val) : ?>
    <img src="<?=$val->images->thumbnail->url?>"  class="img-rounded">
<? endforeach; ?>

<div class="clearfix"></div>
<button type="button" data-loading-text="Loading..." class="btn btn-primary" onclick="more_media(<?=Cookie::get('next_max_id')?>)">
    Показать ещё
</button>

<div class="clearfix"><br /></div>



<script type="text/javascript">
    $('.header-images').toggleButtons();

    function more_media()
    {
        var form = $("form");
        var submit = true;

        $('.form-horizontal').find('.mandatory', $(form)).each(function()
        {
            if($(this).val() == '')
            {
                $(this).parent().addClass('error').click(function()
                {
                    $(this).removeClass('error');
                });
                submit = false;
            }
        });
        $('.form-horizontal').find('.mandatory:first', $(this)).focus();

        if(submit == true) //Если нет ошибки
        {
            var post_data = $("form").serialize();
            $.ajax({
                url: '/ajax/account/more_media/',
                dataType: 'json',
                type: 'POST',
                data: {'post_data': post_data },
                beforeSend: function ( xhr ) {},
                success: function( data )
                {
                    if(data.status == true)
                    {
                        //Изменяем ссылку на кнопке просмотр
                        $('#page_view').attr('href', '/news/'+$('[name=url]').val());


                        $('#results').addClass('alert-success');
                        $('#results').html(data.message);
                        $('#results').removeClass('hide');
                        setTimeout(function(){ $('#results').addClass('hide'); }, 3000);



                    }
                    else if(data.status == false)
                    {
                        $('#results').addClass('alert-error');
                        $('#results').html(data.message.description);
                        $('#results').removeClass('hide');
                    }
                },
                error: function( error )
                {
                    //Вывод ошибки
                }
            });
        }
        return false;
    }
</script>