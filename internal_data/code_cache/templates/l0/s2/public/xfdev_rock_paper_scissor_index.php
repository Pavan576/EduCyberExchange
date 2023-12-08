<?php
// FROM HASH: 4a234a287f741a84c8cf7186af094bfb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Rock Paper Scissor');
	$__finalCompiled .= '

';
	$__templater->includeCss('xfdev_rock_paper_scissor.less');
	$__finalCompiled .= '
';
	$__templater->includeCss('rock_paper_scissors.css');
	$__finalCompiled .= '

<div class="notification">
    <div class="alert won">
        ' . 'xfdev_rps_you_have_won' . '
    </div>

    <div class="alert lost">
        <span class="message">
            ' . 'xfdev_rps_you_have_lost' . '
        </span>
    </div>

    <div class="alert tie">
        ' . 'xfdev_rps_its_a_tie' . '
    </div>

    <div class="alert warning">
        <span class="message">

        </span>
    </div>

</div>

<div class="content">
    <div style="margin-top: 30px;">
        <div class="d-flex flex-column flex-lg-row">
            <div class="sidebar rps-sidebar d-block mr-lg-3 mb-3 mb-lg-0 flex-shrink-0 flex-grow-0 order-2 order-lg-1">

                ' . '
                <div class="wrapper mb-3 d-none d-lg-block" style="background-color: #6e132f;">
                    <div class="rps-credits main-row p-3 d-flex flex-row align-items-center bg-warning font-weight-bold">
                        <div class="flex-fill"><i class="fas fa-coins mr-2"></i> ' . 'xfdev_rps_available_credits:' . '</div>
                        <div class="ml-3 flex-shrink-0 flex-grow-0 availableCredits">
                            ';
	$__vars['viewableCurrencies'] = $__templater->method($__templater->method($__vars['xf']['app']['em'], 'getRepository', array('DBTech\\Credits:Currency', )), 'getCurrencies', array(true, ));
	$__finalCompiled .= '
                            ';
	if ($__templater->isTraversable($__vars['viewableCurrencies'])) {
		foreach ($__vars['viewableCurrencies'] AS $__vars['currency']) {
			if ($__vars['currency']['postbit']) {
				$__finalCompiled .= '
                                ' . $__templater->escape($__templater->method($__vars['currency'], 'getValueFromUser', array($__vars['user'], ))) . '
                            ';
			}
		}
	}
	$__finalCompiled .= '
                        </div>
                    </div>
                </div>

                ' . '
                <div class="wrapper mb-3 d-none d-lg-block">
                    <div class="main-title bg-tertiary">
                        ' . 'xfdev_rps_bet_amount' . '
                    </div>
                    <div class="main-row p-3">
                        <div id="betAmount">
                            <input type="number" name="bet_amount" value="' . $__templater->escape($__vars['xf']['options']['xfdevRPSMinBetAmount']) . '"
                                   min="' . $__templater->escape($__vars['xf']['options']['xfdevRPSMinBetAmount']) . '" max="' . $__templater->escape($__vars['xf']['options']['xfdevRPSMaxBetAmount']) . '">
                        </div>
                    </div>
                    ' . 'xfdev_rps_bet_amount_details' . '
                </div>

                ' . '

                <div class="wrapper mb-3">
                    <div class="main-title bg-tertiary">Statistics</div>
                    <div class="main-row p-3">
                        <ul class="nav nav-tabs d-flex flex-row align-items-center mb-3 rps-tabs" id="rpsStats"
                            role="tablist">
                            <li class="nav-item" role="presentation"><a
                                    class="nav-link text-center font-weight-bold text-uppercase active"
                                    id="personal-tab" data-toggle="tab" href="#personal" role="tab"
                                    aria-controls="personal" aria-selected="true"
                                    style="padding: 10px;font-size: 13px;">' . 'xfdev_rps_personal_statistics' . '</a></li>
                            <li class="nav-item" role="presentation"><a
                                    class="nav-link text-center font-weight-bold text-uppercase" id="global-tab"
                                    data-toggle="tab" href="#global" role="tab" aria-controls="global"
                                    aria-selected="false" style="padding: 10px; font-size: 13px;">' . 'xfdev_rps_global_statistics' . '</a></li>
                        </ul>
                        <div class="tab-content m-n3" id="rpsStatsContent">
                            <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                 aria-labelledby="personal-tab">
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-gamepad-alt fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_games_played:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['xf']['visitor']['xfdev_rps_total_games_played']) . '
                                    </div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-sack fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_total_profit:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['xf']['visitor']['xfdev_rps_total_profit']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-exchange-alt fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_total_wagered' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['xf']['visitor']['xfdev_rps_total_wagered']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-smile fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdve_rps_wins:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['xf']['visitor']['xfdev_rps_total_wins']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-meh fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_losses:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['xf']['visitor']['xfdev_rps_total_losses']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-frown fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_ties:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['xf']['visitor']['xfdev_rps_total_ties']) . '</div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="global" role="tabpanel" aria-labelledby="global-tab">
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-gamepad-alt fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_games_played:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['gameStatistics']['totalGamesPlayed']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-sack fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_total_profit:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['gameStatistics']['totalProfit']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-exchange-alt fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_total_wagered' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['gameStatistics']['totalWagered']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-smile fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdve_rps_wins:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['gameStatistics']['totalWins']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-meh fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_losses:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['gameStatistics']['totalLosses']) . '</div>
                                </div>
                                <div class="main-row p-3 d-flex flex-row align-items-center  font-weight-bold">
                                    <div class="flex-fill"><i class="fas fa-frown fa-fw mr-2 text-secondary"></i>
                                        ' . 'xfdev_rps_ties:' . '
                                    </div>
                                    <div class="ml-3 flex-shrink-0 flex-grow-0">' . $__templater->escape($__vars['gameStatistics']['totalTies']) . '</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ' . '
                <div class="wrapper">
                    <div class="main-title bg-tertiary">' . 'xfdev_rock_paper_scissor_explanation_heading' . '
                    </div>
                    ' . 'xfdev_rock_paper_scissor_explanation' . '
                </div>
            </div>


            <div class="flex-fill order-1 order-lg-2 mb-3 mb-lg-0">

                ' . '
                <div class="wrapper mb-3 d-block d-lg-none">
                    <div class="rps-credits main-row p-3 d-flex flex-row align-items-center bg-warning font-weight-bold">
                        <div class="flex-fill"><i class="fas fa-coins mr-2"></i>
                            ' . 'xfdev_rps_available_credits:' . '
                        </div>
                        <div class="ml-3 flex-shrink-0 flex-grow-0 availableCredits">
                            ';
	$__vars['viewableCurrencies'] = $__templater->method($__templater->method($__vars['xf']['app']['em'], 'getRepository', array('DBTech\\Credits:Currency', )), 'getCurrencies', array(true, ));
	$__finalCompiled .= '
                            ';
	if ($__templater->isTraversable($__vars['viewableCurrencies'])) {
		foreach ($__vars['viewableCurrencies'] AS $__vars['currency']) {
			if ($__vars['currency']['postbit']) {
				$__finalCompiled .= '
                                ' . $__templater->escape($__templater->method($__vars['currency'], 'getValueFromUser', array($__vars['user'], ))) . '
                            ';
			}
		}
	}
	$__finalCompiled .= '
                        </div>
                    </div>
                </div>

                ' . '
                <div class="wrapper mb-3 d-block d-lg-none">
                    <div class="main-title bg-tertiary">
                        ' . 'xfdev_rps_bet_amount' . '
                    </div>
                    <div class="main-row p-3">
                        <div id="betAmount-Mobile">
                            <input type="number" name="bet_amount" value="' . $__templater->escape($__vars['xf']['options']['xfdevRPSMinBetAmount']) . '"
                                   min="' . $__templater->escape($__vars['xf']['options']['xfdevRPSMinBetAmount']) . '" max="' . $__templater->escape($__vars['xf']['options']['xfdevRPSMaxBetAmount']) . '">
                        </div>
                    </div>
                    ' . 'xfdev_rps_bet_amount_details' . '
                </div>

                ' . '
                <div class="rps-container">
                    <div class="d-flex flex-row align-items-center justify-content-center mb-3">
                        <div id="rock"
                             class="rps-box p-4 rounded shadow d-flex justify-content-center align-items-center flex-shrink-0 flex-grow-0"
                             data-type="rock" onclick="playRPS(\'rock\')"><i class="fas fa-hand-rock font-size-30"></i>
                        </div>
                        <div id="paper"
                             class="rps-box p-4 rounded shadow d-flex justify-content-center align-items-center flex-shrink-0 flex-grow-0"
                             data-type="paper" onclick="playRPS(\'paper\')"><i class="fas fa-hand-paper font-size-30"></i>
                        </div>
                        <div id="scissor"
                             class="rps-box p-4 rounded shadow d-flex justify-content-center align-items-center flex-shrink-0 flex-grow-0"
                             data-type="scissor" onclick="playRPS(\'scissor\')"><i
                                class="fas fa-hand-scissors font-size-30"></i></div>
                    </div>

                    ' . '
                    <div class="wrapper dice-bets">
                        <div id="history-wrapper">
                            <div class="v3hide">
                                <div class="main-title bg-tertiary d-flex flex-row align-items-center">
                                    <div class="rps-log-user flex-fill">' . 'xfdev_rock_paper_scissor_user' . '</div>
                                    <div class="rps-log-time flex-shrink-0 flex-grow-0 ml-3 text-center d-none d-lg-block">
                                        ' . 'xfdev_rock_paper_scissor_time' . '
                                    </div>
                                    <div class="rps-log-type flex-shrink-0 flex-grow-0 ml-3 text-center">' . 'xfdev_rock_paper_scissor_user_choice' . '
                                    </div>
                                    <div class="rps-log-bot flex-shrink-0 flex-grow-0 ml-3 text-center">' . 'xfdev_rock_paper_scissor_bot_choice' . '
                                    </div>
                                    <div class="rps-log-amount flex-shrink-0 flex-grow-0 ml-3 text-center">' . 'xfdev_rock_paper_scissor_bet_amount' . '
                                    </div>
                                    <div class="rps-log-outcome flex-shrink-0 flex-grow-0 ml-3 text-center">' . 'xfdev_rock_paper_scissor_result' . '
                                    </div>
                                </div>
                            </div>


                            <ul class="game-history-list">
                                ';
	if ($__templater->isTraversable($__vars['gameHistory'])) {
		foreach ($__vars['gameHistory'] AS $__vars['gameId'] => $__vars['game']) {
			$__finalCompiled .= '
                                    <li>
                                        <div class="main-row p-3 d-flex flex-row align-items-center font-weight-bold  position-relative ' . (($__vars['game']['result'] === 'won') ? 'dice-bet-win' : (($__vars['game']['result'] === 'lost') ? 'dice-bet-loss' : 'dice-bet-tie')) . '">
                                            <div class="position-relative rps-log-user flex-fill">
                                                ' . $__templater->func('avatar', array($__vars['game']['User'], 'xxs', false, array(
			))) . '
                                                ' . $__templater->func('username_link', array($__vars['game']['User'], false, array(
				'notooltip' => 'true',
				'style' => 'line-height: 25px;',
			))) . '
                                            </div>
                                            <div class="position-relative rps-log-time flex-shrink-0 flex-grow-0 ml-3 text-center d-none d-lg-block">
                                                ' . $__templater->func('date_dynamic', array($__vars['game']['played_at'], array(
			))) . '
                                            </div>
                                            <div class="position-relative rps-log-type flex-shrink-0 flex-grow-0 ml-3 text-center"
                                                 style="text-transform: capitalize">
                                                ' . $__templater->escape($__vars['game']['user_chosen_option']) . '
                                            </div>
                                            <div class="position-relative rps-log-bot flex-shrink-0 flex-grow-0 ml-3 text-center"
                                                 style="text-transform: capitalize">
                                                ' . $__templater->escape($__vars['game']['bot_chosen_option']) . '
                                            </div>
                                            <div class="position-relative rps-log-amount flex-shrink-0 flex-grow-0 ml-3 text-center"
                                                 style="text-transform: capitalize">
                                                ' . $__templater->escape($__vars['game']['bet_amount']) . '
                                            </div>
                                            <div class="position-relative rps-log-outcome flex-shrink-0 flex-grow-0 ml-3 text-center"
                                                 style="text-transform: capitalize">
                                                <span class="dice-bet-loss-txt">' . $__templater->escape($__vars['game']['result']) . '</span></div>
                                        </div>
                                    </li>
                                ';
		}
	}
	$__finalCompiled .= '
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="newHistoryTemplate" style="display: none">
    <li>
        <div class="main-row p-3 d-flex flex-row align-items-center font-weight-bold  position-relative newHistory-container">
            <div class="position-relative rps-log-user flex-fill">
                ' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
	))) . '
                ' . $__templater->func('username_link', array($__vars['xf']['visitor'], false, array(
		'notooltip' => 'true',
		'style' => 'line-height: 25px;',
	))) . '
            </div>
            <div class="position-relative rps-log-time flex-shrink-0 flex-grow-0 ml-3 text-center d-none d-lg-block">
                ' . $__templater->func('date_dynamic', array($__vars['xf']['time'], array(
	))) . '
            </div>
            <div class="position-relative rps-log-type flex-shrink-0 flex-grow-0 ml-3 text-center newHistory-user-choice"
                 style="text-transform: capitalize">

            </div>
            <div class="position-relative rps-log-bot flex-shrink-0 flex-grow-0 ml-3 text-center newHistory-bot-choice"
                 style="text-transform: capitalize">

            </div>
            <div class="position-relative rps-log-amount flex-shrink-0 flex-grow-0 ml-3 text-center newHistory-betAmount"
                 style="text-transform: capitalize">

            </div>
            <div class="position-relative rps-log-outcome flex-shrink-0 flex-grow-0 ml-3 text-center newHistory-result"
                 style="text-transform: capitalize">
                <span class="dice-bet-loss-txt"></span></div>
        </div>
    </li>
</div>

' . $__templater->includeTemplate('xfdev_rock_paper_scissor_js', $__vars);
	return $__finalCompiled;
}
);