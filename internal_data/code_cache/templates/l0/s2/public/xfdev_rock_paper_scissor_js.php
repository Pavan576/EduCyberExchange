<?php
// FROM HASH: adca1b3fda13286d19a296b19241e7b6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->inlineJs('
    let message = null;
    let minBetAmount = ' . $__vars['xf']['options']['xfdevRPSMinBetAmount'] . ';
    let maxBetAmount = ' . $__vars['xf']['options']['xfdevRPSMaxBetAmount'] . ';
    let userCurrentCredits = ' . $__vars['xf']['visitor']['dbtech_credits_credits'] . ';
    let canPlayRPS = ' . ($__templater->method($__vars['xf']['visitor'], 'canPlayRPS', array()) ? 1 : 0) . ' ;

    jQuery.extend(XF.phrases, {
        xfdev_rps_minimum_bet_amount_is_x: "' . $__templater->filter('xfdev_rps_minimum_bet_amount_is_x', array(array('escape', array('js', )),), false) . '",
        xfdev_rps_maximum_bet_amount_is_x: "' . $__templater->filter('xfdev_rps_maximum_bet_amount_is_x', array(array('escape', array('js', )),), false) . '",
        xfdev_rps_you_dont_have_enough_credits: "' . $__templater->filter('xfdev_rps_you_dont_have_enough_credits', array(array('escape', array('js', )),), false) . '",
        xfdev_rps_you_dont_have_permission_to_play_rps: "' . $__templater->filter('xfdev_rps_you_dont_have_permission_to_play_rps', array(array('escape', array('js', )),), false) . '",
    });

    function playRPS(selection) {
        let bet_amount = $(\'input[name=bet_amount]:visible\').val();
        let userSelection = selection;

        if(!canPlayRPS){
            message = XF.phrase(\'xfdev_rps_you_dont_have_permission_to_play_rps\');
            $(\'.alert.warning .message\').html(message);
            $(\'.alert.warning\').fadeIn(200).delay(2000).fadeOut(500);
        }else if (bet_amount < minBetAmount) {
            message = XF.phrase(\'xfdev_rps_minimum_bet_amount_is_x\', {\'{minimum}\': minBetAmount});
            $(\'.alert.warning .message\').html(message);
            $(\'.alert.warning\').fadeIn(200).delay(2000).fadeOut(500);

        } else if (bet_amount > maxBetAmount) {
            message = XF.phrase(\'xfdev_rps_maximum_bet_amount_is_x\', {\'{maximum}\': maxBetAmount});
            $(\'.alert.warning .message\').html(message);
            $(\'.alert.warning\').fadeIn(200).delay(2000).fadeOut(500);
        } else if (bet_amount > userCurrentCredits) {
            message = XF.phrase(\'xfdev_rps_you_dont_have_enough_credits\');
            $(\'.alert.warning .message\').html(message);
            $(\'.alert.warning\').fadeIn(200).delay(2000).fadeOut(500);
        } else {
            $.ajax({
                url: "/rock-paper-scissor/play",
                data: {
                    bet_amount: bet_amount,
                    user_selection: userSelection,
                    _xfResponseType: \'json\',
                    _xfToken: XF.config.csrf
                },
                type: "POST",
                dataType: "json",
                success: function (e) {
                    let result = e.result;

                    if (result === "won") {
                        $(\'.alert.won\').fadeIn(500).delay(1000).fadeOut(500);
                        $(\'.newHistory-container:hidden\').removeClass(\'dice-bet-loss\');
                        $(\'.newHistory-container:hidden\').removeClass(\'dice-bet-tie\');
                        $(\'.newHistory-container:hidden\').addClass(\'dice-bet-win\');
                    } else if (result === "lost") {
                        $(\'.alert.lost\').fadeIn(500).delay(1000).fadeOut(500);
                        $(\'.newHistory-container:hidden\').removeClass(\'dice-bet-win\');
                        $(\'.newHistory-container:hidden\').removeClass(\'dice-bet-tie\');
                        $(\'.newHistory-container:hidden\').addClass(\'dice-bet-loss\');
                    } else if (result === "tie") {
                        $(\'.alert.tie\').fadeIn(500).delay(1000).fadeOut(500);
                        $(\'.newHistory-container:hidden\').removeClass(\'dice-bet-loss\');
                        $(\'.newHistory-container:hidden\').removeClass(\'dice-bet-win\');
                        $(\'.newHistory-container:hidden\').addClass(\'dice-bet-tie\');
                    }

                    $(\'.newHistory-user-choice:hidden\').html(e.userChoice);
                    $(\'.newHistory-bot-choice:hidden\').html(e.botChoice);
                    $(\'.newHistory-betAmount:hidden\').html(e.betAmount);
                    $(\'.newHistory-result:hidden\').html(e.result);


                    $(\'.game-history-list\').prepend($(\'#newHistoryTemplate\').html());

                    let userCredits = e.leftCredits;
                    $(\'.availableCredits\').html(userCredits.toLocaleString());
                    $(\'[data-original-title=Credits]\').html(userCredits.toLocaleString() +\' <i class="fas fa-coin text-warning ml-1"></i>\');
                },
                error: function (xhr, textStatus, errorThrown) {
                    $(\'.alert.warning .message\').html(xhr.responseJSON.errors[0]);
                    $(\'.alert.warning\').fadeIn(200).delay(2000).fadeOut(500);
                },
            })
        }
    }
');
	return $__finalCompiled;
}
);